<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

add_action( 'astra_entry_top', 'astra_entry_header_markup_open', 5 );
add_action( 'astra_entry_top', 'astra_entry_header_markup_close', 15 );
add_action( 'astra_entry_top', 'astra_entry_the_post_image', 6 );
add_action( 'astra_entry_top', 'astra_entry_the_post_title', 8 );

add_action( 'astra_entry_content_before', 'astra_entry_content_markup_open', 5 );
add_action( 'astra_entry_content_after', 'astra_entry_content_markup_close', 15 );
add_action( 'astra_entry_content', 'astra_entry_the_content', 8 );
add_action( 'astra_entry_content', 'astra_entry_the_link_pages', 12 );
add_action( 'astra_entry_content', 'astra_entry_the_edit_post_link', 20 );

add_action( 'astra_entry_after', 'astra_entry_the_the_comments', 5 );

function astra_entry_header_markup_open() {
	?>
	<header class="entry-header <?php astra_entry_header_class(); ?>">
	<?php
}

function astra_entry_header_markup_close() {
	?>
	</header><!-- .entry-header -->
	<?php
}

function astra_entry_the_post_image() {
	
	astra_get_post_thumbnail();
}

function astra_entry_the_post_title() {
	
	astra_the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' );
}

function astra_entry_content_markup_open() {
	?>
	<div class="entry-content clear" itemprop="text">
	<?php
}
function astra_entry_content_markup_close() {
	?>
	</div><!-- .entry-content .clear -->
	<?php
}

function astra_entry_the_content() {

	the_content();
}

function astra_entry_the_link_pages() {
	
	wp_link_pages(
		array(
			'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),
			'after'       => '</div>',
			'link_before' => '<span class="page-link">',
			'link_after'  => '</span>',
		)
	);
}

function astra_entry_the_edit_post_link() {
	astra_edit_post_link(

		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'astra' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<footer class="entry-footer"><span class="edit-link">',
		'</span></footer><!-- .entry-footer -->'
	);
}

function astra_entry_the_the_comments() {

	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;
}
return;
?>



<?php astra_entry_before(); ?>

<article itemtype="http://schema.org/CreativeWork" itemscope="itemscope" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php astra_entry_top(); ?>
	
	<header class="entry-header <?php astra_entry_header_class(); ?>">

		<?php astra_get_post_thumbnail(); ?>

		<?php astra_the_title( '<h1 class="entry-title" itemprop="headline">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content clear" itemprop="text">

		<?php astra_entry_content_before(); ?>

		<?php the_content(); ?>

		<?php astra_entry_content_after(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . esc_html( astra_default_strings( 'string-single-page-links-before', false ) ),
					'after'       => '</div>',
					'link_before' => '<span class="page-link">',
					'link_after'  => '</span>',
				)
			);
		?>

	</div><!-- .entry-content .clear -->

	<?php
		astra_edit_post_link(

			sprintf(
				/* translators: %s: Name of current post */
				esc_html__( 'Edit %s', 'astra' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			),
			'<footer class="entry-footer"><span class="edit-link">',
			'</span></footer><!-- .entry-footer -->'
		);
	?>

	<?php astra_entry_bottom(); ?>

</article><!-- #post-## -->

<?php astra_entry_after(); ?>
