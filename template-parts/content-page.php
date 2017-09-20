<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

add_action( 'astra_page_entry_header_content', 'astra_page_entry_header_the_image', 5 );
add_action( 'astra_page_entry_header_content', 'astra_page_entry_header_the_title', 10 );

add_action( 'astra_page_entry_content_link_pages', 'astra_page_entry_content_the_link_pages', 10 );
add_action( 'astra_page_entry_edit_post_link', 'astra_page_entry_the_edit_post_link', 10 );

?>

<?php astra_entry_before(); ?>

<article <?php astra_attr( 'article', 'page' ); ?> <?php post_class(); ?>>

	<?php astra_entry_top(); ?>

	<header class="entry-header <?php astra_entry_header_class(); ?>">

		<?php do_action( 'astra_page_entry_header_content' ); ?>
	</header><!-- .entry-header -->

	<div <?php astra_attr( 'entry-content', 'page' ); ?> class="entry-content clear" >

		<?php astra_entry_content_before(); ?>

		<?php the_content(); ?>

		<?php astra_entry_content_after(); ?>

		<?php do_action( 'astra_page_entry_content_link_pages' ); ?>

	</div><!-- .entry-content .clear -->

	<?php do_action( 'astra_page_entry_edit_post_link' ); ?>

	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>
