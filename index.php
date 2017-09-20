<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

add_action( 'astra_loop_content', 'astra_index_content' );
add_action( 'astra_loop_content_else', 'astra_index_content_else' );

get_header(); ?>

<?php astra_primary_before(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<main id="main" class="site-main" role="main">
		
			<div class="ast-row">
				
				<?php astra_before_loop(); ?>
		
				<?php astra_loop(); ?>
				
				<?php astra_after_loop(); ?>

			</div>
		
		</main><!-- #main -->

		<?php astra_pagination(); ?>

		<?php astra_primary_content_bottom(); ?>

	</div><!-- #primary -->

<?php astra_primary_after(); ?>

<?php get_footer(); ?>
