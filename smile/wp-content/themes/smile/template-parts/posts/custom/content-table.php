					<section class="content-body__section marb_d" id="<?php the_sub_field('text_block_heading'); ?>">
						<h2><?php the_sub_field('text_block_heading'); ?></h2>
						<?php
							if (get_sub_field('text_snippet')) {
								the_sub_field('text_snippet');
							}
						?>
						<table>
							<tr>
								<th></th>
								<th><?php the_sub_field('table_header_1'); ?></th>
								<th><?php the_sub_field('table_header_2'); ?></th>
							</tr>
							<?php if( have_rows('table_item') ): ?>
								<?php while ( have_rows('table_item') ) : the_row(); ?>
									<tr>
										<td><?php the_sub_field('table_row'); ?></td>
										<td align="center"><?php the_sub_field('col_1'); ?></td>
										<td align="center"><?php the_sub_field('col_2'); ?></td>
									</tr>
								<?php endwhile; ?>
							<?php endif; ?>
						</table>
					</section>