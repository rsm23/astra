<?php
/**
 * Search Functions.
 *
 * @package Astra
 * @since 1.0.0
 */

/**
 * Search Content
 */
function astra_search_content_template() {

	get_template_part( 'template-parts/search/search-layout' );
}
/**
 * Search Content Else.
 */
function astra_search_content_else_template() {

	get_template_part( 'template-parts/content', 'none' );
}