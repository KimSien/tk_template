<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<div class="log-title">
<h1><?php the_title(); ?></h1>
</div> <!-- log-title -->

<div class="log-main">
<?php the_content(); ?>
</div> <!-- log-main -->

　
<?php edit_post_link(); ?>
</span>

<?php
endwhile;
endif;
?>

