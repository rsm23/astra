<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

?>

<?php

add_action( 'astra_entry_content_page', 'astra_entry_content_page_template', 10 );
add_action( 'astra_entry_content', 'astra_page_content', 10 );

add_action( 'astra_entry_page_header_content', 'astra_entry_page_header_the_image', 5 );
add_action( 'astra_entry_page_header_content', 'astra_entry_page_header_the_title', 10 );

add_action( 'astra_entry_page_content_link_pages', 'astra_entry_page_content_the_link_pages', 10 );
add_action( 'astra_entry_page_edit_post_link', 'astra_entry_page_the_edit_post_link', 10 );

?>

<?php astra_entry_before(); ?>

<article itemtype="http://schema.org/CreativeWork" itemscope="itemscope" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php astra_entry_top(); ?>

	<?php astra_entry_content_page(); ?>
	
	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>