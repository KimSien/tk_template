<?php include('01header-meta.php'); ?>


<div class="haba mannaka">


	<?php include('02header.php'); ?>

		<div class="haba-20 left back-haiiro">
		hidari
		</div>

		<div class="haba-80 right back-kiiro">
		<!-- テンプレート -->
		<?php
		if(have_posts()):
		while(have_posts()):
		the_post();

			the_title();
			the_content();

		endwhile;
		endif;
		?>
		</div> <!-- haba80 -->

</div> <!-- haba -->
<?php include('04footer.php'); ?>