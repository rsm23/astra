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

<?php do_action( 'astra_before_content_sidebar_wrap' ); ?>

<?php if ( astra_page_layout() == 'left-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

	<?php do_action( 'astra_before_content' ); ?>
		
		
	<div id="primary" <?php astra_primary_class(); ?>>
		

		<?php astra_primary_content_top(); ?>

		<main id="main" class="site-main" role="main">

		<?php do_action( 'astra_before_loop' ); ?>
		<?php do_action( 'astra_loop' ); ?>
		<?php do_action( 'astra_after_loop' ); ?>

		<?php
		while ( have_posts() ) :
			the_post();
		?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
				endif;
			?>

		<?php endwhile; ?>

		</main><!-- #main -->

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->
	
	<?php do_action( 'astra_after_content' ); ?>

<?php if ( astra_page_layout() == 'right-sidebar' ) : ?>

	<?php get_sidebar(); ?>

<?php endif ?>

<?php do_action( 'astra_after_content_sidebar_wrap' ); ?>

<?php get_footer(); ?>
