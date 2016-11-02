<?php
/**
* tk_mix_wordpress web flame ver 1.0
*/
require_once($_SERVER['DOCUMENT_ROOT']."/project/setup.php");
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation Starter Template</title>

    <!-- css setting -->
    <?php require("config_css.php"); ?>

<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>

テンプレートエンジンを入れるかどうか

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

<?php if(Tk::Pccheck()=="pc"): ?>
pcの場合はこれを表示
<?php else: ?>
スマホ、タブレットの場合
<?php endif; ?>

<?php //edit_post_link(); ?>

<?php include(__DIR__."/side.php"); ?>

<?php wp_footer() ?>
</body>

    <!-- js setting -->
    <?php require("config_js.php"); ?>
</html>