<?php 

// add_filter('acf/settings/load_json', function( $paths ) {
//     $paths[] = PLUGIN_DIR . '/acf-json';
//     return $paths;
// });

add_filter('acf/settings/save_json', 'cookie_consent_json_save_point');

function cookie_consent_json_save_point( $paths ) {
    $path = PLUGIN_DIR . '/acf-json';
    return $path;
}


add_filter('acf/settings/load_json', 'cookie_consent_json_load_point');

function cookie_consent_json_load_point( $paths ) {
		unset($paths[0]);
    $paths[] = PLUGIN_DIR . '/acf-json';
    return $paths;
}

// default fields if acf-json directory is not detected
if( function_exists('acf_add_local_field_group') ) {

	acf_add_local_field_group(array(
		'key' => 'group_5a5fb89bcc562',
		'title' => 'CCC Settings',
		'fields' => array(
			array(
				'key' => 'field_5a5fb8b29d3d4',
				'label' => 'Enable banner',
				'name' => 'cookie_consent_enable',
				'type' => 'true_false',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'message' => '',
				'default_value' => 0,
				'ui' => 1,
				'ui_on_text' => '',
				'ui_off_text' => '',
			),
			array(
				'key' => 'field_5a5fb8e79d3d5',
				'label' => 'Text',
				'name' => 'cookie_consent_text',
				'type' => 'textarea',
				'instructions' => 'Text displayed to users that have not accepted the cookie.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'new_lines' => 'br',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-cookie-consent',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));

}