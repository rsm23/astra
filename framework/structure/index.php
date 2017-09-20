<?php
/**
 * Index Functions.
 *
 * @package Astra
 * @since 1.0.0
 */

/**
 * Index Content
 */
function astra_index_content() {
	/*
	 * Include the Post-Format-specific template for the content.
	 * If you want to override this in a child theme, then include a file
	 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
	 */
	get_template_part( 'template-parts/content', astra_get_post_format() );
}
/**
 * Index Content Else.
 */
function astra_index_content_else() {

	get_template_part( 'template-parts/content', 'none' );
}