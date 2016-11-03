<?php include(dirname(__FILE__)."/00head.php"); ?>

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




<?php require_once(dirname(__FILE__)."/03side.php"); ?>

<!-- contents -->
<?php get_template_part( 'loop' ); ?>

<?php include(dirname(__FILE__)."/04footer.php"); ?>