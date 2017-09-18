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

function astra_single_content() {
	get_template_part( 'template-parts/content', 'single' );
}
add_action( 'astra_loop_content', 'astra_single_content' );

function astra_single_comments() {
	
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
}
add_action( 'astra_loop_content', 'astra_single_comments' );

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
