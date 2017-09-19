<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Astra
 * @since 1.0.0
 */

/**
 * Index Content
 */
function astra_search_content() {
	
	astra_entry_before(); ?>

	<article itemtype="http://schema.org/CreativeWork" itemscope="itemscope" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php astra_entry_top(); ?>

		<?php astra_entry_content_blog(); ?>

		<?php astra_entry_bottom(); ?>

	</article><!-- #post-## -->

	<?php astra_entry_after();
}
add_action( 'astra_loop_content', 'astra_search_content' );

/**
 * Index Content Else.
 */
function astra_search_content_else() {

	get_template_part( 'template-parts/content', 'none' );
}
add_action( 'astra_loop_content_else', 'astra_search_content_else' );

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
