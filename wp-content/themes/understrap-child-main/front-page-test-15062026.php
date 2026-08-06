<?php
/**
 * Template Name: Home Page Update - 15062026
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


<style>
/* Section wrapper */
.stnc-section {
/*   padding: 60px 20px; */
}

/* Two-column layout */
.stnc-container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px 40px;
/*   max-width: 1200px; */
  margin: 0 auto;
}

/* Column */
.stnc-column {
  display: flex;
  flex-direction: column;
}

/* Items grid */
.stnc-items {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 40px 20px;
}

/* ✅ Responsive: stack items to 1 per row */
@media (max-width: 768px) {
  .stnc-items {
    grid-template-columns: 1fr;
  }
}

/* ✅ Responsive: stack columns */
@media (max-width: 900px) {
  .stnc-container {
    grid-template-columns: 1fr;
  }
}
</style>


<div id="container">
                
                <!-- Code generated at https://WeatherWidget.io -->  
                <a class="weatherwidget-io" href="https://forecast7.com/en/51d51n0d13/london/" data-label_1="LONDON" data-label_2="WEATHER" data-theme="orange" >LONDON WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://weatherwidget.io/js/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","weatherwidget-io-js");
                </script>
                <!-- / Code generated at https://WeatherWidget.io --> 
                
                </div>

                <!-- Section start -->
            <div class="section panel overflow-hidden-x">
                <div class="section-outer panel pt-4 md:pt-6 lg:pt-8 xl:pt-9 pb-4 md:pb-6 lg:pb-8 xl:pb-9 d-none">
                    <div class="container max-w-2xl p-0 sm:px-2 lg:px-4 xl:px-0">
                        <div class="section-inner panel vstack gap-0 sm:gap-2 xl:gap-3">
                         
                            <div class="panel">
                                <div class="row child-cols-12 sm:child-cols-6 lg:child-cols-4 xl:child-cols-3 g-0 sm:g-2 xl:g-3 col-match" data-uc-grid>
                                    <div class="order-2 sm:order-1">
                                        <div class="list-layout panel p-2 pb-3 sm:p-2 mt-2 sm:mt-0 bg-white dark:bg-gray-900">
                                            <div class="list-header panel mb-2 hstack justify-between ga-2">
                                                <h2 class="list-title h5 m-0 hstack gap-1">
                                                    <i class="icon icon-narrow unicon-flash-filled text-primary"></i>
                                                    <span>Latest <span class="text-primary">Updates</span></span>
                                                </h2>
                                                <a href="blog-details.html" class="link fs-6 fw-bold text-uppercase text-none gap-1 mt-narrow sm:mt-1 hover:text-gray-900 dark:hover:text-white duration-200 sm:d-none">
                                                    <span>See All</span>
                                                </a>
                                            </div>
                                            <div class="list-content panel overflow-auto h-400px sm:h-700px lg:h-600px xl:h-550px">
                                                <div class="row sep-x gy-2 gx-4 me-1" data-uc-grid>


                                                <?php
                                                        $args = array(
                                                            'post_type'      => 'update', // Replace with your custom post type slug
                                                            'posts_per_page' => 5,         // Number of posts to show
                                                            'orderby'        => 'date',
                                                            'order'          => 'DESC',
                                                        );

                                                        $updates = new WP_Query($args);

                                                        if ($updates->have_posts()) :
                                                            while ($updates->have_posts()) : $updates->the_post();
                                                                ?>
                                                                <div>
                                                                    <article class="post type-post panel vstack pb-narrow text-gray-900 dark:text-white">
                                                                        <div>
                                                                            <span class="time fs-7 opacity-60">
                                                                                <?php echo get_the_time('H:i'); ?>
                                                                            </span>
                                                                        </div>
                                                                        <h6 class="fs-5 text-truncate-2">
                                                                            <a class="text-none hover:text-primary duration-150" href="<?php the_permalink(); ?>">
                                                                                <?php the_title(); ?>
                                                                            </a>
                                                                        </h6>
                                                                    </article>
                                                                </div>
                                                                <?php
                                                            endwhile;
                                                            wp_reset_postdata();
                                                        else :
                                                            echo '<p>No updates found.</p>';
                                                        endif;
                                        ?>



                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>

                               <?php
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 6
                                );

                                $query = new WP_Query($args);

                                if ($query->have_posts()):
                                    $post_count = 0;

                                    while ($query->have_posts()): $query->the_post();

                                        if ($post_count % 2 == 0): ?>
                                            <div class="order-1 sm:order-1">
                                                <div class="panel">
                                                    <div class="row child-cols-12 g-0 sm:g-2 xl:g-3">
                                        <?php endif;

                                        $title = get_the_title();
                                        $permalink = get_permalink();
                                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/images/common/img-fallback.png';
                                        $categories = get_the_terms(get_the_ID(), 'category');
                                        $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
                                        $category_link = !empty($categories) ? get_term_link($categories[0]) : '#';
                                        $time_diff = human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';
                                        ?>

                                        <div>
                                            <article class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                <div class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                    <figure class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                        <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?php echo esc_url($thumbnail); ?>" alt="image" loading="lazy">
                                                        <a target='_blank' href="<?php the_permalink();  ?>" class="position-cover" data-caption="image"></a>
                                                    </figure>
                                                </div>
                                                <div class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                    <div class="post-top panel vstack items-start gap-2">
                                                        <div class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                            <div class="post-category hstack gap-narrow fw-semibold">
                                                                <a class="text-none duration-150 transition-color hover:text-primary text-yellow" href="<?php echo esc_url($category_link); ?>"><?php echo $category_name; ?></a>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                            <a class="text-none" target="_blank" href="<?php the_permalink();;  ?>"><?php echo esc_html($title); ?></a>
                                                        </h3>
                                                    </div>
                                                    <div class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                        <div>
                                                            <div class="post-date hstack gap-narrow">
                                                                <i class="icon-narrow unicon-time"></i>
                                                                <span><?php echo esc_html($time_diff); ?></span>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </article>
                                        </div>

                                        <?php
                                        $post_count++;

                                        
                                        if ($post_count % 2 == 0 || $post_count == $query->post_count): ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif;

                                    endwhile;
                                    wp_reset_postdata();
                                else:
                                    echo '<p>No articles found.</p>';
                                endif;
                                ?>



                                
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Section start -->

