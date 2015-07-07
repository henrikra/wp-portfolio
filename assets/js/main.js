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
	jQuery('.job .panel-heading').on('click', function() {
		var currentJob = jQuery(this).siblings();
		jQuery('.job .panel-body').not(currentJob).slideUp();
		jQuery(this).siblings().slideToggle('500');
		var currentJobArrow = jQuery(this).find('img').first();
		jQuery('.arrow').not(currentJobArrow).removeClass('image-rotate');
		jQuery(this).find('img').first().toggleClass('image-rotate');
	});
	
	jQuery('#contact-form').submit(function() {
		jQuery('#bottom-input-send').attr("value", 'Odota...');
		jQuery('#bottom-input-send').attr("disabled", true);
		
		// Jos mobiiliverkko katkeaa niin käyttäjä voi lähettää uudestaan formin
		setTimeout(function(){
			jQuery('#bottom-input-send').attr("value", 'Lähetä viesti');
			jQuery('#bottom-input-send').attr("disabled", false); 
		}, 5000);
	});
	
	if (window.innerWidth < 768) {
		animationOffSet = 90;
	} else {
		animationOffSet = 100;
		jQuery('.navbar-right li').eq(0).addClass('active');
		jQuery('.header--continue-btn').show();
		
		jQuery(window).scroll(function() {
			var windscroll = jQuery(window).scrollTop();
			if (windscroll < jQuery('.navbar').offset().top) {
				jQuery('header .container-fluid').css({'opacity':( 100-windscroll/Math.floor(jQuery(window).height()/100) )/100});
				jQuery('header .container-fluid').css({'transform': 'translate(0px, ' + windscroll/2 + 'px)'});
				jQuery('header .header--continue-btn').css({'transform': 'translate(0px, ' + windscroll*1.5 + 'px)'});
			}
			jQuery('section').each(function(i) {
				if (jQuery(window).scrollTop() + jQuery(window).height() == jQuery(document).height()) {
					jQuery('.navbar-right li.active').removeClass('active');
					jQuery('.navbar-right li').eq(4).addClass('active');
				}
				else if (jQuery(this).position().top <= windscroll + jQuery(window).height()/2.5) {
					jQuery('.navbar-right li.active').removeClass('active');
					jQuery('.navbar-right li').eq(i).addClass('active');
				}
			});
		}).scroll();
	}
	
	jQuery( window ).resize(function() {
		if (jQuery(window).width() < 768 || window.innerHeight < 540) {
			jQuery('.header--continue-btn').hide();
		} else {
			jQuery('.header--continue-btn').show();
		}
	});
	
	jQuery('#navigation').hcSticky();

	jQuery('.dial').each(function(i, elem) {
		var color = jQuery(elem).data('color');
		jQuery(elem).knob({
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
	
	if (!isIEMobile()) {
		var animationOffSet;
		
		jQuery('.header--full-name').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated bounceInLeft',
			offset: animationOffSet
		});
		
		jQuery('.job').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInUp',
			offset: animationOffSet
		});
		jQuery('.article-header').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInUp',
			offset: animationOffSet
		});
		
		jQuery('.left-input-box').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInLeft',
			offset: animationOffSet
		});
		
		jQuery('#right-input-box textarea').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInRight',
			offset: animationOffSet
		});
		
		jQuery('#bottom-input-send').addClass('invisible').viewportChecker({
			classToAdd: 'visible animated slideInUp',
			offset: 20
		});		
		
		jQuery('#work-samples .work-sample').addClass('landing-start');
		jQuery('#work-samples').viewportChecker({
			offset: 20,
			callbackFunction: function(elem, action){
				jQuery('#work-samples .work-sample').each(function(i) {
					setTimeout(function() {
						jQuery('#work-samples .work-sample').eq(i).addClass('landing-end');
					}, 200 * (i+1));
				});
			}
		});
		
		jQuery('#skills .row .skill').viewportChecker({
			offset: 150,
			callbackFunction: function(elem, action){
				jQuery(elem).find('.dial').each(function () {
					var elm = jQuery(this);
					var perc = elm.data("value");  

					jQuery({value: 0}).animate({ value: perc }, {
						duration: 2500,
						easing: 'easeOutQuart',
						progress: function () {
							elm.val(Math.ceil(this.value)).trigger('change');
						}
					});
				});
			}
		});
	}
	
	menuOffSet = 50;
	// Menu navigoinnit
	jQuery('.menu-item').on('click', function(event) {
		event.preventDefault();
		var section = jQuery(this).attr('id').substr(5);
		jQuery('html, body').animate({
        scrollTop: jQuery('#' + section).offset().top - menuOffSet
    }, 1000);
	});
	
	jQuery('#to-portfolio-btn').on('click', function(event) {
		jQuery('html, body').animate({
        scrollTop: jQuery('#portfolio').offset().top - menuOffSet
    }, 1000);
	});
	
	jQuery('header .header--continue-btn').on('click', function(event) {
		jQuery('html, body').animate({
        scrollTop: jQuery('#about').offset().top - menuOffSet
    }, 1000);
	});
	
	jQuery("#menu-home").on('click', function(event) {
		event.preventDefault();
    jQuery('html, body').animate({
        scrollTop: 0
    }, 1000);
		if (window.innerWidth < 768) {
			jQuery('#bs-example-navbar-collapse-1').collapse('hide');
		}
	});
	
	// Sulje hamburger menu kun valitaan menu item
	jQuery('#bs-example-navbar-collapse-1').on("click", function () {
		if (window.innerWidth < 768) {
			jQuery(this).collapse('hide');
		}
  	});
	
})();