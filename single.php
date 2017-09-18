<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Astra
 * @since 1.0.0
 */


/* ==================================================== */	
get_header(); ?>

<?php astra_before_content() ?>
		
	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<main id="main" class="site-main" role="main">

		<?php 

		astra_before_loop();
		
		astra_loop();
		
		astra_after_loop();

		?>

		</main><!-- #main -->

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->
	
<?php astra_after_content(); ?>

<?php get_footer(); ?>