<?php
// Query latest 6 articles
$args = array(
    'post_type'      => 'article',
    'posts_per_page' => 6,
    'post_status'    => 'publish'
);
$articles = new WP_Query($args);

if ($articles->have_posts()) :
?>
<!--<div class="section panel overflow-hidden">
    <div class="section-outer panel py-5 pb-5 pt-0 website-articles mb-5 pb-5">
        <div class="container">
            <div class="section-inner">
                <div class="block-layout grid-layout vstack gap-3 lg:gap-4 panel overflow-hidden">
                    
                
                    <div class="block-header panel">
                        <h2 class="h5 lg:h4 fw-medium m-0 text-inherit hstack">
                            <a class="text-none dark:text-white hover:text-primary duration-150" href="https://statom.co.uk/media/">
                                Website <span class="text-yellow">Articles</span>
                            </a>
                            <i class="icon-2 lg:icon-3 unicon-chevron-right opacity-40"></i>
                        </h2>
                    </div>

                    <div class="block-content">
                        <div class="panel row child-cols-12 md:child-cols gy-4 md:gx-3 xl:gx-4">

                            <?php $count = 0; while ($articles->have_posts()) : $articles->the_post(); ?>
                                <?php if ($count == 0) : ?>
                        
                                    <div class="col-12 md:col-6 lg:col-7">
                                        <div class="h-100">
                                            <article class="post type-post panel uc-transition-toggle vstack gap-2 lg:gap-3 h-100 overflow-hidden uc-dark">
                                                
                                                <div class="post-media panel overflow-hidden h-100">
                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 h-100 d-none md:d-block">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <?php the_post_thumbnail('large', array('class' => 'media-cover image uc-transition-scale-up uc-transition-opaque')); ?>
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img-fallback.png" alt="<?php the_title_attribute(); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-1x1 d-block md:d-none">
                                                        <?php if (has_post_thumbnail()) : ?>
                                                            <?php the_post_thumbnail('medium', array('class' => 'media-cover image uc-transition-scale-up uc-transition-opaque')); ?>
                                                        <?php else : ?>
                                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/img-fallback.png" alt="<?php the_title_attribute(); ?>">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>

                                                <div class="position-cover bg-gradient-to-t from-black to-transparent opacity-90"></div>
                                                <div class="post-header panel vstack justify-end items-start gap-1 sm:gap-2 p-2 sm:p-4 position-cover text-white">
                                                    <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                        
                                                   
                                                        <div class="d-none md:d-block">
                                                            <div class="post-date hstack gap-narrow">
                                                                <span><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h3 class="post-title h5 lg:h4 m-0 max-w-600px text-white text-truncate-2">
                                                        <a class="text-none text-white" href="<?php the_field('statom_intranet_article_website_url'); ?>"><?php the_title(); ?></a>
                                                    </h3>
                                                </div>
                                            </article>
                                        </div>
                                    </div>
                                    <div class="col-12 md:col-6 lg:col-5">
                                        <div class="row child-cols-12 g-4 sep-x">
                                <?php else : ?>
                                  
                                    <div>
                                        <article class="post type-post panel uc-transition-toggle">
                                            <div class="row child-cols g-2" data-uc-grid>
                                                <div class="col-auto">
                                                    <div class="post-media panel overflow-hidden max-w-150px min-w-100px lg:min-w-150px">
                                                        <div class="featured-image bg-gray-25 dark:bg-gray-800 ratio ratio-16x9">
                                                            <?php if (has_post_thumbnail()) : ?>
                                                                <?php the_post_thumbnail('thumbnail', array('class' => 'media-cover image uc-transition-scale-up uc-transition-opaque')); ?>
                                                            <?php else : ?>
                                                                <img src="<?php the_field('statom_intranet_article_website_url') ?>" alt="<?php the_title_attribute(); ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <a href="<?php the_field('statom_intranet_article_website_url') ?>" class="position-cover"></a>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="post-header panel vstack justify-between gap-1">
                                                        <div class="post-meta panel hstack justify-start gap-1 fs-7 ft-tertiary fw-medium text-gray-900 dark:text-white text-opacity-60 d-none md:d-flex z-1">
                                                           
                                                      
                                                            <div class="d-none md:d-block">
                                                                <div class="post-date hstack gap-narrow">
                                                                    <span><?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago'; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3 class="post-title h6 lg:h5 m-0 text-truncate-2">
                                                            <a class="text-none hover:text-primary duration-150" href="<?php the_field('statom_intranet_article_website_url') ?>"><?php the_title(); ?></a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                <?php endif; ?>
                            <?php $count++; endwhile; ?>
                                        </div>
                                        <a href="https://statom.co.uk/media/" class="article-button animate-btn gap-0 btn btn-sm bg-transparent dark:text-white border w-100 mt-4">
                                            <span>See all Articles</span>
                                            <i class="icon icon-1 unicon-chevron-right"></i>
                                        </a>
                                    </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>-->
