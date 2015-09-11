<?php
/* Advanced custom fields */
$portfolio_title_icon				= get_field('portfolio_title_icon');
$portfolio_title					= get_field('portfolio_title');


?>

<section id="portfolio" class="section">
	<div class="container-fluid">
		<article class="wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="section--header">
						<i class="fa fa-<?php echo $portfolio_title_icon?>"></i>
						<?php echo $portfolio_title ?>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hr-center hr-extra-margin"><hr/></div>
			</div>
			<div id="work-samples">
				<div class="row">

					<?php 
					$loop = new WP_Query ( array(	
						'post_type' =>	'work_specimen',
					 	'orderby'		=>	'post_id',
					 	'order'			=>	'ASC' )
					);
					?>

					<?php 
					// Loop though all work specimens
					$work_specimen_count = 0;
					while( $loop->have_posts() ) : $loop->the_post() 
					?>

					<?php
					// Check if a new row is needed
					if($work_specimen_count !== 0 && $work_specimen_count%3 === 0) : ?>
					</div>
					<div class="row">
					<?php endif; ?>

					<div class="col-sm-4 ">
						<div class="work-sample panel panel-default">
							<div class="work-sample--overlay"><p class="lead work-sample--description"><?php the_field('work_specimen_short_description') ?></p></div>
							<a href="<?php the_field('work_specimen_image_link'); ?>" target="_blank">
								<div class="panel-body">
									<img src="<?php echo get_field('work_specimen_picture')['url']; ?>" class="img-responsive work-sample--image"
									alt="<?php echo get_field('work_specimen_picture')['alt'] ? get_field('work_specimen_picture')['alt'] : 'Work experience image'; ?>">
									
								</div>
							</a>
						</div>
					</div>


					<?php
					// Increase work specimen count by one
					$work_specimen_count++;
					?>

					<?php endwhile; wp_reset_query();?>

				</div>
			</div>
		</article>
	</div>
</section>