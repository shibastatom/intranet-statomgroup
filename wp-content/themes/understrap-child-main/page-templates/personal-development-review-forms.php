<?php
/**
 * Template Name: Personal Development Review Forms Template
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
            <div class="section py-4 lg:py-6 xl:py-8">
                <div class="container max-w-lg">
                    <div class="panel vstack gap-4 lg:gap-6 xl:gap-8">
                        <header class="shop-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                            <div class="panel">
                                <h1 class="h3 lg:h1">Personal Development Review Forms</h1>
                                <p class="fs-6 sm:fs-5 opacity-60">Click below to view or download the Personal Development Review forms.</p>
                            </div>
                        </header>
                        <div>
                            <div class="panel vstack gap-8">
                                <div class="panel vstack gap-4">
                                    <form class="panel max-h-sm overflow-auto border border-gray-50 dark:text-white dark:border-gray-700" action="?">
                                        <table class="table align-middle overflow-auto m-0 fs-6 dark:text-white dark:border-gray-700">
                                            <thead class="sticky-top ft-secondary bg-gray-800 text-white z-1">
                                                <tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                         <?php if( have_rows('personal_development_document_links') ): ?>
                                            <?php while( have_rows('personal_development_document_links') ): the_row(); ?>	
                                                
                                                <tr>
                                                    <td>
                                                        <h5 class="title h6 m-0"><a target="_blank" href="<?php the_sub_field('document_link'); ?>" class="text-none"><?php the_sub_field('document_label'); ?></a></h5>
                                                    </td>
                                                    <td>
                                                        <a target="_blank" href="<?php the_sub_field('document_link'); ?>" class="text-yellow">Download</a></p>
                                                    </td>
                                                </tr>
                                                
                                            <?php endwhile; endif; ?>
                                                
                                                
                                               
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Wrapper end -->

<?php
get_footer();
