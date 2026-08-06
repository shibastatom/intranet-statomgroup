<?php
/**
 * Template Name: Tables Main Template
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
$tableArea = get_field('table_area');
// var_dump($tableArea);
?>


       <!-- Wrapper start -->
        <div id="wrapper" class="wrap overflow-hidden-x">
            <div class="section py-4 lg:py-6 xl:py-8">
                <div class="container max-w-lg">
                    <div class="panel vstack gap-4 lg:gap-6 xl:gap-8">
                        <header class="shop-header panel vstack justify-center gap-2 lg:gap-4 text-center">
                            <div class="panel">
                                <h1 class="h3 lg:h1"><?= get_the_title(); ?></h1>
                            </div>
                        </header>
                        
                    </div>
                </div>
            </div>
			
			<div class="section py-4 lg:py-6 xl:py-8">
                <div class="container max-w-lg">
					<?php foreach( $tableArea as $area ): ?>
					<?php 
					$areaTitle = $area['title'];
					$areaCopy = $area['copy'];
					$areaCopy2 = $area['copy_2'];
					$areaTablePartColumnNames = $area['table_part_column_names'];
					$areaTablePartItems = $area['table_part_items'];
					$maxColumns = $area['max_columns'];
					$showTable = $area['show_table'];
					$column1Numbered = $area['column_1_numbered'];
					?>
					
					<div class="mb-8">
						<div class="mb-4">
							<h2 class="text-white"><?= $areaTitle ?></h2>
							<div>
								<?= $areaCopy ?>
							</div>
						</div>

						<?php if ($showTable) : ?>
						<div class="panel max-h-sm! overflow-auto border border-gray-50 dark:text-white dark:border-gray-700 mb-4">
							<!-- TABLE -->
							<table class="table align-middle overflow-auto m-0 fs-6 dark:text-white dark:border-gray-700 ">
								<thead class="bg-gray-800">
									<tr>
										<?php foreach (array_values($areaTablePartColumnNames) as $index => $item): ?>
											<?php if (($index) >= $maxColumns) break; ?>
											<th class="">
												<h3 class="mb-0">
													<?= $item ?> 
												</h3>
											</th>
										<?php endforeach; ?>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($areaTablePartItems as $indexNumber => $item): ?>
										<tr>
											<?php for ($i = 1; $i <= $maxColumns; $i++): ?>
												<td>
													<?php
														$value = $item['col_' . $i] ?? '';

														if ($i === 1 && $column1Numbered) {
															echo esc_html(($indexNumber + 1) . ' ' . $value);
														} else {
															echo esc_html($value);
														}
													?>
												</td>
											<?php endfor; ?>
										</tr>
									<?php endforeach; ?>
								</tbody>

							</table>
							<!-- TABLE -->
						</div>
						<?php endif; ?>

						<?php if ($areaCopy2) : ?>
						<div class="mb-4">
							<div>
								<?= $areaCopy2 ?>
							</div>
						</div>
						<?php endif; ?>
						
					</div>
					
					
					<?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Wrapper end -->

<?php
get_footer();