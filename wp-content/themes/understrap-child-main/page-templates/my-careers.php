<?php
/**
 * Template Name: My Careers Template
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
    <!-- HERO SETION -->
    <?php get_template_part( 'global-templates/page-header' ); ?>

    <!-- MAIN CONENT -->
<?php
get_footer();
