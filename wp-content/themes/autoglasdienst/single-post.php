<?php
/**
* Template Name: Blogpost Standard
*/

get_header(); ?>

<main>

<?php if (have_posts()) : ?>

	<?php while (have_posts()) : the_post(); ?>

		<section class="section">
			<div class="container is-widescreen">
				<div class="">
					<div class="">
						<div class="post">

							<h2 class="article__title"><?php the_title(); ?></h2>
							<hr class="h2__divider">

							<div class="" style="margin: 1em 0;">

								<small><i class="fas fa-calendar-alt"></i> <?php the_time('d.m.Y'); ?> / <i class="fas fa-user"></i> <?php the_author(); ?> / <span class="tags"><?php the_tags( '<div class="tags"><code title="tags" class="tag is-danger"><i class="fas fa-tags"></i></code><span class="tag">', '</span><span class="tag">', '</span></div>' ); ?></span></small>

								<hr>

							</div>

							<div class="entry"><?php the_content(); ?> </div>

						</div>

						<hr>

						<?php echo do_shortcode("[shariff]"); ?>

						<hr>

						<div class="columns">
							<div class="column is-half">
								<?php previous_post_link( '<small class="is-size-7 is-family-monospace has-text-grey">Zum vorhierigen Beitrag</small><br><p class="link"><i class="fas fa-chevron-left"></i> %link</p>' ); ?>
							</div>

							<div class="column is-half has-text-right">
								<?php next_post_link( '<small class="is-size-7 is-family-monospace has-text-grey">Zum nächsten Beitrag</small><br><p class="link">%link <i class="fas fa-chevron-right"></i></p>' ); ?>
							</div>
						</div>

					<?php endwhile; ?>
					<?php else : ?>
						<h2 class="center">Suchergebnis</h2>
						<p class="center"><?php _e("Aktuell sind leider keine Blogbeiträge verfügbar."); ?></p>
					<?php endif; ?>
				</div>

			</div>

		</div>

	</section>


	<hr class="hr--red">

	<?php echo do_shortcode("[contact]"); ?>

	<hr class="hr--red">

	<?php echo do_shortcode("[services]"); ?>

	<?php echo do_shortcode("[work_and_partners]"); ?>

	<?php echo do_shortcode("[opening_hours]"); ?>

</main>

<?php get_footer(); ?>