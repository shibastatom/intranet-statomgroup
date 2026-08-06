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

     <!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-hidden-x">
        
            <div class="section py-3 sm:py-6 lg:py-9">
                <div class="container max-w-xl">
                    <div class="panel vstack gap-3 sm:gap-6 lg:gap-9">
                        <header class="page-header vstack justify-center items-center text-center max-w-700px mx-auto">
                            <h1 class="h4 lg:h1">My Careers</h1>
                            <p class="fs-6 lg:fs-5 opacity-60">Lorem Ipusm</p>
                        </header>
                        <div class="row g-4 xl:g-8">
                            <div class="col">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
        </div>

        <!-- Wrapper end -->

<?php
get_footer();