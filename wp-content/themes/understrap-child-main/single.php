<?php
/**
 * The template for displaying all single posts
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

            <article class="post type-post single-post py-4 lg:py-6 xl:py-9">
                <div class="container max-w-xl">
                    <div class="post-header">
                        <div class="panel vstack gap-4 md:gap-6 xl:gap-8 text-center">
                            <div class="panel vstack items-center max-w-400px sm:max-w-500px xl:max-w-md mx-auto gap-2 md:gap-3">
                                <h1 class="h4 sm:h2 lg:h1 xl:display-6"><?php the_title(); ?></h1>
                            </div>
							<?php if ( has_post_thumbnail() ) : ?>
								<figure style="max-width: 1200px;" class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800 m-auto">
									<?php 
							
									the_post_thumbnail('full', [
										'class' => 'media-cover image uc-transition-scale-up uc-transition-opaque',
										'loading' => 'lazy',
										'alt' => get_the_title(),
									]); 
									?>
								</figure>
							<?php else : ?>
								<figure class="featured-image m-0 ratio ratio-2x1 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
									<img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/common/img-fallback.png'); ?>" alt="Fallback image" loading="lazy">
								</figure>
							<?php endif; ?>


                        </div>
                    </div>
                </div>
                <div class="panel mt-4 lg:mt-6 xl:mt-9">
                    <div class="container">
                        <div class="content-wrap row child-col-12 lg:child-cols g-4 lg:g-6">
                            <div class="lg:col-12 uc-first-column">
                                <div class="max-w-lg single-post-container">
                                    <div class="post-content panel fs-6 md:fs-5" data-uc-lightbox="animation: scale">
										<?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Newsletter -->
        </div>

        <!-- Wrapper end -->

<?php
get_footer();
