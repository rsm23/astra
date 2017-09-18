<?php
/**
 * Loops for structure.
 *
 * @package Astra
 * @since 1.0.0
 */


add_action( 'astra_loop', 'astra_global_loop' );

function astra_global_loop() {

	if ( have_posts() ) :

		do_action( 'astra_before_while' );

		while ( have_posts() ) : the_post();
			
			do_action( 'astra_loop_content' );

		endwhile;

		do_action( 'astra_after_endwhile' );

	else :

		do_action( 'astra_loop_else' );

	endif;
}