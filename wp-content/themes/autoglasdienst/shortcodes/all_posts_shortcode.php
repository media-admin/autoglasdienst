<section class="section__archive">
	
	<div class="container">
		
		<div class="columns is-3">
			
			<?php echo do_shortcode("[all_posts]"); ?>				
			
			<?php
			   
			   $args = array(  
					'post_status' => 'publish',
					'post_type' => 'post',
					'posts_per_page' => -1, 
					'orderby'   => 'id',
					'order' => 'ASC',
				);
				
				$loop = new WP_Query( $args ); 
			
			?>
			
			<?php
			
				while ( have_posts() ) : the_post(); ?>
		
				<div class="card column is-one-third">
					
					<div class="card-image">
						
						<a class="" href="<?php the_permalink(); ?>">
						
							<figure class="image">
								<img  alt="Beitragsbild" src=" <?php the_post_thumbnail();?>
							</figure>
						
						</a>
					
					</div>
					
					<div class="card-content">
						<div class="media">
							<div class="media-content">
								<p class="author is-6">Veröffentlicht am <span class="meta__date-published"><time datetime="d.m.Y"><?php the_time('d.m.Y'); ?></time></span></p>
								<a class="" href="<?php the_permalink(); ?>"><p class="title is-4"><?php the_title(); ?></p></a>
								<p class="author is-6">Verfasser <span class="meta__author"><?php get_the_author_meta( 'display_name', $author_id ); ?></span><?php the_author(); ?></p>
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
			
			<?php endwhile;
			wp_reset_postdata(); 
			 // end of the loop. ?>
	
		</div>
	
	</div>
	
</section>