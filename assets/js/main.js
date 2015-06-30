(function() {
	
	function ColorLuminance(hex, lum) {
		// validate hex string
		hex = String(hex).replace(/[^0-9a-f]/gi, '');
		if (hex.length < 6) {
			hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
		}
		lum = lum || 0;
		// convert to decimal and change luminosity
		var rgb = "#", c, i;
		for (i = 0; i < 3; i++) {
			c = parseInt(hex.substr(i*2,2), 16);
			c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
			rgb += ("00"+c).substr(c.length);
		}
		return rgb;
	}
	
	// Tarkistaa tuleeko käyttäjä IE:llä kännykän kautta
	function isIEMobile() {
		var regExp = new RegExp("IEMobile", "i");
		return navigator.userAgent.match(regExp);
	}
	
	// Työkokemus valinnat
	$('.job .panel-heading').on('click', function() {
		var currentJob = $(this).siblings();
		$('.job .panel-body').not(currentJob).slideUp();
		$(this).siblings().slideToggle('500');
		var currentJobArrow = $(this).find('img').first();
		$('.arrow').not(currentJobArrow).removeClass('image-rotate');
		$(this).find('img').first().toggleClass('image-rotate');
	});
	
	$('#contact-form').submit(function() {
		$('#bottom-input-send').attr("value", 'Odota...');
		$('#bottom-input-send').attr("disabled", true);
		
		// Jos mobiiliverkko katkeaa niin käyttäjä voi lähettää uudestaan formin
		setTimeout(function(){
			$('#bottom-input-send').attr("value", 'Lähetä viesti');
			$('#bottom-input-send').attr("disabled", false); 
		}, 5000);
	});
	
	if (window.innerWidth < 768) {
		animationOffSet = 90;
	} else {
		animationOffSet = 100;
		$('.navbar-right li').eq(0).addClass('active');
		$('.header--continue-btn').show();
		
		$(window).scroll(function() {
			var windscroll = $(window).scrollTop();
			if (windscroll < $('.navbar').offset().top) {
				$('header .container-fluid').css({'opacity':( 100-windscroll/Math.floor($(window).height()/100) )/100});
				$('header .container-fluid').css({'transform': 'translate(0px, ' + windscroll/2 + 'px)'});
				$('header .header--continue-btn').css({'transform': 'translate(0px, ' + windscroll*1.5 + 'px)'});
			}
			$('section').each(function(i) {
				if ($(window).scrollTop() + $(window).height() == $(document).height()) {
					$('.navbar-right li.active').removeClass('active');
					$('.navbar-right li').eq(4).addClass('active');
				}
				else if ($(this).position().top <= windscroll + $(window).height()/2.5) {
					$('.navbar-right li.active').removeClass('active');
					$('.navbar-right li').eq(i).addClass('active');
				}
			});
		}).scroll();
	}
	
	$( window ).resize(function() {
		if ($(window).width() < 768 || window.innerHeight < 540) {
			$('.header--continue-btn').hide();
		} else {
			$('.header--continue-btn').show();
		}
	});
	
	$('#navigation').hcSticky();
	
	if (!isIEMobile()) {
		var animationOffSet;
		
		$('.header--full-name').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated bounceInLeft',
			offset: animationOffSet
		});
		
		$('.job').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInUp',
			offset: animationOffSet
		});
		$('.article-header').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInUp',
			offset: animationOffSet
		});
		
		$('.left-input-box').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInLeft',
			offset: animationOffSet
		});
		
		$('#right-input-box textarea').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInRight',
			offset: animationOffSet
		});
		
		$('#bottom-input-send').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInUp',
			offset: 20
		});		
		
		$('#work-samples .work-sample').addClass('landing-start');
		$('#work-samples').viewportChecker({
			offset: 20,
			callbackFunction: function(elem, action){
				$('#work-samples .work-sample').each(function(i) {
					setTimeout(function() {
						$('#work-samples .work-sample').eq(i).addClass('landing-end');
					}, 200 * (i+1));
				});
			}
		});
		
		$('.dial').each(function(i, elem) {
			var color = $(elem).next().attr('class');
			if (color === 'php-blue') {
				color = '#558AEF';
			} else if (color === 'html5-orange') {
				color = '#F16529';
			} else if (color === 'javascript-yellow') {
				color = '#FFDA3E';
			} else if (color === 'jquery-blue') {
				color = ColorLuminance('#0868AC', 0.2);
			} else if (color === 'angularjs-red') {
				color = ColorLuminance('#C4473A', 0.1);
			} else if (color === 'css-blue') {
				color = '#29A9DF';
			}
			$(elem).knob({
				'readOnly': true,
				'fgColor': color,
				'thickness': 0.13,
				'format' : function (value) {
					return value + ' %';
				},
				'font': 'Abel',
				'width': 160,
				'height': 160,
				'bgColor': ColorLuminance(color, -0.4)
			});
		});
		
		$('#skills .row .skill').viewportChecker({
			offset: 150,
			callbackFunction: function(elem, action){
				$(elem).find('.dial').each(function () {
					var elm = $(this);
					var perc = elm.data("value");  

					$({value: 0}).animate({ value: perc }, {
						duration: 2500,
						easing: 'easeOutQuart',
						progress: function () {
							elm.val(Math.ceil(this.value)).trigger('change')
						}
					});
				});
			}
		});
		
	} else {
		$('.dial').each(function(i, elem) {
			$(elem).attr('value',$(elem).data('value'));
			var color = $(elem).next().attr('class');
			if (color === 'php-blue') {
				color = '#558AEF';
			} else if (color === 'html5-orange') {
				color = '#F16529';
			} else if (color === 'javascript-yellow') {
				color = '#FFDA3E';
			} else if (color === 'jquery-blue') {
				color = ColorLuminance('#0868AC', 0.2);
			} else if (color === 'angularjs-red') {
				color = ColorLuminance('#C4473A', 0.1);
			} else if (color === 'css-blue') {
				color = '#29A9DF';
			}
			$(elem).knob({
				'readOnly': true,
				'fgColor': color,
				'thickness': 0.13,
				'format' : function (value) {
					return value + ' %';
				},
				'font': 'Dosis',
				'width': 160,
				'height': 160,
				'bgColor': ColorLuminance(color, -0.4)
			});
		});
	}
	
	menuOffSet = 50;
	// Menu navigoinnit
	$('.menu-item').on('click', function(event) {
		event.preventDefault();
		var section = $(this).attr('id').substr(5);
		$('html, body').animate({
        scrollTop: $('#' + section).offset().top - menuOffSet
    }, 1000);
	});
	
	$('#to-portfolio-btn').on('click', function(event) {
		$('html, body').animate({
        scrollTop: $('#portfolio').offset().top - menuOffSet
    }, 1000);
	});
	
	$('header .header--continue-btn').on('click', function(event) {
		$('html, body').animate({
        scrollTop: $('#about').offset().top - menuOffSet
    }, 1000);
	});
	
	$("#menu-home").on('click', function(event) {
		event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
		if (window.innerWidth < 768) {
			$('#bs-example-navbar-collapse-1').collapse('hide');
		}
	});
	
	// Sulje hamburger menu kun valitaan menu item
	$('#bs-example-navbar-collapse-1').on("click", function () {
		if (window.innerWidth < 768) {
			$(this).collapse('hide');
		}
  	});
	
	$('.work-sample').on('mouseenter', function() {
		$(this).find('.overlay').css('opacity', 1);
	});
	
	$('.work-sample').on('mouseleave', function() {
		$(this).find('.overlay').css('opacity', 0);
	});	
	
})();