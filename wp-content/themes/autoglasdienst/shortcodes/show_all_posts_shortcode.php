			<?php

				$i = 0; // Counter für Spalten-Anzahl //

			  $args = array(
					'post_status' => 'publish',
					'post_type'=>'post',
					'posts_per_page' => -1,
					'orderby'   => 'id',
					'order' => 'DESC',
				);

				$loop = new WP_Query( $args );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<?php
						if($i == 0) {
							echo '<article class="blog-article">';
							echo '<div class="columns">';
						}
					?>

					<div class="card column is-one-third">

						<div class="card-image">

							<a class="" href="<?php the_permalink(); ?>">

								<figure class="image">
									<?php the_post_thumbnail('medium', ['class' => 'blog-article__img']); ?>
								</figure>

							</a>

						</div>

						<div class="card-content">
							<div class="media">
								<div class="media-content">
									<p class="author is-6">Veröffentlicht am <span class="meta__date-published"><time datetime="d.m.Y"><?php the_time('d.m.Y'); ?></time></span></p>
									<a class="" href="<?php the_permalink(); ?>"><p class="title is-4"><?php the_title(); ?></p></a>

									<p class="author is-6">Verfasserin <span class="meta__author"><?php echo get_the_author(); ?></span></p>

								</div>
							</div>

							<div class="content">
								<small class="tags"><?php the_tags( '<div class="tags"><code class="tag is-danger"><i class="fas fa-tags"></i> </code><span class="tag">', '</span><span class="tag">', '</span></div>' ); ?></small>
								<!--
									<?php the_excerpt(); ?>

								<a class="card__button" href="<?php the_permalink(); ?>">Zum Beitrag</a>
								-->
							</div>

						</div>

						</div>

						<?php

							$i++;
							if($i == 3) {
								$i = 0;
								echo '</div>';
								echo '</article>';
							}
						?>

					<?php endwhile; ?>

					<?php
					wp_reset_postdata();
					?>

				</div>
