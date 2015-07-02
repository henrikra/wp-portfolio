<?php
/*
	Template Name: Home Page
 */

/* Advanced Custom Fields */
// About Me
$about_me_title_icon				= get_field('about_me_title_icon');
$about_me_title							= get_field('about_me_title');
$about_me_content						= get_field('about_me_content');
$about_me_link_button_text	= get_field('about_me_link_button_text');
$about_me_profile_picture = get_field('profile_picture');

//Contact
$contact_title_icon									= get_field('contact_title_icon');
$contact_title 											= get_field('contact_title');
$contact_email											= get_field('contact_email');
$contact_phone											= get_field('contact_phone');
$contact_location										= get_field('contact_location');
$contact_form_name									= get_field('contact_form_name');
$contact_form_email									= get_field('contact_form_email');
$contact_form_phone									= get_field('contact_form_phone');
$contact_form_message								= get_field('contact_form_message');
$contact_button_text								= get_field('contact_button_text');
$contact_github											= get_field('contact_github');
$contact_linkedin										= get_field('contact_linkedin');


get_header(); ?>

<section id="about" class="section">
	<div class="container-fluid">
		<article class="wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="section--header">

						<!-- Print user-selected title icon -->
						<?php echo '<i class="fa fa-' . $about_me_title_icon . '"></i>'; ?>

						<!-- Print user-defined title -->
						<?php echo ' ' . $about_me_title; ?>
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hr-center hr-extra-margin"><hr/></div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img id="henrik-img" class="img-responsive" src="<?php echo $about_me_profile_picture['url']; ?>"
					alt="Henrik Raitasola" title="Henrik Raitasola">
				</div>
				<div class="col-sm-8">
					<div class="about-me">
						<?php echo $about_me_content; ?>

						<!-- Button -->
						<?php if( !empty($about_me_link_button_text)) : ?> 	
						<button id="to-portfolio-btn" type="button" class="btn btn-success btn-lg btn-block"><?php echo $about_me_link_button_text; ?></button>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>
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
						<div class="col-sm-4 skill">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/php_logo.png" class="img-responsive center-block"
							alt="PHP logo">
							<input type="text" data-value="83" value="0" class="dial">
							<h3 class="php-blue">PHP</h3>
						</div>
						<div class="col-sm-4 skill">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/html5_logo.png" class="img-responsive center-block"
							alt="HTML5 logo">
							<input type="text" data-value="91" value="0" class="dial">
							<h3 class="html5-orange">HTML</h3>
						</div>
						<div class="col-sm-4 skill">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/css3_logo.png" class="img-responsive center-block"
							alt="CSS3 logo">
							<input type="text" data-value="79" value="0" class="dial">
							<h3 class="css-blue">CSS</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 skill">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/javascript-logo.png" class="img-responsive center-block"
							alt="JavaScript logo">
							<input type="text" data-value="81" value="0" class="dial">
							<h3 class="javascript-yellow">JavaScript</h3>
						</div>
						<div class="col-sm-4 skill">
							<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/jquery_logo.png" class="img-responsive center-block"
							alt="jQuery logo">
							<input type="text" data-value="82" value="0" class="dial">
							<h3 class="jquery-blue">jQuery</h3>
						</div>
						<div class="col-sm-4 skill">
							<img src="https://lh6.googleusercontent.com/-TlY7amsfzPs/T9ZgLXXK1cI/AAAAAAABK-c/Ki-inmeYNKk/w749-h794/AngularJS-Shield-large.png"
							class="img-responsive center-block" alt="AngularJS logo">
							<input type="text" data-value="85" value="0" class="dial">
							<h3 class="angularjs-red">AngularJS</h3>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>
<section id="portfolio" class="section">
	<div class="container-fluid">
		<article class="wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="section--header"><i class="fa fa-pencil"></i> Portfolio</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hr-center hr-extra-margin"><hr/></div>
			</div>
			<div id="work-samples">
				<div class="row">
					<div class="col-sm-4 ">
						<div class="work-sample panel panel-default">
							<div class="overlay"><p class="lead">Videopelien arvostelusivu</p></div>
							<a href="http://users.metropolia.fi/~henrikra/projektit/peliarvostelu" target="_blank">
								<div class="panel-body">
									<img id="game-review-fix" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/gameReviewsLogo.png" class="img-responsive"
									alt="GameReviews logo">
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="work-sample panel panel-default">
							<div class="overlay"><p class="lead">Open dataan perustuva lukujärjestyspalvelu</p></div>
							<a href="http://users.metropolia.fi/~henrikra/projektit/lukkarikone" target="_blank">
								<div class="panel-body">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/lukkari_logo.png" class="img-responsive"
									alt="Lukkarikone logo">
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="work-sample panel panel-default">
							<div class="overlay"><p class="lead">Kuvien jako -palvelu</p></div>
							<a href="http://dev.raitasola.fi/fileupload/" target="_blank">
								<div class="panel-body">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hot_pix.PNG" class="img-responsive"
									alt="Hot Pix logo">
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="work-sample panel panel-default">
							<div class="overlay"><p class="lead">Parallax efektien harjoitustyö</p></div>
							<a href="http://dev.raitasola.fi/parallax/" target="_blank">
								<div class="panel-body">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/bb_logo.png" class="img-responsive"
									alt="Parallax logo">
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="work-sample panel panel-default">
							<div class="overlay"><p class="lead">Blogi-alusta tyhjästä PHP:lla</p></div>
							<a href="http://dev.raitasola.fi/blogi/" target="_blank">
								<div class="panel-body">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/korea_logo.png" class="img-responsive"
									alt="Kore Blog logo">
								</div>
							</a>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="work-sample panel panel-default">
							<div class="overlay"><p class="lead">Luo soittolistoja hakemalla YouTuben rajapinnasta videoita</p></div>
							<a href="http://dev.raitasola.fi/partylist/" target="_blank">
								<div class="panel-body">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/yt_partylist_logo.png" class="img-responsive"
									alt="YT Part List logo">
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>
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
									class="company-logo img-responsive" alt="Hellewi logo">
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
			<?php endwhile; ?>
		</article>
	</div>
</section>
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
				 	<div class="social-items">

				 		<!-- Github -->
				 		<?php if(!empty($contact_github)) : ?>
				 		<a href="<?php echo $contact_github; ?>" target="_blank"><i class="fa fa-github-square"></i></a>
				 		<?php endif; ?>

				 		<!-- LinkedIn -->
				 		<?php if(!empty($contact_linkedin)) : ?>
				 		<a href="<?php echo $contact_linkedin; ?>" target="_blank"><i class="fa fa-linkedin-square"></i></a>
				 		<?php endif; ?>

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

<?php get_footer(); ?>
