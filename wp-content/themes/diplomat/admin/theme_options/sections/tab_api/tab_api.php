<?php if (!defined('ABSPATH')) die('No direct access allowed');


$child_sections = array();
$tab_key = basename(__FILE__, '.php');
$pagepath = TMM_THEME_PATH . '/admin/theme_options/sections/' . $tab_key . '/custom_html/';

//***

$content = array(
	'block1' => array(
		'title' => esc_html__('API key google', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'api_key_google' => array(
				'title' => '',
				'type' => 'text',
				'default_value' => "",
				'description' => wp_kses( __('You can find the instructions on the folowing page to <a class="admin-link" target="_blank" href="http://forums.webtemplatemasters.com/how-to-obtain-the-google-api-key-for-google-maps/">get your API key</a>', 'diplomat'), array('a' => array('href' => array(), 'class' => array(), 'target' => array()) ) ),
				'custom_html' => ''
			),
		)
	)
);


$sections = array(
	'name' => esc_html__("API settings", 'diplomat'),
	'css_class' => 'shortcut-footer',
	'show_general_page' => true,
	'content' => $content,
	'child_sections' => $child_sections,
        'menu_icon' => 'dashicons-admin-generic'
);

TMM_OptionsHelper::$sections[$tab_key] = $sections;

