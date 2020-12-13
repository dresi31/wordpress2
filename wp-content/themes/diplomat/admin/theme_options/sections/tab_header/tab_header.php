<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php

$child_sections = array();
$tab_key = basename(__FILE__, '.php');
$pagepath = TMM_THEME_PATH . '/admin/theme_options/sections/' . $tab_key . '/custom_html/';

//***

$content = array(
	'donate_button' => array(
		'title' => esc_html__('Donate Button', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'show_donate_button' => array(
				'title' => esc_html__('Donate button', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => '1',
				'description' => esc_html__('Show / Hide  Home Page Donate Button', 'diplomat'),
				'custom_html' => ''
			),
			'donate_button_text' => array(
				'title' => esc_html__('Donate Button Text', 'diplomat'),
				'type' => 'text',
				'default_value' => esc_html__('Donate', 'diplomat'),
				'description' => esc_html__('Donate Button Text', 'diplomat'),
				'custom_html' => ''
			),
			'donate_button_url_type' => array(
				'title' => '',
				'type' => 'custom',
				'default_value' => '0',
				'description' => '',
				'custom_html' => TMM::draw_free_page($pagepath . 'donate_button_url.php')
			),
			'donate_button_target' => array(
				'title' => esc_html__('Donate button target', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => '1',
				'description' => esc_html__('Open link in a new window', 'diplomat'),
				'custom_html' => ''
			),
		)
	),
	'login_buttons' => array(
		'title' => esc_html__('Login / Register Buttons', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'show_login_buttons' => array(
				'title' => esc_html__('Display buttons', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => '1',
				'description' => esc_html__('Show / Hide  login and register button', 'diplomat'),
				'custom_html' => ''
			),
		)
	),
    'socials' => array(
		'title' => esc_html__('Social Icons', 'diplomat'),
		'type' => 'items_block',
		'items' => array()
	),
);

$social_types = tmm_get_social_types();

foreach ($social_types as $key => $type) {

	$content['socials']['items']['show_'.$key.'_social_icon'] = array(
		'title' => $type['name'] . esc_html__(' Social Icon', 'diplomat'),
		'type' => ($key === 'rss') ? 'checkbox' : 'text',
		'default_value' => ($key === 'rss') ? 0 : $type['link'],
		'description' => sprintf(__('Show / Hide %s Social Icon in Page Header', 'diplomat'), $type['name'] ),
		'custom_html' => '',
		'is_reset' => true
	);

}

$sections = array(
	'name' => __("Header", 'diplomat'),
	'css_class' => 'shortcut-header',
	'show_general_page' => true,
	'content' => $content,
	'child_sections' => $child_sections,
        'menu_icon' => 'dashicons-welcome-widgets-menus'    
);

TMM_OptionsHelper::$sections[$tab_key] = $sections;

