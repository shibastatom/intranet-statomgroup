<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <meta name="theme-color" content="#2757fd">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

		<!-- preload head styles -->
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/unicons.min.css" as="style">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css" as="style">

        <!-- preload footer scripts -->
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/jquery.min.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/scrollmagic.min.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/swiper-bundle.min.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/libs/anime.min.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/helpers/data-attr-helper.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/helpers/swiper-helper.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/helpers/anime-helper.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/helpers/anime-helper-defined-timelines.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/uikit-components-bs.js" as="script">
        <link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/app.js" as="script">

        <!-- app head for bootstrap core -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/app-head-bs.js"></script>

        <!-- include uni-core components -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/uni-core/css/uni-core.min.css">

        <!-- include styles -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/unicons.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/prettify.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/swiper-bundle.min.css">

        <!-- include main style -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/theme/demo-eight.css">

        <!-- include scripts -->
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/uni-core/js/uni-core-bundle.min.js"></script>
</head>

<body class="uni-body panel bg-slate-50 text-gray-900 dark:bg-black dark:text-white text-opacity-50 overflow-x-hidden">


   <!--  Search modal -->
        <div id="uc-search-modal" class="uc-modal-full uc-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog d-flex justify-center bg-white text-dark dark:bg-gray-900 dark:text-white" data-uc-height-viewport="">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="panel w-100 sm:w-500px px-2 py-10">
                    <h3 class="h1 text-center">Search</h3>
                    <form action="https://www.google.com/search" target="_blank" class="hstack gap-1 mt-4 border-bottom p-narrow dark:border-gray-700" action="?">
                        <span class="d-inline-flex justify-center items-center w-24px sm:w-40 h-24px sm:h-40px opacity-50"><i class="unicon-search icon-3"></i></span>
                        <input type="search" name="q" class="form-control-plaintext ms-1 fs-6 sm:fs-5 w-full dark:text-white" placeholder="Type your keyword.." aria-label="Search" autofocus>
                    </form>
                </div>
            </div>
        </div>
        <!--  Menu panel -->
        <div id="uc-menu-panel" data-uc-offcanvas="overlay: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                <header class="uc-offcanvas-header hstack justify-between items-center pb-4 bg-white dark:bg-gray-900">
                    <div class="uc-logo">
                        <a href="/" class="h5 text-none text-gray-900 dark:text-white">
                            <img class="w-32px" src="../assets/images/common/logo-icon.svg" alt="News5" data-uc-svg>
                        </a>
                    </div>
                    <button class="uc-offcanvas-close p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                        <i class="unicon-close"></i>
                    </button>
                </header>

                <div class="panel">
                    <form id="search-panel" class="form-icon-group vstack gap-1 mb-3" data-uc-sticky="">
                        <input type="email" class="form-control form-control-md fs-6" placeholder="Search..">
                        <span class="form-icon text-gray">
                            <i class="unicon-search icon-1"></i>
                        </span>
                    </form>
                    <ul class="nav-y gap-narrow fw-bold fs-5" data-uc-nav>
                        <li class="uc-parent">
                            <a href="#">Homepages</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li><a href="../main/index.html">Main</a></li>
                                <li><a href="../demo-two/index.html">Classic News</a></li>
                                <li><a href="../demo-three/index.html">Tech</a></li>
                                <li><a href="../demo-four/index.html">Classic Blog</a></li>
                                <li><a href="../demo-five/index.html">Gaming</a></li>
                                <li><a href="../demo-six/index.html">Sports</a></li>
                                <li><a href="../demo-seven/index.html">Newspaper</a></li>
                                <li><a href="../demo-eight/index.html">Magazine</a></li>
                                <li><a href="../demo-nine/index.html">Travel</a></li>
                                <li><a href="../demo-ten/index.html">Food</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Latest</a></li>
                        <li><a href="#">Trending</a></li>

                        <li class="uc-parent">
                            <a href="#">Inner Pages</a>
                            <ul class="uc-nav-sub" data-uc-nav="">

                                <li class="uc-parent">
                                    <a href="blog.html">Blog</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="blog.html">Full Width</a></li>
                                        <li><a href="blog-2cols.html">Grid 2 Cols</a></li>
                                        <li><a href="blog-3cols.html">Grid 3 Cols</a></li>
                                        <li><a href="blog-4cols.html">Grid 4 Cols</a></li>
                                    </ul>
                                </li>

                                <li class="uc-parent">
                                    <a href="blog-details.html">Blog - detail</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="blog-details.html">Blog detail</a></li>
                                        <li><a href="blog-details-2.html">Blog detail - v2</a></li>
                                    </ul>
                                </li>

                                <li class="uc-parent">
                                    <a href="#">Useful pages</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="sign-up.html">Sign up</a></li>
                                        <li><a href="sign-in.html">Sign in</a></li>
                                        <li><a href="reset-password.html">Reset password</a></li>
                                        <li><a href="404.html">404 page</a></li>
                                        <li><a href="coming-soon.html">Coming soon</a></li>
                                    </ul>
                                </li>

                                <li class="uc-parent">
                                    <a href="#">Other pages</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="page-faq.html">FAQ</a></li>
                                        <li><a href="page-terms.html">Terms of use</a></li>
                                        <li><a href="page-privacy.html">Privacy policy</a></li>
                                    </ul>
                                </li>

                            </ul>
                        </li>
                        <li class="uc-parent">
                            <a href="shop.html">Shop</a>
                            <ul class="uc-nav-sub" data-uc-nav="">
                                <li class="uc-parent">
                                    <a href="shop.html">Shop layouts</a>
                                    <ul class="uc-nav-sub">
                                        <li><a href="shop.html">Shop 4 cols</a></li>
                                        <li><a href="shop-3.html">Shop 3 cols</a></li>
                                        <li><a href="shop-2.html">Shop 2 cols</a></li>
                                        <li><a href="shop-sidebar.html">Shop with sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-category.html">Archive category</a></li>
                                <li><a href="shop-product-detail.html">Product detail</a></li>
                                <li><a href="shop-product-detail-2.html">Product detail - v2</a></li>
                                <li><a href="shop-cart.html">Cart</a></li>
                                <li><a href="shop-cart-2.html">Cart - v2</a></li>
                                <li><a href="shop-checkout.html">Checkout</a></li>
                                <li><a href="shop-checkout-2.html">Checkout - v2</a></li>
                                <li><a href="shop-order.html">Order confirmation</a></li>
                            </ul>
                        </li>

                        <li class="hr opacity-10 my-1"></li>
                        <li><a href="sign-in.html">Sign in</a></li>
                        <li><a href="sign-up.html">Create an account</a></li>

                    </ul>

                    <ul class="social-icons nav-x mt-4">
                        <li>
                            <a href="#"><i class="unicon-logo-medium icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-x-filled icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-instagram icon-2"></i></a>
                            <a href="#"><i class="unicon-logo-pinterest icon-2"></i></a>
                        </li>
                    </ul>

                    <div class="py-2 hstack gap-2 mt-4 bg-white dark:bg-gray-900" data-uc-sticky="position: bottom">
                        <div class="vstack gap-1">
                            <span class="fs-7 opacity-60">Select theme:</span>
                            <div class="darkmode-trigger" data-darkmode-switch="">
                                <label class="switch">
                                    <input type="checkbox">
                                    <span class="slider fs-5"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
		<!--  Cart panel -->
        <div id="uc-cart-panel" data-uc-offcanvas="overlay: true; flip: true;">
            <div class="uc-offcanvas-bar bg-white text-dark dark:bg-gray-900 dark:text-white">
                <button class="uc-offcanvas-close top-0 ltr:end-0 rtl:start-0 rtl:end-auto m-2 p-0 border-0 icon-2 lg:icon-3 btn btn-md dark:text-white transition-transform duration-150 hover:rotate-90" type="button">
                    <i class="unicon-close"></i>
                </button>

                <div class="mini-cart-content vstack justify-between panel h-100">
                    <div class="mini-cart-header">
                        <h3 class="title h5 m-0 text-dark dark:text-white">Shopping cart</h3>
                    </div>
                    <div class="mini-cart-listing panel flex-1 my-4 overflow-scroll">
                        <p class="alert alert-warning" hidden>Your cart empty!</p>
                        <div class="panel vstack gap-3">
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/common/products/img-07.jpg" alt="Laptop Cover" data-uc-img="loading: lazy">
                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Laptop Cover"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Laptop Cover</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$24.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/common/products/img-08.jpg" alt="Disney Toys" data-uc-img="loading: lazy">
                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Disney Toys"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Disney Toys</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$5.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/common/products/img-09.jpg" alt="Screen Axe" data-uc-img="loading: lazy">
                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Screen Axe"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Screen Axe</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$19.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                            <div>
                                <article class="product type-product panel">
                                    <div class="hstack gap-2">
                                        <figure class="featured-image m-0 ratio ratio-1x1 w-80px uc-transition-toggle overflow-hidden bg-gray-25 dark:bg-gray-800">
                                            <img class="media-cover image uc-transition-scale-up uc-transition-opaque" src="../assets/images/common/img-fallback.png" data-src="../assets/images/common/products/img-10.jpg" alt="Airpods Pro" data-uc-img="loading: lazy">
                                            <a href="shop-product-detail.html" class="position-cover" data-caption="Airpods Pro"></a>
                                        </figure>
                                        <div class="content vstack gap-narrow fs-6">
                                            <h5 class="h6 m-0"><a class="text-none text-dark dark:text-white" href="shop-product-detail.html">Airpods Pro</a></h5>
                                            <div class="hstack gap-narrow fs-7 opacity-50 text-dark dark:text-white"><span class="qty">1</span> x <span class="price">$49.00</span></div>
                                            <a href="#remove_from_cart" class="remove fs-7 text-dark dark:text-white">Remove</a>
                                        </div>
                                        <a href="#remove_from_cart" class="remove position-absolute top-0 end-0 btn p-0 hover:text-danger" hidden>
                                            <i class="unicon-close icon-1"></i>
                                        </a>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="mini-cart-footer panel pt-3 border-top">
                        <div class="panel vstack gap-3 justify-between">
                            <div class="mini-cart-total hstack justify-between">
                                <h5 class="h5 m-0 text-dark dark:text-white">Subtotal</h5>
                                <b class="fs-5">$97.00</b>
                            </div>
                            <div class="mini-cart-actions vstack gap-1">
                                <a href="shop-cart.html" class="btn btn-md btn-outline-gray-100 text-dark dark:text-white dark:border-gray-700 dark:hover:bg-gray-700">View cart</a>
                                <a href="shop-checkout.html" class="btn btn-md btn-primary text-white">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!--  Favorites modal -->
        <div id="uc-favorites-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="panel vstack justify-center items-center gap-2 text-center px-3 py-8">
                    <i class="icon icon-4 unicon-bookmark mb-2 text-primary dark:text-white"></i>
                    <h2 class="h4 md:h3 m-0">Saved articles</h2>
                    <p class="fs-5 opacity-60">You have not yet added any article to your bookmarks!</p>
                    <a href="index.html" class="btn btn-sm btn-primary mt-2 uc-modal-close">Browse articles</a>
                </div>
            </div>
        </div>

		        <!--  Account modal -->
        <div id="uc-account-modal" data-uc-modal="overlay: true">
            <div class="uc-modal-dialog lg:max-w-500px bg-white text-dark dark:bg-gray-800 dark:text-white rounded">
                <button class="uc-modal-close-default p-0 icon-3 btn border-0 dark:text-white dark:text-opacity-50 hover:text-primary hover:rotate-90 duration-150 transition-all" type="button">
                    <i class="unicon-close"></i>
                </button>
                <div class="panel vstack gap-2 md:gap-4 text-center">
                    <ul class="account-tabs-nav nav-x justify-center h6 py-2 border-bottom d-none" data-uc-switcher="animation: uc-animation-slide-bottom-small, uc-animation-slide-top-small">
                        <li><a href="#">Sign in</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Reset password</a></li>
                        <li><a href="#">Terms of use</a></li>
                    </ul>
                    <div class="account-tabs-content uc-switcher px-3 lg:px-4 py-4 lg:py-8 m-0 lg:mx-auto vstack justify-center items-center">
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Log in</h4>
                                <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                                    <form class="vstack gap-2">
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="email" placeholder="Your email" required>
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="password" placeholder="Password" autocomplete="new-password" required>
                                        <div class="hstack justify-between items-start text-start">
                                            <div class="form-check text-start">
                                                <input class="form-check-input rounded-0 dark:bg-gray-800 dark:bg-gray-800 dark:border-white dark:border-opacity-15 dark:border-opacity-15" type="checkbox" id="inputCheckRemember">
                                                <label class="hstack justify-between form-check-label fs-7 sm:fs-6" for="inputCheckRemember">Remember me?</label>
                                            </div>
                                            <a href="#" class="uc-link fs-6" data-uc-switcher-item="2">Forgot password</a>
                                        </div>
                                        <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Log in</button>
                                    </form>
                                    <div class="panel h-24px">
                                        <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                        <span class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                    </div>
                                    <div class="hstack gap-2">
                                        <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-google"></i>
                                        </a>
                                        <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-facebook"></i>
                                        </a>
                                        <a href="#twitter" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-x-filled"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-7 sm:fs-6">Have no account yet? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Create an account</h4>
                                <div class="panel vstack gap-2 w-100 sm:w-350px mx-auto">
                                    <form class="vstack gap-2">
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="text" placeholder="Full name" required>
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="email" placeholder="Your email" required>
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="password" placeholder="Password" autocomplete="new-password" required>
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="password" placeholder="Re-enter Password" autocomplete="new-password" required>
                                        <div class="hstack text-start">
                                            <div class="form-check text-start">
                                                <input id="input_checkbox_accept_terms" class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="checkbox" required>
                                                <label for="input_checkbox_accept_terms" class="hstack justify-between form-check-label fs-7 sm:fs-6">I read and accept the <a href="#" class="uc-link ms-narrow" data-uc-switcher-item="3">terms of use</a>. </label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Sign up</button>
                                    </form>
                                    <div class="panel h-24px">
                                        <hr class="position-absolute top-50 start-50 translate-middle hr m-0 w-100">
                                        <span class="position-absolute top-50 start-50 translate-middle px-1 fs-7 text-uppercase bg-white dark:bg-gray-800">Or</span>
                                    </div>
                                    <div class="hstack gap-2">
                                        <a href="#google" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-google"></i>
                                        </a>
                                        <a href="#facebook" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-facebook"></i>
                                        </a>
                                        <a href="#twitter" class="hstack items-center justify-center flex-1 gap-1 h-40px text-none rounded border border-gray-900 dark:bg-gray-800 dark:border-white dark:border-opacity-15 border-opacity-10">
                                            <i class="icon icon-1 unicon-logo-x-filled"></i>
                                        </a>
                                    </div>
                                </div>
                                <p class="fs-7 sm:fs-6">Already have an account? <a class="uc-link" href="#" data-uc-switcher-item="0">Log in</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4 text-center">
                                <h4 class="h5 lg:h4 m-0">Reset password</h4>
                                <div class="panel w-100 sm:w-350px">
                                    <form class="vstack gap-2">
                                        <input class="form-control form-control-sm h-40px w-full fs-6 bg-white dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="email" placeholder="Your email" required>
                                        <div class="form-check text-start">
                                            <input class="form-check-input rounded-0 dark:bg-gray-800 dark:border-white dark:border-opacity-15" type="checkbox" id="inputCheckVerify" required>
                                            <label class="form-check-label fs-7 sm:fs-6" for="inputCheckVerify"> <span>I'm not a robot</span>. </label>
                                        </div>
                                        <button class="btn btn-primary btn-sm lg:mt-1" type="submit">Reset a password</button>
                                    </form>
                                </div>
                                <p class="fs-7 sm:fs-6 mt-2 sm:m-0">Remember your password? <a class="uc-link" href="#" data-uc-switcher-item="0">Log in</a></p>
                            </div>
                        </div>
                        <div class="w-100">
                            <div class="panel vstack justify-center items-center gap-2 sm:gap-4">
                                <h4 class="h5 lg:h4 m-0">Terms of use</h4>
                                <div class="page-content panel fs-6 text-start max-h-400px overflow-scroll">
                                    <p>Terms of use dolor sit amet consectetur, adipisicing elit. Recusandae provident ullam aperiam quo ad non corrupti sit vel quam repellat ipsa quod sed, repellendus adipisci, ducimus ea modi odio assumenda.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Disclaimers</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Limitation on Liability</h5>
                                    <p>Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">Copyright Policy</h5>
                                    <p>Dolor sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                    <h5 class="h6 md:h5 mt-3 mb-1">General</h5>
                                    <p>Sit amet consectetur adipisicing elit. Sequi, cum esse possimus officiis amet ea voluptatibus libero! Dolorum assumenda esse, deserunt ipsum ad iusto! Praesentium error nobis tenetur at, quis nostrum facere excepturi architecto totam.</p>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, soluta alias eaque modi ipsum sint iusto fugiat vero velit rerum.</p>
                                </div>
                                <p class="fs-7 sm:fs-6">Do you agree to our terms? <a class="uc-link" href="#" data-uc-switcher-item="1">Sign up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		 <!--  Bottom Actions Sticky -->
        <div class="backtotop-wrap position-fixed bottom-0 end-0 z-99 m-2 vstack">
            <div class="darkmode-trigger cstack w-40px h-40px rounded-circle text-none bg-gray-100 dark:bg-gray-700 dark:text-white" data-darkmode-toggle="">
                <label class="switch">
                    <span class="sr-only">Dark mode toggle</span>
                    <input type="checkbox">
                    <span class="slider fs-5"></span>
                </label>
            </div>
            <a class="btn btn-sm bg-primary text-white w-40px h-40px rounded-circle" href="to_top" data-uc-backtotop>
                <i class="icon-2 unicon-chevron-up"></i>
            </a>
        </div>

		<!-- Header start -->
        <header class="uc-header header-three uc-navbar-sticky-wrap z-999" data-uc-sticky="sel-target: .uc-navbar-container; cls-active: uc-navbar-sticky; cls-inactive: uc-navbar-transparent; end: !*;">
            <nav class="uc-navbar-container fs-6 z-1">
                <div class="uc-center-navbar panel z-2 border-4 border-top border-primary bg-black uc-dark">
                    <div class="container max-w-2xl px-2 lg:px-4 xl:px-0">
                        <div class="uc-navbar items-center text-gray-900 dark:text-white" data-uc-navbar=" animation: uc-animation-slide-top-small; duration: 150;" style="height: 60px">
                            <div class="uc-navbar-left gap-2 lg:gap-4">
                               
                                <div class="uc-logo text-white">

                                <?php
                                    $site_id = get_current_blog_id(); ?>

                                    <?php if ( $site_id == 1 ) : ?>
                                    <a href="/">
                                        <img class="w-80px text-dark dark:text-white" src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/08/NEW_STATOM_GROUP_LOGO_14.07.25.png" alt="News5" data-uc-svg>
                                    </a>
                                    <?php elseif ( $site_id == 2 ) : ?>
                                         <img class="w-80px text-dark dark:text-white" src="https://statom-intranet-v2:8890/spark-tech/wp-content/uploads/sites/2/2025/08/Spark-Tech-Black-Logo-1-768x150-1.png" alt="News5" data-uc-svg>
                                    <?php elseif ( $site_id == 3 ) : ?>
                                          <img class="w-80px text-dark dark:text-white" src="https://statom-intranet-v2:8890/slip-form/wp-content/uploads/sites/3/2025/08/SLIPFORM-LOGO-W.png" alt="News5" data-uc-svg>
                                        <?php else : ?>
                                    <?php endif; ?>

                                </div>
                              
                            </div>
                            <div class="uc-navbar-right gap-2 lg:gap-4">

                                <div class="vr! h-16px my-auto"></div>
                                <div class="uc-navbar-item d-none xl:d-inline-flex gap-4">
									<ul class="nav-x gap-2 lg:gap-3 justify-center! text-center! fw-medium!">
										<li
											style="border-right: 2px solid rgba(255, 255, 255, 0.25);padding-right: 1rem;"
											>
                                            <a class="hover:text-yellow dark:hover:text-yellow duration-150" target="" href="/#staff-resources">Staff Resources</a>
                                        </li>
									<li
											style="border-right: 2px solid rgba(255, 255, 255, 0.25);padding-right: 1rem;"
											>
                                            <a class="hover:text-yellow dark:hover:text-yellow duration-150" target="" href="#latest-news">News</a>
                                        </li>
										<li
											style="border-right: 2px solid rgba(255, 255, 255, 0.25);padding-right: 1rem;"
											>
                                            <a class="hover:text-yellow dark:hover:text-yellow duration-150" target="" href="#menu-for-the-week">Lunch Menu</a>
                                        </li>
									</ul>
									
									
                                    <ul class="nav-x gap-2">
                                        <li>
                                            <a class="text-gray-900 dark:text-white hover:text-primary" target="_nlank" href="https://www.linkedin.com/company/gearsltd/posts/?feedView=all"><i class="icon icon-1 unicon-logo-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a class="text-gray-900 dark:text-white hover:text-primary" target="_nlank" href="https://x.com/statom_group"><i class="icon icon-1 unicon-logo-x"></i></a>
                                        </li>
                                        <li>
                                            <a class="text-gray-900 dark:text-white hover:text-primary" target="_nlank" href="https://www.instagram.com/statomgroupuk/"><i class="icon icon-1 unicon-logo-instagram"></i></a>
                                        </li>
                                        <li>
                                            <a class="text-gray-900 dark:text-white hover:text-primary" target="_nlank" href="https://www.youtube.com/@statom"><i class="icon icon-1 unicon-logo-youtube"></i></a>
                                        </li>
                                    </ul>
                                </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

			<?php if(get_field('statom_intranet_header_notification', 'option')) : ?>
				<div class="row notificationBar">
					<span class="notificationMsg">
						<?php the_field('statom_intranet_header_notification', 'option'); ?>
					</span>
				</div>
			<?php endif; ?>

        </header>


		<!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-hidden-x">


		<?php if(is_front_page() || is_page(1494) )  : ?>

            <div class="google-wrapper"> 

                <div class="page">

                <?php
                        date_default_timezone_set('Europe/London'); 

                        $hour = (int)date('H');
                        $greeting = 'Hello';

                        if ($hour >= 5 && $hour < 12) {
                            $greeting = 'Good Morning';
                        } elseif ($hour >= 12 && $hour < 17) {
                            $greeting = 'Good Afternoon';
                        } elseif ($hour >= 17 && $hour < 22) {
                            $greeting = 'Good Evening';
                        } else {
                            $greeting = 'Good Night';
                        }
                        ?>

                        <?php
                        $site_id = get_current_blog_id(); ?>

                        <?php if ( $site_id == 1 ) : ?>
                            <img class="google-logo" src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/08/NEW_STATOM_GROUP_LOGO_14.07.25.png">
                        <?php elseif ( $site_id == 2 ) : ?>
                            <img class="google-logo" src="https://statom-intranet-v2:8890/spark-tech/wp-content/uploads/sites/2/2025/08/Spark-Tech-Black-Logo-1-768x150-1.png">
                        <?php elseif ( $site_id == 3 ) : ?>
                            <img class="google-logo" src="https://statom-intranet-v2:8890/slip-form/wp-content/uploads/sites/3/2025/08/SLIPFORM-LOGO-W.png">
                            <?php else : ?>
                        <?php endif; ?>

                        <!-- Dynamic Greeting Caches a lot -->

                        <h3 class="text-white greeting-text"><div><?php echo "$greeting!"; ?></div></h3>
 
                        <form action="https://www.google.com/search" target="_blank" action="?">
                            <br><input id="searchme" aria-label="Search" placeholder="Search Google or type a URL" class="search" title="Search" type="search" name="q" ><br>
                        </form>

                       <div class="apps-corner d-flex justify-items-center align-items-center flex-column">
						   <div class="container! align-items-center text-end! d-flex flex-row apps-corner-container flex-row mb-3">
							   <div class="mx-1 stnc-button">
								   <a href="/#staff-resources">
								   Staff Resources
								   </a>
							   </div>
						   </div>
                        
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

                                <a href="https://www.google.com/chrome/" class="mb-1">
                                    <div class="app-icon-wrapper d-flex flex-column align-items-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/8/87/Google_Chrome_icon_%282011%29.png?20151104231050">
                                        <small class="text-white mt-1">Chrome</small>
                                    </div>                                                                 
                                </a>

                                <a href="https://www.office.com/launch/word" class="mb-1">
                                    <div class="app-icon-wrapper d-flex flex-column align-items-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/66/Google_Docs_2020_Logo.svg" style="width:30px!important;">
                                        <small class="text-white mt-1">Word</small>
                                    </div>                                                                 
                                </a>

                                <a href="https://www.office.com/launch/excel" class="mb-1">
                                    <div class="app-icon-wrapper d-flex flex-column align-items-center">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/60/Microsoft_Office_Excel_%282025%E2%80%93present%29.svg">
                                        <small class="text-white mt-1">Excel</small>
                                    </div>                                                                 
                                </a>

                    </div> 

                </div>
                     
                <!-- start here -->
                <div class="intranet-company-logos">
                    <Div>
                        <a href="https://flush-linegroup.co.uk">
                        <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/intranet-flushline.png" class="flushline-logo">
                      </a>
                    </div>
                    <Div>
                        <a href="https://tridentliftingsolutions.co.uk">
                            <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/Trident.png" class="trident-logo">
                        </a>
                    </div>
                    <Div>
                        <a href="https://frankifoundations.co.uk">
                            <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2026/01/frankie-logo-white.png" class="franki-logo">
                        </a>
                    </div>
                    <Div>
                        <a href="https://slipform.co.uk/">
                            <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/SLIPFORM-LOGO-W.png" class="slipform-logo">
                        </a>
                    </div>
                    <Div>
                        <a href="https://statom.co.uk/mechanical-engineering-and-plumbing">
                            <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/intranet-spark-tech.png" class="spark-tech-logo">
                        </a>
                    </div>
                    <Div>
                            <img src="https://intranet.statomgroup.co.uk/wp-content/uploads/2025/09/intranet-apex-logo.png" class="apex-logo">
                       
                    </div>
                </div>
                <!-- end here -->

                </div>
            </div>

        <?php endif; ?>