<?php
endif;
wp_reset_postdata();
?>

<!-- Section end -->


<!-- NEW CUSTOM BOTH Section start -->
<div class="section panel overflow-hidden">
	<div class="section-outer panel py-4 md:py-6 lg:py-8 xl:py-9 px-2 lg:px-4 bg-white dark:bg-gray-900">
		<div class="container max-w-2xl px-2 lg:px-4 xl:px-0">
            <div class="section-inner">
                <div>
                    <section class="stnc-section">
                        <div class="stnc-container">

                            <!-- LEFT SIDE -->
                            <div class="stnc-column">
                                <h2 class="h4 md:h3 m-0! mb-4">
                                    MENU FOR THE <span class="text-primary">WEEK TEST 4</span>
                                </h2>
								<?php
								$group = get_field('staff_canteen_message', 'option');

								if ($group) {
									$message = $group['staff_canteen_message'];
									$show_date = $group['staff_canteen_message_show_message'];
									$hide_date = $group['staff_canteen_message_hide_message'];

									// Convert to timestamps (ACF date format is usually Ymd)
									$today = current_time('Ymd');

									$show = true;

									// Check "show from" date
									if ($show_date && $today < $show_date) {
										$show = false;
									}

									// Check "hide on" date (should NOT show on that date)
									if ($hide_date && $today >= $hide_date) {
										$show = false;
									}

									if ($show && $message):
								?>
								<div class="row child-cols-12 mb-4">
									<div class="canteen-message">
										<?php echo wp_kses_post($message); ?>
									</div>
								</div>
								<?php
									endif;
								}
								?>

								<!-- MENU LOOP - start -->
								<div class="stnc-items">
										<?php

										$today = current_time('Y-m-d');

										// ✅ Step 1: find correct row (most recent <= today)
										$selected_row = null;
										$closest_date = null;

										if (have_rows('scheduled_menus', 'option')):

											while (have_rows('scheduled_menus', 'option')): the_row();

												$week_commencing = get_sub_field('week_commensing');

												if (!$week_commencing) continue;

												// ✅ Only consider current / past weeks
												if ($week_commencing <= $today) {

													if (!$closest_date || $week_commencing > $closest_date) {
														$closest_date = $week_commencing;
														$selected_row = get_row(true);
													}

												}

											endwhile;

										endif;

										// ✅ Step 2: output selected row
										if ($selected_row):

											$week_menus = $selected_row['week_menus'];

											$days = [
												'monday'    => 'Monday',
												'tuesday'   => 'Tuesday',
												'wednesday' => 'Wednesday',
												'thursday'  => 'Thursday',
												'friday'    => 'Friday',
											];

											foreach ($days as $key => $label):

												$items = $week_menus["{$key}_menu_options"] ?? null;
										?>

											<div>
												<article class="post type-post panel hstack! vstack sm:vstack items-start gap-2 sm:gap-0 sm:p-2 md:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">

													<h3><?php echo esc_html($label); ?></h3>

													<div>
														<?php
														if ($items):

															if (!is_array($items)) {
																$items = [$items];
															}

															foreach ($items as $item): ?>
																<p>
																	<?php
																	echo esc_html(
																		get_field('fun_title', $item->ID) ?: $item->post_title
																	);
																	?>
																</p>
															<?php endforeach;

														else: ?>
															<p>No menu available</p>
														<?php endif;
														?>
													</div>

												</article>
											</div>

										<?php
											endforeach;

										else:
											echo '<p>No menu available for this week.</p>';
										endif;
										?>

								
								</div>
								
								<!-- MENU LOOP - end -->
                            </div>

                            <!-- RIGHT SIDE -->
                            <div class="stnc-column">
                                <h2 class="h4 md:h3 m-0! mb-4">
                                    LATEST <span class="text-primary">NEWS</span>
                                </h2>

                            <div class="stnc-items">
                                <?php
                                            $args = array(
                                                'post_type' => 'post',
                                                'posts_per_page' => 6
                                            );
                                            
                                            $query = new WP_Query($args);
                                            
                                            if ($query->have_posts()):
                                                while ($query->have_posts()): $query->the_post();
                                                $title = get_the_title();
                                                $permalink = get_permalink();
                                                $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/images/common/img-fallback.png';
                                                $categories = get_the_terms(get_the_ID(), 'category');
                                                $category_name = !empty($categories) ? esc_html($categories[0]->name) : 'Uncategorized';
                                                $category_link = !empty($categories) ? get_term_link($categories[0]) : '#';
                                                $time_diff = human_time_diff(get_the_time('U'), current_time('timestamp')) . ' ago';
                                            ?>
                                            
                                            <div>
                                                <article class="post type-post panel hstack sm:vstack items-start gap-2 sm:gap-0 p-2 sm:p-0 overflow-hidden text-gray-900 dark:text-white bg-white dark:bg-gray-900">
                                                    <div class="post-media panel overflow-hidden w-200px sm:w-100 order-1 sm:order-0">
                                                        <figure class="featured-image m-0 ratio ratio-3x2 sm:ratio-16x9 uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="<?php echo esc_url($thumbnail); ?>" alt="image" loading="lazy">
                                                            <a target='_blank' href="<?php the_permalink();  ?>" class="position-cover" data-caption="image"></a>
                                                        </figure>
                                                    </div>
                                                    <div class="post-header panel vstack justify-between gap-1 sm:gap-2 p-0 sm:p-2 mt-narrow sm:mt-0 w-100">
                                                        <div class="post-top panel vstack items-start gap-2">
                                                            <div class="post-meta panel fs-7 px-narrow border border-gray-200 dark:border-gray-700 d-none sm:d-block">
                                                                <div class="post-category hstack gap-narrow fw-semibold">
                                                                    <a class="text-none duration-150 transition-color hover:text-primary text-yellow" href="<?php echo esc_url($category_link); ?>"><?php echo $category_name; ?></a>
                                                                </div>
                                                            </div>
                                                            <h3 class="post-title h6 sm:h5 m-0 text-truncate-2">
                                                                <a class="text-none" target="_blank" href="<?php the_permalink();;  ?>"><?php echo esc_html($title); ?></a>
                                                            </h3>
                                                        </div>
                                                        <div class="post-bottom panel hstack gap-2 fs-7 mt-narrow sm:mt-0 text-black dark:text-white text-opacity-60">
                                                            <div>
                                                                <div class="post-date hstack gap-narrow">
                                                                    <i class="icon-narrow unicon-time"></i>
                                                                    <span><?php echo esc_html($time_diff); ?></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </article>
                                            </div>	
                                            <?php
                                                endwhile;
                                            
                                            wp_reset_postdata();
                                            endif;						
                                            ?>
                            </div>
                            </div>

                        </div>
                        </section>
                </div>

            </div>
		</div>
	</div>
