<?php
/**
 * Layout for structure.
 *
 * @package Astra
 * @since 1.0.0
 */


add_action( 'astra_before_content', 'astra_left_sidebar_layout' );

function astra_left_sidebar_layout() {
	
	if ( astra_page_layout() == 'left-sidebar' ) :
		get_sidebar();
	endif;
}

add_action( 'astra_after_content', 'astra_right_sidebar_layout' );
function astra_right_sidebar_layout() {

	if ( astra_page_layout() == 'right-sidebar' ) :
		get_sidebar();
	endif;
}