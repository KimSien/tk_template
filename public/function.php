<?php
/**
 * Onepress functions
 *
 * @package WordPress
 * @subpackage Onepress
 */


//ウィジェット
if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2 class="hobby-widget">',
        'after_title' => '</h2>',
    ));

//css読み込み
add_editor_style('editor-style.css');
//css読み込み

//タイトルプレースホルダ
function title_text_input( $title ){
     return $title = 'タイトルは必須です。';
}
add_filter( 'enter_title_here', 'title_text_input' );
//タイトルプレースホルダ　エラー回避の為




//画像を抽出する php the_image();  
function the_image($type='thumbnail',$num=0){
    global $post;
    $post_ID = $post->ID;
    $files = get_children("post_parent={$post_ID}&post_type=attachment&post_mime_type=image");
    if (!empty($files)){
        $keys = array_keys($files);
        $img_num=$keys[$num];
        echo wp_get_attachment_image($img_num,$type);
    }
}

add_theme_support( 'post-thumbnails' ); 

//画像を抽出する php the_image(); 


//サムネイル　php the_image();　じゃない方法で、絶対パスを抽出する

function getPostImage($mypost){
	if(empty($mypost)){ return(null); }
	if(ereg('<img([ ]+)([^>]*)src\=["|\']([^"|^\']+)["|\']([^>]*)>',$mypost->post_content,$img_array)){

		// imgタグで直接画像にアクセスしているものがある
		$dummy=ereg('<img([ ]+)([^>]*)alt\=["|\']([^"|^\']+)["|\']([^>]*)>',$mypost->post_content,$alt_array);
		$resultArray["url"] = $img_array[3];
		$resultArray["alt"] = $alt_array[3];
	}else{
 
	// 直接imgタグにてアクセスされていない場合は紐づけられた画像を取得
	$files = get_children(array('post_parent' => $mypost->ID, 'post_type' => 'attachment', 'post_mime_type' => 'image'));
	if(is_array($files) && count($files) != 0){
		$files=array_reverse($files);
		$file=array_shift($files);
		$resultArray["url"] = wp_get_attachment_url($file->ID);
		$resultArray["alt"] = $file->post_title;
	}else{
		return(null);
	}
}
	return($resultArray);
}

//サムネイル　php the_image();　じゃない方法で、絶対パスを抽出する



//head内のwpのバージョンを消す
remove_action('wp_head','wp_generator');
//head内のwpのバージョンを消す


//固定ページ
register_nav_menus(array(
    'menuone' => 'メニュー１',
    'menutwo' => 'メニュー２'
));
 
add_filter( 'show_admin_bar', '__return_false' );



//コメント欄
function custom_comment_display($comment,$args,$depth){
    $GLOBALS['comment']=$comment;?>
    <li class="comment-post">
        <div class="comment-meta"> 
        <span class="comment-author">
            <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
        </span>
        <span class="comment-date">
            <?php comment_date();?><?php comment_time();?>
        </span>
        </div>
 
        <div class="comment-content">
            <?php comment_text();?>
        </div>
    </li>
 
<?php
}




//追加function


//スクレイピングで取り込み
function toyslist_output_func( $attrs, $content = null ) {
 
  $urlimage = $content;
  $homepage = file_get_contents($urlimage);
 

 list($one,$two) = explode('<h2>リスト</h2>', $homepage);
 list($san,$si) = explode('<img alt="提供　トイズキング" src=', $two);
 
 $outdata =$san;
 
  $outdata = mb_convert_encoding($outdata,"UTF-8","auto");
 
 
 return $outdata;          
 
}
  
add_shortcode( 'toyslist', 'toyslist_output_func' );



























