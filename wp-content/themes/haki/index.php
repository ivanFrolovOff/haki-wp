<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package haki
 */

get_header(); ?>
<?php get_template_part( 'template-parts/content-nav', get_post_format() ); ?>
<?php get_template_part( 'template-parts/content-gallery', get_post_format() ); ?>
<?php get_template_part( 'template-parts/content-advantages', get_post_format() ); ?>
<?php get_template_part( 'template-parts/content-about', get_post_format() ); ?>
<?php get_template_part( 'template-parts/content-partners', get_post_format() ); ?>
<?php
get_footer();
