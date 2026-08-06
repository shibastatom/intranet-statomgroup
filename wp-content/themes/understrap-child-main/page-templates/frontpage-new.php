<?php
/**
 * Template Name: Home page New Template
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
        <?php if ( is_front_page() && is_home() ) : ?>
    <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

    <div class="google-wrapper"> 

                <div class="page">

                
                        
                                                    <img class="google-logo" src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/08/NEW_STATOM_GROUP_LOGO_14.07.25.png">
                        
                        <!-- Dynamic Greeting Caches a lot -->

                        <h3 class="text-white greeting-text"><div>Good Morning!</div></h3>
 
                      <!--  <form action="https://www.google.com/search" target="_blank">
                            <!--<br><input id="searchme" aria-label="Search" placeholder="Search Google or type a URL" class="search" title="Search" type="search" name="q"><br>-->

                           <!-- Search Employee Directory Feature ---> 
                           <!-- <input type="search" id="site-search" class="search" name="q" placeholder="Employee Directory"/>
                           </form>-->
<?php
echo do_shortcode('[contact_list_simple]');
?>
<style>.contact-list-simple-list-row-data {
    
    color: black!important;
}
.contact-list-simple-list-row.contact-list-simple-list-row-data {
    background: #f8f8f8;
}</style>

                       <div class="apps-corner d-flex justify-items-center align-items-center">
                        
                        <div class="container align-items-center text-end d-flex flex-row apps-corner-container flex-row">

                           <a href="https://outlook.office.com" class="mb-1">
                                <div class="app-icon-wrapper d-flex flex-column justify-content-end align-items-center">
                                    <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/08/outlook.svg">
                                    <small class="text-white mt-1">Outlook</small>
                                    </div>                                                                 
                                </a>

                                <a href="https://www.office.com/launch/sharepoint" class="mb-1">
                                    <div class="app-icon-wrapper d-flex flex-column align-items-center">
                                        <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/08/Microsoft_Office_SharePoint_2019–present.svg.png">
                                        <small class="text-white mt-1">SharePoint</small>
                                    </div>                                                                 
                                </a>

                                <a href="https://teams.microsoft.com" class="mb-1">
                                    <div class="app-icon-wrapper d-flex flex-column align-items-center">
                                        <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/08/Microsoft_Office_Teams_2018–present.svg">
                                        <small class="text-white mt-1">Teams</small>
                                    </div>                                                                 
                                </a>

                               <!-- <a href="https://www.google.com/chrome/" class="mb-1">
                                    <div class="app-icon-wrapper d-flex flex-column align-items-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Google_Chrome_icon_%282011%29.png?20151104231050">
                                        <small class="text-white mt-1">Chrome</small>
                                    </div>                                                                 
                                </a>-->

                               <!-- <a href="https://www.office.com/launch/word" class="mb-1">
                                    <div class="app-icon-wrapper d-flex flex-column align-items-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Google_Docs_2020_Logo.svg" style="width:30px!important;">
                                        <small class="text-white mt-1">Word</small>
                                    </div>                                                                 
                                </a>-->

                              <!--  <a href="https://www.office.com/launch/excel" class="mb-1">
                                    <div class="app-icon-wrapper d-flex flex-column align-items-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Microsoft_Office_Excel_%282025%E2%80%93present%29.svg">
                                        <small class="text-white mt-1">Excel</small>
                                    </div>                                                                 
                                </a>-->

                    </div> 

                </div>
                     
                <!-- start here -->
                <div class="intranet-company-logos">
                    <div>
                      <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/intranet-flushline.png" class="flushline-logo">
                    </div>
                    <div>
                    <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/Trident.png" class="trident-logo">
                    </div>
                    <div>
                    <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2026/01/frankie-logo-white.png" class="franki-logo">
                    </div>
                    <div>
                    <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/SLIPFORM-LOGO-W.png" class="slipform-logo">
                    </div>
                    <div>
                    <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/intranet-spark-tech.png" class="spark-tech-logo">
                    </div>
                    <div>
                    <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/intranet-apex-logo.png" class="apex-logo">
                    </div>
                </div>
                <!-- end here -->

                </div>
            </div>


            <div id="container">
                
                <!-- Code generated at https://WeatherWidget.io -->  
                <a class="weatherwidget-io" href="https://forecast7.com/en/51d51n0d13/london/" data-label_1="LONDON" data-label_2="WEATHER" data-theme="orange" >LONDON WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://weatherwidget.io/js/widget.min.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","weatherwidget-io-js");
                </script>
                <!-- / Code generated at https://WeatherWidget.io --> 
                
                </div>


              <!-- Section start -->
              <br></br>

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
<div class="section panel overflow-hidden">
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
</div>
<?php
endif;
wp_reset_postdata();
?>

<!-- Section end -->

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
