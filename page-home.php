<?php
/*
	Template Name: Home Page
 */

get_header(); ?>

<section id="about" class="section">
	<div class="container-fluid">
		<article class="wrapper">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="section--header"><i class="fa fa-male"></i> Minusta</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hr-center hr-extra-margin"><hr/></div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<img id="henrik-img" class="img-responsive" src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/henrik-raitasola.png"
					alt="Henrik Raitasola" title="Henrik Raitasola">
				</div>
				<div class="col-sm-8">
					<div class="about-me">
						<p>Moi!</p>
						<p>Olen Henrik Raitasola ja minä tuotan asiakkaille heidän toiveidensa mukaisia, tyylikkäitä ja tehokkaita nettisivuja. Tältä sivulta löydät tietoa teknisestä osaamisestani, työkokemuksestani ja projekteista, joita olen työstänyt.</p>
						<p>Tavoitteeni on pysyä web-osaamisen kärjessä jatkuvasti tutkimalla ja käyttämällä uusimpia teknologioita. Aito kiinnostus web-sovellusten ohjelmointiin pitää minut motivoituneena, minkä takia haluan olla aina ylpeä työni jäljestä.</p>
						<p>Voit ottaa minuun yhteyttä sivun lopussa olevasta lomakkeesta!</p>
						<button id="to-portfolio-btn" type="button" class="btn btn-success btn-lg btn-block">Katso töitäni</button>
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
			<div class="row">
				<div class="col-sm-12">
					<div id="job1" class="job panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-1 col-xs-2">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/arrow-right.png" class="arrow"
									alt="Open/Close arrow">
								</div>
								<div class="col-sm-3 col-xs-10">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/hellewi_logo.png"
									class="company-logo img-responsive" alt="Hellewi logo">
								</div>
								<div class="col-sm-5"><h3>Web Developer - Hellewi</h3></div>
								<div class="working-time col-sm-3">Touko 2015 - Nykyhetki</div>
							</div>
						</div>
						<div class="panel-body">
							<p>Teen tällä hetkellä <a href="http://www.hellewi.fi/" target="_blank">Hellewissä</a> toiminnanohjausjärjestelmän front-end puolta. Käyttöliittymän teossa olen tiiviissä yhteistyössä asiakkaan kanssa. Yhteistyöhön kuuluu muun muassa etäpalavereja sekä käyttäjätestejä noin kahden viikoin välein.</p>
							<p>Teen mahdollisimman paljon lopputuotetta kuvaavia prototyyppejä, jotta asiakas saa hyvän tuntuman miltä lopullinen ohjelma tuntuu. Keskityn käyttäjätestien avulla siihen, että käyttöliittymästä tulee mahdollisimman intuitiivinen ja selkeä.</p>
							<p>Projektissa on käytössä MEAN-stack ja muita moderneja tekniikoita, joiden avulla saan tuotteen tuntumaan siltä miltä oikea lopullinen tuote tuntuu ilman back-endin ohjelmointia.</p>
							<p>Työpaikassa käyttämäni tekniikat: AngularJS, Jade, Stylus, CoffeeScript, Node.js</p>								</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div id="job1" class="job panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-1 col-xs-2">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/arrow-right.png" class="arrow"
									alt="Open/Close arrow">
								</div>
								<div class="col-sm-3 col-xs-10">
									<img src="http://www.empower.eu/empower-www-theme/images/empower/logo.png"
									class="company-logo img-responsive" alt="Empower logo">
								</div>
								<div class="col-sm-5"><h3>IT Trainee - Empower Oy</h3></div>
								<div class="working-time col-sm-3">Kesä 2014 - Joulu 2015</div>
							</div>
						</div>
						<div class="panel-body">
							<p>Työskentelin <a href="http://www.empower.eu/web/fi/" target="_blank">Empowerilla</a> kesällä täysipäiväisesti ja syksyllä jatkoin etätöiden muodossa koulun ohella. </p>
							<p>Empowerilla käytin ASP.NET sovelluskehystä, jolla kehitin verkkoapplikaatiota, joka on tarkoitettu uusien palvelupyyntöjen delegoimiseen, läpikäymiseen ja hallinnointiin. Lopulliseen tuotokseen sain kaikki toivotut toiminnot ja lisäksi monikielisyystuen, joka valmisti sovelluksen valmiiksi tuotantoon muihin Empowerin toimintamaihin.</p>
							<p>SQL Server ja Dynamics AX:n käyttö oli joka päiväisessä työrutiinissa, johon kuului myös integraatioon liittyvien sanomaongelmien tutkimista. Lisäksi tein satunnaisia koodaustöitä esimerkiksi Visual Basicilla.</p>
							<p>Työpaikassa käyttämäni tekniikat: HTML, CSS, ASP.NET, JavaScript, Visual Basic, C#, SQL Server, Dynamics AX, JIRA</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<div id="job2" class="job panel panel-default">
						<div class="panel-heading">
							<div class="row">
								<div class="col-sm-1 col-xs-2">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/arrow-right.png" class="arrow"
									alt="Open/Close arrow">
								</div>
								<div class="col-sm-3 col-xs-10">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/posti_logo.png" class="company-logo img-responsive"
									alt="Posti logo">
								</div>
								<div class="col-sm-5"><h3>Postityöntekijä - Itella Oy</h3></div>
								<div class="working-time col-sm-3">Kesä 2011 - Joulu 2013</div>
							</div>
						</div>
						<div class="panel-body">
							<p><a href="http://www.posti.fi/" target="_blank">Postissa</a> olen työskennellyt kesäisin postinjakajana perusjakelussa ja jouluisin varastotyöntekijänä logistiikkakeskuksessa.</p>
							<p>Perusjakelussa työtehtäviin kuului: lajittelua, oman reitin jakamista autolla tai polkupyörällä ja kirjeiden uudelleenlähetystä. Logistiikkakeskuksessa työtehtävinä oli: pakettien syöttö ja lajittelu sekä täysien rullausyksiköiden ohjaaminen eteenpäin tuotantoprosessissa.</p>
						</div>
					</div>
				</div>
			</div>
		</article>
	</div>
