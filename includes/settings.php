<?php

// Add Options page for Theme Settings options
if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page(array(
        'page_title'    => 'Country Cookie Consent',
        'menu_title'    => 'CCC',
        'redirect'      => false
    ));
}
