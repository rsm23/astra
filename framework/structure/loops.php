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

		while ( have_posts() ) : the_post();

			astra_entry_before();

			?>
			
			<article itemtype="http://schema.org/CreativeWork" itemscope="itemscope" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
			<?php

			astra_entry_top();
			
			astra_entry_content_before();

			astra_entry_content();
			
			astra_entry_content_after();

			astra_entry_bottom();

			?>

			</article><!-- #post-## -->

			<?php

			astra_entry_after();

		endwhile;

		do_action( 'astra_content_while_after' );

	else :

		do_action( 'astra_loop_content_else' );

	endif;
}
add_action( 'astra_loop', 'astra_global_loop' );
