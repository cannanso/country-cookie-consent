<?php
/*
 * Plugin Name: Country Cookie Consent
 * Description: Show cookie consent banner and set cookie for certain countries.
 * Author: cannanso
 * Author URI: http://www.cannanso.com
 * Plugin URI: http://www.cannanso.com
 * Developer: Claire Annan of cannanso
 * Developer URI: http://www.cannanso.com
 * Version: 0.1.2
 * License: GPL 3.0
 *
 * Copyright 2018 cannanso
 */

define( 'PLUGIN_DIR', dirname( __FILE__ ) );
define( 'PLUGIN_VER', '0.1.2' );
define( 'PLUGIN_URL', plugins_url( '', __FILE__ ) );


require(PLUGIN_DIR . '/includes/settings.php');
require(PLUGIN_DIR . '/includes/acf.php');
require(PLUGIN_DIR . '/includes/assets.php');
