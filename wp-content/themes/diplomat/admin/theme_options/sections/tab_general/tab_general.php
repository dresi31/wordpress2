<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php

$child_sections = array();
$tab_key = basename(__FILE__, '.php');
$pagepath = TMM_THEME_PATH . '/admin/theme_options/sections/' . $tab_key . '/custom_html/';

//***

$content = array(
	'favicon_img' => array(
		'title' => esc_html__('Website Favicon', 'diplomat'),
		'type' => 'upload',
		'default_value' => TMM_THEME_URI . '/favicon.ico',
		'description' => esc_html__('Upload your favicon here. It will appear in your browser\'s address bar as per example below. Recommended dimensions: 16x16. Recommended image types: png, ico.', 'diplomat'),
		'custom_html' => TMM::draw_free_page($pagepath . 'favicon_img.php')
	),
	'fixed_menu' => array(
		'title' => esc_html__('Enable sticky navigation', 'diplomat'),
		'type' => 'checkbox',
		'default_value' => 1,
		'description' => '',
		'custom_html' => ''
	),
	'block_css_compress' => array(
		'title' => esc_html__('Theme Performance', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'compress_css' => array(
				'title' => esc_html__('Compress main css file', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 0,
				'description' => esc_html__('If checked, css file will be generated in minified format.', 'diplomat'),
				'custom_html' => ''

			)
		)
	),
	'blocks_speed' => array(
		'title' => esc_html__('Set column fading timeout', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'appearing_speed' => array(
				'title' => '',
				'type' => 'text',
				'default_value' => '50',
				'description' => esc_html__('Value in milliseconds', 'diplomat'),
				'custom_html' => ''

			)
		)
	),
	'header_type' => array(
		'title' => esc_html__('Header Type', 'diplomat'),
		'type' => 'select',
		'default_value' => 'classic',
		'values' => array(
			'light' => esc_html__('Default Light', 'diplomat'),
			'dark' => esc_html__('Default Dark', 'diplomat'),
			'blue' => esc_html__('Default Blue', 'diplomat'),
			'alternate' => esc_html__('Alternate', 'diplomat')
		),
		'description' => esc_html__('This option responds for all website pages. Either Classic or Alternate will take a unique header type for every page.', 'diplomat'),
		'custom_html' => ''
	),
	
	'block_website_width' => array(
		'title' => esc_html__('Website Layout Settings', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'website_width' => array(
				'title' => esc_html__('Layout rendering', 'diplomat'),
				'type' => 'select',
				'values' => array(
					'px' => esc_html__('Set the value in pixels', 'diplomat'),
					'per' => esc_html__('Set the percentage value', 'diplomat'),
				),
				'default_value' => 'px',
				'description' => esc_html__('Choose a website layout option whether in pixels or percentage. Both options support responsive layout as well.', 'diplomat'),
				'custom_html' => '',
				'css_class' => 'website_width_switcher'
			),
			'website_width_px' => array(
				'title' => esc_html__('Website width', 'diplomat'),
				'type' => 'text',
				'default_value' => TMM_OptionsHelper::get_default_value('website_width_px'),
				'description' => esc_html__('Your website width will have a fixed width and will be rendered in pixels.', 'diplomat'),
				'custom_html' => '',
				'css_class' => 'website_width_px'
			),
			'website_width_per' => array(
				'title' => esc_html__('Layout rendering', 'diplomat'),
				'type' => 'text',
				'default_value' => TMM_OptionsHelper::get_default_value('website_width_per'),
				'description' => esc_html__('Your website width will have a fluid width and will be rendered in percents.', 'diplomat'),
				'custom_html' => '',
				'css_class' => 'website_width_per'
			)
		),
	),
	'logo' => array(
		'title' => esc_html__('Website Logo', 'diplomat'),
		'type' => 'custom',
		'default_value' => '',
		'description' => '',
		'custom_html' => TMM::draw_free_page($pagepath . 'logo.php')
	),
	'sidebar_position' => array(
		'title' => esc_html__('Default Sidebar position', 'diplomat'),
		'type' => 'custom',
		'default_value' => '',
		'description' => '',
		'custom_html' => TMM::draw_free_page($pagepath . 'sidebar_position.php')
	),
    'rtl_suport' => array(
		'title' => esc_html__('Activate RTL Support', 'diplomat'),
		'type' => 'checkbox',
		'default_value' => 0,
		'description' => '',
		'custom_html' => ''
	),
	'use_wptexturize' => array(
		'title' => esc_html__('Use wptexturize', 'diplomat'),
		'type' => 'checkbox',
		'default_value' => 0,
		'description' => '',
		'custom_html' => ''
	),
	'hide_breadcrumb' => array(
		'title' => esc_html__('Disable Breadcrumbs', 'diplomat'),
		'type' => 'checkbox',
		'default_value' => 0,
		'description' => esc_html__('If checked, the breadcrumbs area will be disabled for all the website.', 'diplomat'),
		'custom_html' => ''
	),
	'page_loader' => array(
		'title' => esc_html__('Show / Hide Page loader', 'diplomat'),
		'type' => 'checkbox',
		'default_value' => 1,
		'description' => '',
		'custom_html' => ''
	),

);

$content = apply_filters('tmm_add_general_theme_option', $content);

$sections = array(
	'name' => __("General", 'diplomat'),
	'css_class' => 'shortcut-options',
	'show_general_page' => true,
	'content' => $content,
	'child_sections' => $child_sections,
        'menu_icon' => 'dashicons-admin-settings'
);

TMM_OptionsHelper::$sections[$tab_key] = $sections;

