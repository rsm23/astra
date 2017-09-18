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

<?php do_action( 'astra_before_content' ); ?>
		
	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<main id="main" class="site-main" role="main">

		<?php 

		do_action( 'astra_before_loop' );
		
		do_action( 'astra_loop' );
		
		do_action( 'astra_after_loop' );

		?>

		</main><!-- #main -->

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->
	
<?php do_action( 'astra_after_content' ); ?>

<?php get_footer(); ?>
