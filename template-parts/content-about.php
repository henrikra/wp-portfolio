<?php
/* Advanced Custom Fields */
// About Me
$about_me_title_icon				= get_field('about_me_title_icon');
$about_me_title						= get_field('about_me_title');
$about_me_content					= get_field('about_me_content');
$about_me_link_button_text			= get_field('about_me_link_button_text');
$about_me_profile_picture			= get_field('profile_picture');
?>

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
					alt="Profile picture">
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