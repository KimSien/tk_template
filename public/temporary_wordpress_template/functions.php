<?php
// no touch
// ----------------------------------------------------------

// no touch
// ----------------------------------------------------------
	//アイキャッチを使用可能に
	function eyechatchset(){

		add_theme_support('post-thumbnails');


	}

	add_action('after_setup_theme','eyechatchset');


// ----------------------------------------------------------
// pタグ除去
remove_filter('the_content', 'wpautop');

// ----------------------------------------------------------
//カテゴリーの記事リストを抽出
function catposFunc($atts) {
 
global $wp_query;

    extract(shortcode_atts(array(
        'kazu' => 2,
        'cat' => 1,
    ), $atts));

$posts_per_page = $kazu;
$cat = $cat;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

 	$out_text .='<div class="clear"></div><div id="jisseki" class="lbox1-box">';

    query_posts(
        Array(
	'paged' => $paged,
            'post_type' => 'post',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => $posts_per_page,
            'cat' => $cat
        )
    );

	$max_page = $wp_query->max_num_pages;
 

    if (have_posts()) : while (have_posts()) : the_post();
 
	//アイキャッチURLのみ取得
	$iimage = wp_get_attachment_url( get_post_thumbnail_id() );

	//$out_text .= '<li>'.$iimage.'<br>"' . get_permalink(). '">' .  . '</a></li>';

	$out_text .=	'<div class="lbox1">';

	$out_text .=	'<a href="';
	$out_text .=	get_permalink();
	$out_text .=	'">';

	$out_text .=	'<img class="lbox1-image" src="' . $iimage . '">';
	$out_text .=	'<span class="ptag">';

	$out_text .=	get_the_title();

	$out_text .=	'</span></a>';
	$out_text .=	'</div>';
		
 
   
    endwhile; endif;



 
 	$out_text .='<div class="clear"></div><hr>';



/* ページネイション */

	if(  $wp_query->max_num_pages > 1 ){

	$category_link = get_category_link( $cat );
 	$cat_href .= $category_link;

	$maxs = $wp_query->max_num_pages;

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
	$out_text .='</div>';
   wp_reset_query();
  return $out_text;
}
add_shortcode('catpos', 'catposFunc');














// ----------------------------------------------------------



//親ページ以下のの子ページリストを抽出
function perposFunc($atts) {

    extract(shortcode_atts(array(
        'ids' => 1,
	'kazu'=>30,
    ), $atts));

$kazu=$kazu;
$showposts = $p1;
$posts_per_page = $p2;
$ids = $ids;
  
  
    query_posts(
        Array(
        'posts_per_page' => $kazu,
	'post_parent' => $ids,
	'post_type' => 'page',
	'sort_order' => 'DESC',
	'sort_column' => 'menu_order',
        )
    );
 
    if (have_posts()) : while (have_posts()) : the_post();
 
$strb .= "<li>";
$strb .= "<a href=";
$strb .= get_permalink();
$strb .= "> ";
$strb .= get_the_title();
$strb .= "</a></li>";
 


    endwhile; endif;
    wp_reset_query();
    	$strb .='<div class="clear"></div>';
 return $strb;
}
add_shortcode('perpos', 'perposFunc');



//固定ページにタグ設置
function add_tag_to_page() {
 register_taxonomy_for_object_type('post_tag', 'page');
}
add_action('init', 'add_tag_to_page');

//モバイルの時は表示させない
function is_mobile () {
   $useragents = array(
   'iPad',
   'iPhone',
   'iPod',
   'Android',
);
$pattern = '/'.implode('|', $useragents).'/i';
return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}


?>