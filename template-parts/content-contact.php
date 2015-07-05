
<?php
/* ACF */
//Contact
$contact_title_icon					= get_field('contact_title_icon');
$contact_title 						= get_field('contact_title');
$contact_email						= get_field('contact_email');
$contact_phone						= get_field('contact_phone');
$contact_location					= get_field('contact_location');
$contact_form_name					= get_field('contact_form_name');
$contact_form_email					= get_field('contact_form_email');
$contact_form_phone					= get_field('contact_form_phone');
$contact_form_message				= get_field('contact_form_message');
$contact_button_text				= get_field('contact_button_text');
$contact_github						= get_field('contact_github');
$contact_linkedin					= get_field('contact_linkedin');

?>

<section id="contact" class="section">
	<div class="container-fluid">
		<article class="wrapper">
			
			<div class="row">
				<div class="col-sm-12">
					<h2 class="section--header">

						<!-- Print user-selected title icon-->
						<?php echo '<i class="fa fa-' . $contact_title_icon . '"></i>'; ?>

						<!-- Print user-defined title-->
						<?php echo $contact_title ?>

					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hr-center hr-extra-margin"><hr/></div>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<div class="contact-item">
						<a href="mailto:<?php echo $contact_email; ?>">
							<i class="fa fa-envelope-o"></i>
							<div class="contact-item-text">
								<?php echo $contact_email; ?>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact-item">
						<a href="tel:<?php echo $contact_phone; ?>">
							<i class="fa fa-mobile"></i>
							<div class="contact-item-text">
								<?php echo $contact_phone; ?>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact-item">
						<a href="https://www.google.com/maps/place/<?php echo $contact_location; ?>"
						target="_blank">
							<i class="fa fa-map-marker"></i>
							<div class="contact-item-text"><?php echo $contact_location; ?></div>
						</a>
					</div>
				</div>
			</div>

			<?php if(!empty($errors)): ?>
				<div class="alert alert-danger" role="alert">
					<ul><li><?php echo implode('</li><li>', $errors) ?></li></ul>
				</div>
			<?php endif; ?>
			<form id="contact-form" action="contact.php" method="post">
				<div class="row">
					
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-12">
									<input type="text" name="name" class="left-input-box form-control" placeholder="<?php echo $contact_form_name; ?>"
									<?php echo isset($fields['name']) ? 'value="' . e($fields['name']) . '"': '' ?>>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<input type="email" name="email" class="left-input-box form-control" placeholder="<?php echo $contact_form_email; ?>"
									<?php echo isset($fields['email']) ? 'value="' . e($fields['email']) . '"': '' ?>>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<input type="tel" name="phone" class="left-input-box form-control" placeholder="<?php echo $contact_form_phone; ?>"
									<?php echo isset($fields['phone']) ? 'value="' . e($fields['phone']) . '"': '' ?>>
								</div>
							</div>
						</div>
						<div id="right-input-box" class="col-sm-8">
							<textarea name="message" class="form-control" placeholder="<?php echo $contact_form_message; ?>"><?php echo isset($fields['message']) ? e($fields['message']) : '' ?></textarea>
						</div>
					
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input id="bottom-input-send" type="submit" class="btn btn-primary btn-lg btn-block" value="<?php echo $contact_button_text; ?>">
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-sm-12">
				 	<div class="social-icons">

						<?php
						$loop = new WP_Query(array(
							'post_type' => 'social_link',
							'orderby' => 'post_id',
							'order' => 'ASC'
						));
						?>
						<?php while($loop->have_posts()) : $loop->the_post(); ?>

						<a href="<?php the_field('social_link_link'); ?>" class="social-link" target="_blank"><span class="fa-stack social-link--content">
							<i class="fa fa-square"></i><i class="social-link--icon fa fa-<?php the_field('social_link_site_name'); ?> fa-stack-1x fa-inverse"></i>
						</span></a>

						<?php endwhile; wp_reset_query(); ?>

				 	</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12"><hr/></div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<footer>Copyright &copy 2015 Henrik Raitasola</footer>
				</div>
			</div>
		</article>
	</div>
</section>