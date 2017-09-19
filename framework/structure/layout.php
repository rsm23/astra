<?php
/**
 * Layout for structure.
 *
 * @package Astra
 * @since 1.0.0
 */

/**
 * Left Sidebar Layout.
 */
function astra_left_sidebar_layout() {

	if ( astra_page_layout() == 'left-sidebar' ) :
		get_sidebar();
	endif;
}
add_action( 'astra_primary_before', 'astra_left_sidebar_layout' );

/**
 * RIght Sidebar Layout
 */
function astra_right_sidebar_layout() {

	if ( astra_page_layout() == 'right-sidebar' ) :
		get_sidebar();
	endif;
}
add_action( 'astra_primary_after', 'astra_right_sidebar_layout' );
