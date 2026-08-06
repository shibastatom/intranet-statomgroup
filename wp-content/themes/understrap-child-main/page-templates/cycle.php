<?php
/**
 * Template Name: Cycle Template
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

<?php
$cycle_parts_group = get_field('cycle_parts');
$cycle_header_content_group = get_field('cycle_header_content');
$cycle_header_content_title = $cycle_header_content_group['cycle_header_content_title'];
$cycle_header_content_title_copy = !empty($cycle_header_content_title) ? $cycle_header_content_title : get_the_title();
$cycle_header_content_sub_copy = $cycle_header_content_group['cycle_header_content_sub_copy'];
?>


       <!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-hidden-x">
            <div class="section py-4 lg:py-6 xl:py-8">
                <div class="container max-w-lg">
                    <div class="panel vstack gap-4 lg:gap-6 xl:gap-8">
                        <header class="shop-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                            <div class="panel">
                                <h1 class="h3 lg:h1"><?= $cycle_header_content_title_copy ?></h1>
                                <p class="fs-6 sm:fs-5 opacity-60"><?= $cycle_header_content_sub_copy ?></p>
                            </div>
                        </header>
                        <div>
                            <div class="panel vstack gap-8">
                                <div class="panel vstack gap-4">

<!-- TABLE CODE -->
<?php
if( $cycle_parts_group && !empty($cycle_parts_group['cycle_part']) ): 
?>

    <?php foreach( $cycle_parts_group['cycle_part'] as $part ): ?>

        <?php if( !empty($part['cycle_part_items']) ): ?>
			<div class="panel max-h-sm overflow-auto border border-gray-50 dark:text-white dark:border-gray-700 mb-4">
				<table class="table align-middle overflow-auto m-0 fs-6 dark:text-white dark:border-gray-700 ">

					<!-- Table Header = Cycle Part Title -->
					<?php if( !empty($part['cycle_part_title']) ): ?>
					<thead class="sticky-top ft-secondary bg-gray-800 text-white z-1">
						<tr>
							<th colspan="2" class="lg:w-full">
								<h4 class="mb-0">
									<?php echo esc_html($part['cycle_part_title']); ?>
								</h4>
							</th>
						</tr>
					</thead>
					<?php endif; ?>

					<tbody>

					<?php foreach( $part['cycle_part_items'] as $item ): 

						$file = $item['cycle_part_item_file'];
						$file_url = is_array($file) ? $file['url'] : $file;
					?>

						<tr>
							<td>
								<h5 class="title h6 m-0">
									<?php if($file_url): ?>
										<a href="<?php echo esc_url($file_url); ?>" target="_blank" class="text-none">
											<?php echo esc_html($item['cycle_part_item_title']); ?>
										</a>
									<?php else: ?>
										<?php echo esc_html($item['cycle_part_item_title']); ?>
									<?php endif; ?>
								</h5>
							</td>

							<td class="text-end">
								<?php if($file_url): ?>
									<a href="<?php echo esc_url($file_url); ?>" target="_blank" class="text-yellow">
										Download
									</a>
								<?php endif; ?>
							</td>
						</tr>

					<?php endforeach; ?>

					</tbody>
				</table>
				
			</div>

            

        <?php endif; ?>

    <?php endforeach; ?>

<?php endif; ?>
		
<!-- TABLE CODE -->

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