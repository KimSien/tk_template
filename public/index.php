<?php
/**
 * Onepress functions
 *
 * @package WordPress
 * @subpackage Onepress
 *
 * tk_mix_wordpress web flame ver 1.0
 */
include("project/setup.php");
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    
    <link rel="shortcut icon" href="http://www.toysking.jp/favicon.ico">

    
    <title><?php echo wp_title(' - ', true, 'right').bloginfo('name'); ?></title>
	<!-- 
    <meta name="description" content="<?php echo $n_description; ?>">
	<meta name="keywords" content="<?php echo $n_keyword; ?>">
    -->


    <!-- css setting -->
    <?php require_once("config_css.php"); ?>

<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>


<?php if(Tk::Pccheck()=="pc"): ?>
pcの場合はこれを表示
<?php else: ?>
スマホ、タブレットの場合
<?php endif; ?>



<div class="row small-up-1 medium-up-2 large-up-4">
  <div class="column">
    <img src="//placehold.it/300x300" class="thumbnail" alt="">
  </div>
  <div class="column">
    <img src="//placehold.it/300x300" class="thumbnail" alt="">
  </div>
  <div class="column">
    <img src="//placehold.it/300x300" class="thumbnail" alt="">
  </div>
  <div class="column">
    <img src="//placehold.it/300x300" class="thumbnail" alt="">
  </div>
  <div class="column">
    <img src="//placehold.it/300x300" class="thumbnail" alt="">
  </div>
  <div class="column">
    <img src="//placehold.it/300x300" class="thumbnail" alt="">
  </div>
</div>




<?php require_once(TEMPLATEPATH."/side.php"); ?>

<?php get_template_part( 'loop' ); ?>



<?php wp_footer() ?>
</body><!-- js setting -->
<?php require_once("config_js.php"); ?>
</html>