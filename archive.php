<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

/**
 * Archive Content
 */
function astra_archive_content() {
	/*
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
	get_template_part( 'template-parts/content', astra_get_post_format() );
}
add_action( 'astra_loop_content', 'astra_archive_content' );

/**
 * Archive Content Else.
 */
function astra_archive_content_else() {

	get_template_part( 'template-parts/content', 'none' );
}
add_action( 'astra_loop_content_else', 'astra_archive_content_else' );

get_header(); ?>

<?php astra_primary_before(); ?>

	<div id="primary" <?php astra_primary_class(); ?>>

		<?php astra_primary_content_top(); ?>

		<?php astra_archive_header(); ?>

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
