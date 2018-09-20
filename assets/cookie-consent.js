var CookieConsent = (function($) {
	var t = {};

	t.form = {
		enabled: null,
		text: null,
		container: null,
		close: null,
		button: null,
	}
	t.is_agreed = false;
	t.country = null;

	t.checkConsent = function() {
		t.checkUserIP().then(function() {
			// show consent form if the cookie was not previously set and not excluded country
			if (t.form.enabled && !Cookies.get('cookie_consent') && t.checkUserCountry()) {
				t.showConsentForm();
			}
		});
	};

	t.showConsentForm = function() {
		$('#site-header').prepend(t.form.container);
		$('#site-main').addClass('site-banner-enabled');
	}

	t.hideConsentForm = function() {
		$('#site-main').removeClass('site-banner-enabled');
		$(t.form.container).slideUp(400);
	}

	t.setConsentCookie = function() {
		//	use js-cookie.js for cookie management
		Cookies.set('cookie_consent', true, { expires: 30 });
		t.is_agreed = Cookies.get('cookie_consent');
		t.hideConsentForm();
	};

	t.checkUserIP = function() {
		// use 3rd party API to get country code
		return $.ajax( { 
			url: '//freegeoip.net/json/', 
			type: 'POST', dataType: 'jsonp',
			success: function(location) {  
				t.country = location.country_code;
			}
		});		
	};

	t.checkUserCountry = function() {
		// Do not show form excluded country (Canada)
		if (t.country === 'CA') {
			return false;
		}

		return true;
	};

	t.init = function() {
		t.form.enabled = cc_php_vars.enabled;	// PHP variables passed from Wordpress
		t.form.text = cc_php_vars.banner_text;		
		t.form.close = '<a href="#" class="close site-banner-close"></a>';
		t.form.button = '<button class="button site-banner-button">Agree and Proceed</button>';
		t.form.container = document.createElement('div');
		t.form.container.id = 'site-banner';
		t.form.container.innerHTML = '<div class="site-banner-container">' + t.form.close + '<p>' + t.form.text + '</p>' + t.form.button + '</div>';
		
		t.checkConsent();

		$(document).on('click', '.site-banner-button', function() {	
			t.setConsentCookie();
		});	

		$(document).on('click', '.site-banner-close', function() {
			t.hideConsentForm();
		});

	

	};

	t.init();

	return t;

})(jQuery);