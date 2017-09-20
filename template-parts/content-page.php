<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

add_action( 'astra_page_entry_header_content', 'astra_page_entry_header_the_image', 5 );
add_action( 'astra_page_entry_header_content', 'astra_page_entry_header_the_title', 10 );

add_action( 'astra_page_entry_content_link_pages', 'astra_page_entry_content_the_link_pages', 10 );
add_action( 'astra_page_entry_edit_post_link', 'astra_page_entry_the_edit_post_link', 10 );

function astra_page_entry_header_the_image() {
	
	astra_get_post_thumbnail();
}

function astra_page_entry_header_the_title() {
	
	astra_the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
}

function astra_page_entry_content_the_link_pages() {
	
	wp_link_pages(
		array(
			'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),
			'after'       => '</div>',
			'link_before' => '<span class="page-link">',
			'link_after'  => '</span>',
		)
	);
}

function astra_page_entry_the_edit_post_link() {
	astra_edit_post_link(

		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'astra' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	);
}

?>



<?php astra_entry_before(); ?>

<article itemtype="http://schema.org/CreativeWork" itemscope="itemscope" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php astra_entry_top(); ?>

	<header class="entry-header <?php astra_entry_header_class(); ?>">

		<?php do_action( 'astra_page_entry_header_content' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content clear" itemprop="text">

		<?php astra_entry_content_before(); ?>

		<?php the_content(); ?>

		<?php astra_entry_content_after(); ?>

		<?php do_action( 'astra_page_entry_content_link_pages' ); ?>

	</div><!-- .entry-content .clear -->

	<?php do_action( 'astra_page_entry_edit_post_link' ); ?>

	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>
