<?php
/**
 * Reusable page header.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$page_header_image = get_the_post_thumbnail_url( get_queried_object_id(), 'full' );
$page_header_style = $page_header_image
	? sprintf(
		'background-image: url("%s"); background-position: center; background-repeat: no-repeat; background-size: cover;',
		esc_url( $page_header_image )
	)
	: '';
?>

<div class="page-header-section section vstack border-bottom border-4 border-primary justify-center py-3 sm:py-6 lg:py-9"<?php if ( $page_header_style ) : ?> style="<?php echo esc_attr( $page_header_style ); ?>"<?php endif; ?>>
	<div class="container max-w-xl">
		<div class="panel">
			<header class="page-header vstack items-start text-start max-w-700px">
				<h1 class="h4 lg:h1"><?php the_title(); ?></h1>
				<p class="fs-6 lg:fs-5 opacity-60">Subcopy to be here</p>
			</header>
		</div>
	</div>
</div>
