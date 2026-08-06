<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

   <!-- Footer start -->
        <footer id="uc-footer" class="uc-footer panel uc-dark">
            <div class="footer-outer py-4 lg:py-6 xl:py-9 bg-white dark:bg-gray-900">
                <div class="container max-w-xl">
                    <div class="footer-inner vstack gap-4 justify-center lg:fs-5 text-gray-900 dark:text-white">
                        <div class="footer-logo text-center">
                            <img class="uc-logo w-100px text-gray-900 dark:text-white" src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/08/NEW_STATOM_GROUP_LOGO_14.07.25.png" alt="News5" data-uc-svg>
                        </div>
                        <nav class="footer-nav">
                            <ul class="nav-x gap-2 lg:gap-3 justify-center text-center fw-medium">
                                <li><a class="hover:text-opacity-70 dark:hover:text-white duration-150" href="https://www.google.com/maps/d/u/0/viewer?mid=1c5EDzj7belsoj-nhwthXJt3bfQrwOXQ&femb=1&ll=51.504217079603265%2C-0.08248856941566185&z=17">Office Locations</a></li>
                                <li class="vr dark:border-gray-200"></li>
                                <li><a class="hover:text-opacity-70 dark:hover:text-white duration-150" href="mailto:helpdesk@statom.co.uk">Contact IT Support</a></li>
                                <li class="vr dark:border-gray-200"></li>
                                <li><a class="hover:text-opacity-70 dark:hover:text-white duration-150" href="https://intranet.statomgroup.co.uk/wp-content/uploads/2026/03/EMPLOYEE-HANDBOOK-updated-.pdf">Employee Handbook</a></li>
                                <li class="vr dark:border-gray-200"></li>
                                <li><a class="hover:text-opacity-70 dark:hover:text-white duration-150" href="https://statom.co.uk/careers/">Careers</a></li>
                                <li class="vr dark:border-gray-200"></li>
                                <li><a class="hover:text-opacity-70 dark:hover:text-white duration-150" href="https://statom.co.uk/our-story-and-culture">About Us</a></li>
                            </ul>
                        </nav>
                        <div class="footer-social hstack justify-center gap-2 lg:gap-3">
                            <ul class="nav-x gap-2">
                                <li>
                                    <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="https://www.linkedin.com/company/gearsltd/"><i class="icon icon-2 unicon-logo-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="https://x.com/statom_group"><i class="icon icon-2 unicon-logo-x-filled"></i></a>
                                </li>
                                <li>
                                    <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="https://www.instagram.com/statomgroupuk/"><i class="icon icon-2 unicon-logo-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="hover:text-gray-900 dark:hover:text-white duration-150" href="https://www.youtube.com/channel/UCoOaR9bKtv9x1VQCwD5NEVA"><i class="icon icon-2 unicon-logo-youtube"></i></a>
                                </li>
                            </ul>
                         
                        </div>
                        <div class="footer-copyright vstack sm:hstack justify-center items-center gap-1 lg:gap-2">
                            <p>© STATOM GROUP <script>
                                document.write(
                                    new Date().getFullYear()
                                )
                            </script>, Internal Use Only.</p>
                         
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Footer end -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->


<?php wp_footer(); ?>

        <!-- include jquery & bootstrap js -->
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/jquery.min.js"></script>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>//assets/js/libs/bootstrap.min.js"></script>

        <!-- include scripts -->
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/anime.min.js"></script>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/swiper-bundle.min.js"></script>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/scrollmagic.min.js"></script>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/helpers/data-attr-helper.js"></script>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/helpers/swiper-helper.js"></script>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/helpers/anime-helper.js"></script>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/helpers/anime-helper-defined-timelines.js"></script>
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/uikit-components-bs.js"></script>

        <!-- include app script -->
        <script defer src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/app.js"></script>

        <script>
            // Schema toggle via URL
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const getSchema = urlParams.get("schema");
            if (getSchema === "dark") {
                setDarkMode(1);
            } else if (getSchema === "light") {
                setDarkMode(0);
            }
        </script>


     <script src="https://kit.fontawesome.com/a692e1c39f.js" crossorigin="anonymous"></script>

</body>

</html>

