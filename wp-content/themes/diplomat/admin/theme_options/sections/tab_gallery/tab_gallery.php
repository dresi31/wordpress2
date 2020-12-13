<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php

$child_sections = array();
$tab_key = basename(__FILE__, '.php');
//$pagepath = TMM_THEME_PATH . '/admin/theme_options/sections/' . $tab_key . '/custom_html/';
//*************************************

$content = array(
	'block1' => array(
		'title' => esc_html__('Single Gallery Page', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'gall_single_show_bio' => array(
				'title' => esc_html__('Show/Hide Author Bio', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('gall_single_show_bio'),
				'description' => esc_html__('If checked, author\'s bio box will appear at the end of each gallery.', 'diplomat'),
				'custom_html' => ''
			),

			'gall_single_show_social_share' => array(
				'title' => esc_html__('Show/Hide Social Share', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('gall_single_show_social_share'),
				'description' => esc_html__('If checked, social share box will appear at the end of each gallery.', 'diplomat'),
				'custom_html' => ''
			),
			'gall_single_show_posts_nav' => array(
				'title' => esc_html__('Show/Hide Gallery Navigation', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('gall_single_show_posts_nav'),
				'description' => esc_html__('If checked, posts navigation box will appear at the end of each gallery.', 'diplomat'),
				'custom_html' => ''
			),

			'gall_single_show_all_metadata' => array(
				'title' => esc_html__('Show/Hide All Meta Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('gall_single_show_all_metadata'),
				'description' => esc_html__('If checked, all the meta info will disappear under gallery title such as date, author, tags etc. This option will owerride the next separate four options.', 'diplomat'),
				'custom_html' => ''
			),
			'gall_single_show_likes' => array(
				'title' => esc_html__('Show/Hide Gallery Likes Number', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('gall_single_show_likes'),
				'description' => esc_html__('If checked, the gallery likes number will appear under gallery title.', 'diplomat'),
				'custom_html' => ''
			),
			'gall_single_page' => array(
				'title' => esc_html__('Enable/Disable Single Pages for Gallery Items', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('gall_single_page'),
				'description' => esc_html__('If checked, all gallery titles will appear with links to single pages', 'diplomat'),
				'custom_html' => ''
			),
		)
	),
);

$sections = array(
	'name' => esc_html__('Gallery', 'diplomat'),
	'css_class' => 'shortcut-blog',
	'show_general_page' => true,
	'content' => $content,
	'child_sections' => $child_sections,
        'menu_icon' => 'dashicons-format-gallery'
);

TMM_OptionsHelper::$sections[$tab_key] = $sections;

