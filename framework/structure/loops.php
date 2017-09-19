<?php
/**
 * Loops for structure.
 *
 * @package Astra
 * @since 1.0.0
 */

/**
 * Astra Global Loop.
 */
function astra_global_loop() {

	if ( have_posts() ) :

		do_action( 'astra_content_while_before' );

		while ( have_posts() ) :
			the_post();

			do_action( 'astra_loop_content' );

		endwhile;

		do_action( 'astra_content_while_after' );

	else :

		do_action( 'astra_loop_content_else' );

	endif;
}
add_action( 'astra_loop', 'astra_global_loop' );
