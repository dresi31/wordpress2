<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php

$child_sections = array();
$tab_key = basename(__FILE__, '.php');
//$pagepath = TMM_THEME_PATH . '/admin/theme_options/sections/' . $tab_key . '/custom_html/';
//*************************************

$folio_archive_per_page = array();
for ($i = 3; $i <= 21; $i++) {
	$folio_archive_per_page[$i] = $i;
}

//***

$content = array(
	
	'block4' => array(
		'title' => esc_html__('Archive Page Layout', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'folio_archive_layout' => array(
				'title' => esc_html__('Default Layout', 'diplomat'),
				'type' => 'select',
				'default_value' => 4,
				'values' => array(					
					3 => esc_html__('3 Columns', 'diplomat'),
					4 => esc_html__('4 Columns', 'diplomat'),
					5 => esc_html__('5 Columns', 'diplomat'),
					6 => esc_html__('6 Columns', 'diplomat'),
				),
				'description' => esc_html__('Archive Page layout for Portfolio. I.e. skills, clients listing pages.', 'diplomat'),
				'custom_html' => ''
			),
			'folio_archive_per_page' => array(
				'title' => esc_html__('Items per page', 'diplomat'),
				'type' => 'select',
				'default_value' => 8,
				'values' => $folio_archive_per_page,
				'description' => esc_html__('Please type here an amount of items to be displayed per portfolio page.', 'diplomat'),
				'custom_html' => ''
			),
			'folio_archive_sidebar' => array(
				'title' => esc_html__('Archive Page Sidebar', 'diplomat'),
				'type' => 'select',
				'default_value' => 'no_sidebar',
				'values' => array(
					'no_sidebar' => esc_html__('No sidebar', 'diplomat'),
					'sbl' => esc_html__('Left', 'diplomat'),
					'sbr' => esc_html__('Rigth', 'diplomat'),
				),
				'description' => esc_html__('Archive Page sidebar position for Portfolio', 'diplomat'),
				'custom_html' => ''
			),
		)
	),
	'block5' => array(
		'title' => esc_html__('Single Page Layout', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'folio_show_related_works' => array(
				'title' => esc_html__('Show Related Works on single page', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 1,
				'description' => esc_html__('Show Related Works on single page', 'diplomat'),
				'custom_html' => ''
			),
			'single_folio_hide_clients' => array(
				'title' => esc_html__('Hide Single Folio Clients', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 0,
				'description' => '',
				'custom_html' => ''
			),
			'single_folio_hide_skills' => array(
				'title' => esc_html__('Hide Single Folio Skills', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 0,
				'description' => '',
				'custom_html' => ''
			),
			'single_folio_hide_metadata' => array(
				'title' => esc_html__('Hide Single Folio Metadata', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 0,
				'description' => '',
				'custom_html' => ''
			),                    
            'single_folio_like_button' => array(
				'title' => esc_html__('Hide Single Folio Like Button', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 0,
				'description' => '',
				'custom_html' => ''
			),
		)
	),
	'block6' => array(
		'title' => esc_html__('Social Share Buttons', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'folio_show_twitter' => array(
				'title' => esc_html__('Show / Hide Twitter', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 1,
				'description' => esc_html__('Show / Hide Twitter Social Share Button on single page', 'diplomat'),
				'custom_html' => ''
			),
			'folio_show_facebook' => array(
				'title' => esc_html__('Show / Hide Facebook', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 1,
				'description' => esc_html__('Show / Hide Facebook Social Share Button on single page', 'diplomat'),
				'custom_html' => ''
			),
			'folio_show_google' => array(
				'title' => esc_html__('Show / Hide Google+', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 1,
				'description' => esc_html__('Show / Hide Google+ Social Share Button on single page', 'diplomat'),
				'custom_html' => ''
			),
			'folio_show_pinterest' => array(
				'title' => esc_html__('Show / Hide Pinterest', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => 1,
				'description' => esc_html__('Show / Hide Pinterest Social Share Button on single page', 'diplomat'),
				'custom_html' => ''
			),		
		)
	),
);




//*************************************
//*************************************
$sections = array(
	'name' => esc_html__('Portfolio', 'diplomat'),
	'css_class' => 'shortcut-portfolio',
	'show_general_page' => true,
	'content' => $content,
	'child_sections' => $child_sections,
        'menu_icon' => 'dashicons-portfolio'    
);

TMM_OptionsHelper::$sections[$tab_key] = $sections;

