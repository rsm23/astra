<?php
/**
 * Loops for structure.
 *
 * @package Astra
 * @since 1.0.0
 */


add_action( 'astra_loop', 'astra_global_loop' );

function astra_global_loop() {

	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'single' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;
		

	endwhile;
}