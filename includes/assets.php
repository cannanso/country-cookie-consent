<?php


add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script( 'cookie-js', PLUGIN_URL . '/assets/js.cookie.js', array('jquery') );
    wp_enqueue_script( 'cookie-consent', PLUGIN_URL . '/assets/cookie-consent.js', array('jquery') );
    wp_localize_script( 'cookie-consent', 'cc_php_vars', array(
    	'enabled' => get_field('cookie_consent_enable', 'option'), 
    	'banner_text' => get_field('cookie_consent_text', 'option'),
    ));
});