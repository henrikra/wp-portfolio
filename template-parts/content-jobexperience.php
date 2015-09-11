<section id="job-experince" class="section-dark">
	<div class="container-fluid">
		<article class="wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="section--header"><i class="fa fa-briefcase"></i> Työkokemus</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hr-center hr-extra-margin"><hr/></div>
			</div>
			<?php
			$loop = new WP_Query(array(
				'post_type' => 'job',
				'orderby' => 'post_id',
				'order' => 'DESC'
			));
			?>
			<?php while($loop->have_posts()) : $loop->the_post(); ?>
			<div class="row">
				<div class="col-sm-12">
					<div class="job panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-1 col-xs-2">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/arrow-right.png" class="arrow"
									alt="Open/Close arrow">
								</div>
								<div class="col-sm-3 col-xs-10">
									<img src="<?php echo get_field('company_logo')['url'] ?>"
									class="company-logo img-responsive" alt="Company logo">
								</div>
								<div class="col-sm-5"><h3><?php the_field('job_title'); ?><?php echo ' - '; the_field('company_name'); ?></h3></div>
								<div class="working-time col-sm-3"><?php the_field('job_start_date'); ?> - <?php the_field('job_end_date'); ?></div>
							</div>
						</div>
						<div class="panel-body">
							<?php the_field('job_description'); ?>
						</div>
					</div>
				</div>
			</div>
			<?php endwhile; wp_reset_query(); ?>
		</article>
	</div>
</section>