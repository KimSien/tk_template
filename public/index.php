<?php include(dirname(__FILE__)."/00head.php"); ?>

<?php include(MYTEMPLATEPATH."/inc/test.php"); ?>

<?php if(Tk::Pccheck()=="pc"): ?>
pcの場合はこれを表示
<?php else: ?>
スマホ、タブレットの場合
<?php endif; ?>




<?php require_once(dirname(__FILE__)."/03side.php"); ?>

<!-- contents -->
<?php get_template_part( 'loop' ); ?>

<?php include(dirname(__FILE__)."/04footer.php"); ?>