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
    <!-- HERO SECTION -->
    <?php get_template_part( 'global-templates/page-header' ); ?>

    <!-- MAIN CONTENT -->
    <div class="section vstack border-bottom border-4 border-primary justify-center py-3 sm:py-6 lg:py-9"<?php if ( $page_header_style ) : ?> style="<?php echo esc_attr( $page_header_style ); ?>"<?php endif; ?>>
        <div class="container max-w-xl">
            <div class="panel">
                <div class="page-header vstack items-center">
                    <h2 class="h4 lg:h1">ONE TEAM. MANY PATHS</h2>
                    <p class="fs-6 lg:fs-5 opacity-60">Subcopy to be here</p>
                </div>

                <?php if ( have_rows( 'testimonials', 'option' ) ) : ?>
                    <div class="row child-cols-12 md:child-cols-6 lg:child-cols-3 g-3 lg:g-4 col-match" data-uc-grid>
                        <?php while ( have_rows( 'testimonials', 'option' ) ) : ?>
                            <?php
                            the_row();

                            $full_name = get_sub_field( 'full_name' );
                            $company   = get_sub_field( 'company' );
                            $position  = get_sub_field( 'position' );
                            $quote     = get_sub_field( 'preview_quote' );
                            $image     = get_sub_field( 'image' );
                            $image_url = '';

                            if ( is_array( $image ) && ! empty( $image['url'] ) ) {
                                $image_url = $image['url'];
                            } elseif ( is_numeric( $image ) ) {
                                $image_url = wp_get_attachment_image_url( (int) $image, 'large' );
                            } elseif ( is_string( $image ) ) {
                                $image_url = $image;
                            }
                            ?>
                            <div>
                                <article
                                    class=" testimonial-card ratio ratio-1x1 overflow-hidden rounded-3 <?php echo $image_url ? 'text-white bg-dark' : 'text-dark bg-white'; ?>"
                                    <?php if ( $image_url ) : ?>
                                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.75)), url('<?php echo esc_url( $image_url ); ?>'); background-position: center; background-size: cover;"
                                    <?php endif; ?>
                                >
                                    <div class="d-flex flex-column justify-content-end vstack gap-3 p-3 lg:p-4 d-flex flex-column justify-content-end">
                                        <div>
                                            <?php if ( $quote ) : ?>
                                            <blockquote class="m-0">
                                                <p class="m-0">&ldquo;<?php echo esc_html( $quote ); ?>&rdquo;</p>
                                            </blockquote>
                                            <?php endif; ?>

                                            <?php if ( $full_name || $company || $position ) : ?>
                                                <div class="vstack gap-1">
                                                    <?php if ( $full_name ) : ?>
                                                        <p class="fw-bold fs-6 not-italic text-primary"><?php echo esc_html( $full_name ); ?></p>
                                                    <?php endif; ?>

                                                    <?php if ( $position || $company ) : ?>
                                                        <p class="m-0 fs-7 opacity-70">
                                                            <?php
                                                            echo esc_html(
                                                                implode(
                                                                    ', ',
                                                                    array_filter( array( $position, $company ) )
                                                                )
                                                            );
                                                            ?>
                                                        </p>
                                                    <?php endif; ?>
                                                    </div>
                                            <?php endif; ?>

                                        </div>
                                        
                                    </div>
                                </article>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php
get_footer();
