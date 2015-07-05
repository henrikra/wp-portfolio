<section id="technical-skills" class="section-dark">
	<div class="container-fluid">
		<article class="wrapper">
			<div class="article-header">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="section--header"><i class="fa fa-wrench"></i> Tekniset taidot</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 hr-center"><hr/></div>
				</div>
			</div>
			<div id="skills" class="row">
				<div class="col-sm-12">
					<div class="row">
						<?php 
						$loop = new WP_Query ( array(
							'post_type' =>	'skill',
						 	'orderby'		=>	'post_id',
						 	'order'			=>	'ASC' ) );
						?>

						<?php 
						// Loop though all work specimens
						$count = 0;
						while( $loop->have_posts() ) : $loop->the_post() 
						?>

						<?php
						// Check if a new row is needed
						if($count !== 0 && $count%3 === 0) : ?>
						</div>
						<div class="row">
						<?php endif; ?>

						<div class="col-sm-4 skill">
							<img src="<?php echo get_field('skill_picture')['url']; ?>" class="img-responsive center-block skill--image"
							alt="<?php the_field('skill_name'); ?>">
							<input type="text" data-value="<?php the_field('skill_percent'); ?>" data-color="<?php the_field('skill_color'); ?>" value="0" class="dial skill--meter">
							<h3 class="skill--title" style="color: <?php the_field('skill_color'); ?>;"><?php the_field('skill_name'); ?></h3>
						</div>

						<?php
						// Increase work specimen count by one
						$count++;
						?>

						<?php endwhile; wp_reset_query();?>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>