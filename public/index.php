<?php
/**
* tk_mix_wordpress web flame ver 1.0
*/
require_once($_SERVER['DOCUMENT_ROOT']."/project/setup.php");
echo Tk::htmlhead();
?>
<head>

<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>

テンプレートエンジンを入れるかどうか


<?php if(Tk::Pccheck()=="pc"): ?>
pcの場合はこれを表示
<?php else: ?>
スマホ、タブレットの場合
<?php endif; ?>

<?php //edit_post_link(); ?>

<?php include(__DIR__."/side.php"); ?>

<?php wp_footer() ?>
</body>
</html>