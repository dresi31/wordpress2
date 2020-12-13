<?php if (!defined('ABSPATH')) die('No direct access allowed');


$child_sections = array();
$tab_key = basename(__FILE__, '.php');
$pagepath = TMM_THEME_PATH . '/admin/theme_options/sections/' . $tab_key . '/custom_html/';

//***

$content = array(
	'display_ls_in_main_nav' => array(
		'title' => esc_html__('Language switcher', 'diplomat'),
		'type' => 'checkbox',
		'default_value' => 0,
		'description' => '',
		'custom_html' => ''
	)
);

//*************************************
$sections = array(
	'name' => esc_html__('WPML Settings', 'diplomat'),
	'css_class' => 'shortcut-wpml',
	'show_general_page' => true,
	'content' => $content,
	'child_sections' => $child_sections,
    'menu_icon' => 'dashicons-translation'
);

TMM_OptionsHelper::$sections[$tab_key] = $sections;

