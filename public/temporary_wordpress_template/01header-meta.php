<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php include('00hantei.php'); ?>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width">

	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/inc/html5.js"></script>
	<![endif]-->


<?php
wp_enqueue_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js');
wp_enqueue_script( 'myjs', get_template_directory_uri().'/my.js' ); 
?>

	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/inc/reset.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">

<?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>

