<?php
/**
 * Single Actions.
 *
 * @package Astra
 * @since 1.0.0
 */

/**
 * Single Content.
 */
function astra_single_content() {
	get_template_part( 'template-parts/content', 'single' );
}

/**
 * Single Comments.
 */
function astra_single_comments() {

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
}