</section>
<section id="contact" class="section">
	<div class="container-fluid">
		<article class="wrapper">
			
			<div class="row">
				<div class="col-sm-12">
					<h2 class="section--header">Ota yhteyttä</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 hr-center hr-extra-margin"><hr/></div>
			</div>

			<div class="row">
				<div class="col-sm-4">
					<div class="contact-item">
						<a href="mailto:henrik.raitasola@gmail.com">
							<i class="fa fa-envelope-o"></i>
							<div class="contact-item-text">henrik.raitasola@gmail.com</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact-item">
						<a href="tel:+358400637916">
							<i class="fa fa-mobile"></i>
							<div class="contact-item-text">+358 400 637916</div>
						</a>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact-item">
						<a href="https://www.google.com/maps/place/00100+Helsinki,+Suomi/@60.1733239,24.9410248,15z/data=!3m1!4b1!4m2!3m1!1s0x46920bc796210691:0xcd4ebd843be2f763"
						target="_blank">
							<i class="fa fa-map-marker"></i>
							<div class="contact-item-text">Helsinki, Suomi</div>
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
									<input type="text" name="name" class="left-input-box form-control" placeholder="Nimi"
									<?php echo isset($fields['name']) ? 'value="' . e($fields['name']) . '"': '' ?>>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<input type="email" name="email" class="left-input-box form-control" placeholder="Sähköposti"
									<?php echo isset($fields['email']) ? 'value="' . e($fields['email']) . '"': '' ?>>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<input type="tel" name="phone" class="left-input-box form-control" placeholder="Puhelin"
									<?php echo isset($fields['phone']) ? 'value="' . e($fields['phone']) . '"': '' ?>>
								</div>
							</div>
						</div>
						<div id="right-input-box" class="col-sm-8">
							<textarea name="message" class="form-control" placeholder="Viestisi"><?php echo isset($fields['message']) ? e($fields['message']) : '' ?></textarea>
						</div>
					
				</div>
				<div class="row">
					<div class="col-sm-12">
						<input id="bottom-input-send" type="submit" class="btn btn-primary btn-lg btn-block" value="Lähetä viesti">
					</div>
				</div>
			</form>
			<div class="row">
				<div class="col-sm-12">
				 	<div class="social-items">
				 		<a href="https://github.com/henrikra" target="_blank"><i class="fa fa-github-square"></i></a>
				 		<a href="https://fi.linkedin.com/in/henrikraitasola" target="_blank"><i class="fa fa-linkedin-square"></i></a>
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