// ----------------------------------------------------------
//カテゴリーの記事リストを抽出
function catposFunc2($atts) {
 
//global $wp_query;
//通常投稿しか使わないバージョン。下の３とページングの処理が違う。
//[catpos2 kazu=10 cat=0 type=post]
//一応メタキーにも対応はさせている。メタキーによっての絞込も出来る。

    extract(shortcode_atts(array(
        'kazu' => 2,
        'cat' => 1,
	'type' => 'post',
	'key' =>'',
	'value' => ''
    ), $atts));


$posts_per_page = $kazu;
$cat = $cat;
$type= $type;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$metakey=$key;
$metavalue = $value;


 	$out_text .='<div class="clear"></div><div id="jisseki">';

    
     $args = array(
	'paged' => $paged,
	'post_type' => $type,
	'orderby' => 'date',
	'order' => 'DESC',
	'posts_per_page' => $posts_per_page,
	'cat' => $cat,
	'meta_key' => $metakey,
	'meta_value' => $metavalue 

        );

	$the_query = new WP_Query($args);


	$max_page = $the_query->max_num_pages;
 

if ( $the_query->have_posts() ) :

	$titleplus='<div id="pankuzu" style="margin-bottom:5px;">買取実績</div>';


  while ( $the_query->have_posts() ) : $the_query->the_post();

	//アイキャッチURLのみ取得
	$iimage = wp_get_attachment_url( get_post_thumbnail_id() );

	//$out_text .= '<li>'.$iimage.'<br>"' . get_permalink(). '">' .  . '</a></li>';

	$out_text .=	'<div class="list-page"><div class="lbox1" style="width:120px;height:250px;float:left;overflow:hidden;">';

	$out_text .=	'<a href="';
	$out_text .=	get_permalink();
	$out_text .=	'">';

	$out_text .=	'<div class="lbox1_1" style=""><div class="lbox1_2" style=""><p><img style="max-width:100px;" src="' . $iimage . '"></p></div></div>';
	$out_text .=	'<span class="ptag">';

	//$out_text .=	"<h2>".get_the_title() ."</h2><br><br>".get_the_content();
	$out_text .=	"<h3>".get_the_title() ."</h3>";

	$out_text .=	'</span></a>';
	$out_text .=	'</div></div>';
		
 endwhile;
 
   
endif;

 
 	$out_text .='<div style="clear:both;height:10px;"></div>';



/* ページネイション */
	if(  $the_query->max_num_pages > 1 ){

	$category_link = get_category_link( $cat );
 	$cat_href .= $category_link;

	$maxs = $the_query->max_num_pages;

	$out_text .= '<li class="catpaged-box">'. $paged .'';
	$out_text .= '/'. $maxs .'</li>';
	$out_text .= '<a href="'.$cat_href. '"><li class="catpaged">'. '<<' .'</li></a>';
	

						/* explodeバージョン　ボツ
								$url1 = "http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
								$url2 = explode('/page/',$url1);

							$out_text .= $url2[0];
						*/



		$kaisi = $paged;
		$syuuryou = $maxs;


	//A10ページ以下の場合
	if($maxs < 10){
			$kaisi = 1;
			$syuuryou = $maxs;

	//A10ページ以上の場合
	}else{

			$sabun = $maxs - $paged;

			//最後のページまで１０以下の場合
			if($sabun < 10){
				
				$syuuryou = $maxs;
				$kaisi= $maxs-10;

			}else{
				$syuuryou = $paged + 10;
				$kaisi = $paged;
			}

	}



		for($i = $kaisi ; $i < ($syuuryou+1); $i++){

			if($paged == $i){
			$out_text .= '<li class="genzai">'.$i.'</li>';
			}else{
			$out_text .= '<a href="'.$cat_href.'/page/'.$i.'#jisseki"><li class="catpaged">'.$i.'</li></a>';
			}

		}


	$out_text .= '<a href="'.$cat_href.'/page/'.$maxs.'#jisseki"><li class="catpaged">'. '>>' .'</li></a>';


	} //endif;


/* ページネイションend */




 	$out_text .='<div class="clear"></div>';
	$out_text .='</div><div style="height:10px;"></div>';

wp_reset_postdata();

  return $titleplus . $out_text;
}
add_shortcode('catpos2', 'catposFunc2');
