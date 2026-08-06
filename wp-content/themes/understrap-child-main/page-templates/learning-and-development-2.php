<?php
/**
 * Template Name: Learning & Development 2 Template
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
                            <h1 class="h4 lg:h1"><?php the_title(); ?></h1>
                            <!--<p class="fs-6 lg:fs-5 opacity-60">Olympic mountain bikers, musicians, and award-winning chefs so special and fun.</p>-->
                        </header>
						
						<!-- NEW STAFF RESOURCE LISTINGS - START -->
						<div class="row g-4 xl:g-8">
							<div class="col">
								<div class="panel text-center">
									<div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 xl:child-cols-3 col-match gy-4 xl:gy-6 gx-2 sm:gx-4">

										<?php
										$query = new WP_Query([
											'post_type' => 'learning',
											'posts_per_page' => -1,
											'orderby'        => 'date',
											'order'          => 'ASC'
										]);

										while ($query->have_posts()) : $query->the_post();
										$image_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
										$card_image = get_the_post_thumbnail_url(null, 'medium') ? get_the_post_thumbnail_url(null, 'medium') : 'https://intranet.statomgroup.co.uk/wp-content/uploads/2026/06/Statom-Placeholder-1.png';
										$alternatives = get_field('alternatives');
										$link_text = $alternatives['link']['title'] ? $alternatives['link']['title'] : 'view';
										$link_url = '';
										$link_target = '_self';

										if (!empty($alternatives['link']['url'])) {
											$link_url = $alternatives['link']['url'];
											$link_target = $alternatives['link']['target'] ?: '_self';
										}
										else {
											$link_url = get_permalink();
										}
										?>

										<div>
											<article class="post type-post panel vstack gap-2">
                                                <div class="post-image panel overflow-hidden">
                                                    <figure class="featured-image m-0 ratio ratio-16x9 rounded uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
														<a href="<?= $link_url; ?>" target="<?php echo esc_attr($link_target); ?>">
															<img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?= $card_image ?>" data-src="<?= $card_image ?>" alt="<?php echo esc_attr($image_alt); ?>" data-uc-img="loading: lazy">
														</a>
                                                    </figure>
                                        
                                                    <div class="position-absolute top-0 end-0 w-150px h-150px rounded-top-end bg-gradient-45 from-transparent via-transparent to-black opacity-50"></div>
                                                    <span class="cstack position-absolute top-0 end-0 fs-6 w-40px h-40px text-white">
                                             
                                                            <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/08/cropped-favicon.png">
                                                    </span>
                                                </div>
                                                <div class="post-header panel vstack gap-1 lg:gap-2">
                                                    <h3 class="post-title h6 sm:h5 m-0 text-truncate-2 m-0">
                                                        <?php the_title(); ?>
                                                    </h3>
                                                    <div>
                                                        <div class="post-meta panel hstack justify-center fs-7 fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex">
                                                            <div class="meta">
                                                                <div class="hstack gap-2">
                                                                    <div>
                                                                        <div class="hstack gap-1">
                                                                         
                                                                            <a 
																			   target="<?php echo esc_attr($link_target); ?>" 
																			   href="<?= $link_url; ?>" 
																			   class="text-yellow text-underline text-none fw-bold"><?= $link_text; ?></a>
                                                                        </div>
                                                                    </div>
                                                                   
                                                                </div>
                                                            </div>
                                                            <div class="actions">
                                                                <div class="hstack gap-1"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
										</div>

										<?php
										endwhile;
										wp_reset_postdata();
										?>

									</div>
								</div>
							</div>
						</div>
						<!-- NEW STAFF RESOURCE LISTINGS - END -->
						
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
        </div>

        <!-- Wrapper end -->

<?php
get_footer();