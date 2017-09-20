<?php
/**
 * Page Actions.
 *
 * @package Astra
 * @since 1.0.0
 */

/**
 * Page Content.
 */
function astra_page_content() {
	get_template_part( 'template-parts/content', 'page' );
}
/**
 * Page Comments.
 */
function astra_page_comments() {

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
}

/**
 * Page Featured Image.
 */
function astra_page_entry_header_the_image() {
	
	astra_get_post_thumbnail();
}

/**
 * Page Title.
 */
function astra_page_entry_header_the_title() {
	
	astra_the_title( '<h1 class="entry-title" ' . astra_attr( 'post-entry-title', '', false ) . '>', '</h1>' );
}

/**
 * Page Link Pages.
 */
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

/**
 * Page Edit Link.
 */
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