</div>
<!-- NEW CUSTOM BOTH Section end -->














    

             <!-- Section start -->
            <div class="section panel overflow-hidden">
                <div class="section-outer panel py-4 md:py-6 lg:py-8 xl:py-9 bg-white dark:bg-gray-900">
                    <div class="container max-w-2xl px-2 lg:px-4 xl:px-0">
                        <div class="section-inner">
                            <div class="block-layout grid-layout vstack gap-3 sm:gap-4 xl:gap-5 panel">
                                <div class="block-header">
                                    <h2 class="h4 md:h3 m-0">
                                        <span>Staff Resources</span>
                                    </h2>
                                </div>
                                <div class="block-content panel overflow-hidden">
                                    <div class="row child-cols-12 sm:child-cols-6 xl:child-cols-3 g-4 xl:g-6 sep">

                                    <?php if ( have_rows('dashboard_buttons') ) : 
                                        $count = 1; 
                                        while ( have_rows('dashboard_buttons') ) : the_row(); 
                                    ?>
                                        <div>
                                            <article class="post type-post panel hstack items-start gap-3 text-gray-900 dark:text-white">
                                                <div class="min-w-40px text-center">
                                                    <h3 class="h3 lg:h2 m-0 text-primary"><?php echo $count; ?></h3>
                                                </div>
                                                <h6 class="h5 text-truncate-2 hover:text-primary duration-200">
                                                    <a class="text-none" target="_blank" href="<?php the_sub_field('dashboard_button_link');  ?>">
                                                        <?php the_sub_field('dashboard_button_name');   ?>
                                                    </a>
                                                </h6>
                                            </article>
                                        </div>
                                    <?php 
                                        $count++;
                                        endwhile; 
                                    endif; 
                                    ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
    



<?php
get_footer();