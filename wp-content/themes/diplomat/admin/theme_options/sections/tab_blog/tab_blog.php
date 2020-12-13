<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php

$child_sections = array();
$tab_key = basename(__FILE__, '.php');
//$pagepath = TMM_THEME_PATH . '/admin/theme_options/sections/' . $tab_key . '/custom_html/';
//*************************************

$content = array(
	'block0' => array(
		'title' => '',
		'type' => 'items_block',
		'items' => array(
			'date_format' => array(
				'title' => esc_html__('Date format', 'diplomat'),
				'type' => 'select',
				'default_value' => TMM_OptionsHelper::get_default_value('date_format'),
				'values' => array(
					'd.m.Y' => date('d.m.y'),
					'm.d.Y' => date('m.d.y'),
					'j, n, Y' => date('j, n, Y'),
					'F j, Y' => date('F j, Y'),
					'Y-m-d' => date('Y-m-d'),
					'm/d/Y' => date('m/d/Y'),
					'd/m/Y' => date('d/m/Y'),
					'Y/m/d' => date('Y/m/d')

				),
				'description' => esc_html__('General website date format. Do not edit this field to use default theme date format.', 'diplomat'),
				'custom_html' => '',
				'is_reset' => true
			),
		)
	),
	'block1' => array(
		'title' => esc_html__('Listing Page', 'diplomat'),
		'type' => 'items_block',
		'items' => array(			
			'excerpt_symbols_count' => array(
				'title' => esc_html__('Excerpt Symbols Count', 'diplomat'),
				'type' => 'slider',
				'default_value' => TMM_OptionsHelper::get_default_value('excerpt_symbols_count'),
				'min' => 10,
				'max' => 900,
				'description' => esc_html__('This option will excerpt full article content with a necessary amount of symbols on the blog listing page.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_listing_show_all_metadata' => array(
				'title' => esc_html__('Show/Hide All Meta Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_listing_show_all_metadata'),
				'description' => esc_html__('If checked, all the meta info will disappear in articles such as date, author, tags etc. This option will owerride the next separate four options.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_listing_show_date' => array(
				'title' => esc_html__('Show/Hide Date Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_listing_show_date'),
				'description' => esc_html__('If checked, the date info will appear in articles.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_listing_show_author' => array(
				'title' => esc_html__('Show/Hide Author Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_listing_show_author'),
				'description' => esc_html__('If checked, the author info will appear in articles.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_listing_show_tags' => array(
				'title' => esc_html__('Show/Hide Tags Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_listing_show_tags'),
				'description' => esc_html__('If checked, the tags info will appear in articles.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_listing_show_category' => array(
				'title' => esc_html__('Show/Hide Category Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_listing_show_category'),
				'description' => esc_html__('If checked, the category info will appear in articles.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_listing_show_comments' => array(
				'title' => esc_html__('Show/Hide Comments Number', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_listing_show_comments'),
				'description' => esc_html__('If checked, the comments number will appear in articles.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_listing_show_likes' => array(
				'title' => esc_html__('Show/Hide Likes Number', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_listing_show_likes'),
				'description' => esc_html__('If checked, the likes number will appear in articles.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_listing_effect' => array(
				'title' => esc_html__('Effect for Appearing Post', 'diplomat'),
				'type' => 'select',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_listing_effect'),
				'values' => array(
					'none' => esc_html__('None', 'diplomat'),
					'elementFade' => esc_html__('Element Fade', 'diplomat'),
					'opacity' => esc_html__('Opacity', 'diplomat'),
					'opacity2xRun' => esc_html__('Opacity 2x Run', 'diplomat'),
					'scale' => esc_html__('Scale', 'diplomat'),
					'slideRight' => esc_html__('Slide Right', 'diplomat'),
					'slideLeft' => esc_html__('Slide Left', 'diplomat'),
					'slideDown' => esc_html__('Slide Down', 'diplomat'),
					'slideUp' => esc_html__('Slide Up', 'diplomat'),
					'slideUp2x' => esc_html__('Slide Up 2x', 'diplomat'),
					'extraRadius' => esc_html__('Extra Radius', 'diplomat')
				),
				'description' => esc_html__('Effect for Appearing Post.', 'diplomat'),
				'custom_html' => ''
			),
		)
	),
	'block2' => array(
		'title' => esc_html__('Single Page', 'diplomat'),
		'type' => 'items_block',
		'items' => array(
			'blog_single_show_bio' => array(
				'title' => esc_html__('Show/Hide Author Bio', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_bio'),
				'description' => esc_html__('If checked, author\'s bio box will appear at the end of each article.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_comments' => array(
				'title' => esc_html__('Show/Hide Comments', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_comments'),
				'description' => esc_html__('If checked, all the visitors will be allowed to post their comments to articles.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_fb_comments' => array(
				'title' => esc_html__('Show/Hide Facebook Comments', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_fb_comments'),
				'description' => esc_html__('If checked, all the visitors will be allowed to post their comments to articles with faceebok.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_social_share' => array(
				'title' => esc_html__('Show/Hide Social Share', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_social_share'),
				'description' => esc_html__('If checked, social share box will appear at the end of each article.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_posts_nav' => array(
				'title' => esc_html__('Show/Hide Posts Navigation', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_posts_nav'),
				'description' => esc_html__('If checked, posts navigation box will appear at the end of each article.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_related_posts' => array(
				'title' => esc_html__('Show/Hide Related Posts', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_related_posts'),
				'description' => esc_html__('If checked, related posts will appear at the end of each article.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_related_posts_with_image' => array(
				'title' => esc_html__('Show Related Posts Only With Images?', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_related_posts_with_image'),
				'description' => esc_html__('If checked, related posts will only be shown with featured images at the end of each article.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_all_metadata' => array(
				'title' => esc_html__('Show/Hide All Meta Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_all_metadata'),
				'description' => esc_html__('If checked, all the meta info will disappear under article title such as date, author, tags etc. This option will owerride the next separate four options.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_date' => array(
				'title' => esc_html__('Show/Hide Date Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_date'),
				'description' => esc_html__('If checked, the date info will appear under article title.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_author' => array(
				'title' => esc_html__('Show/Hide Author Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_author'),
				'description' => esc_html__('If checked, the author info will appear under article title.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_tags' => array(
				'title' => esc_html__('Show/Hide Tags Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_tags'),
				'description' => esc_html__('If checked, the tags info will appear under article title.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_category' => array(
				'title' => esc_html__('Show/Hide Category Info', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_category'),
				'description' => esc_html__('If checked, the category info will appear under article title.', 'diplomat'),
				'custom_html' => ''
			),
			'blog_single_show_likes' => array(
				'title' => esc_html__('Show/Hide Post Likes Number', 'diplomat'),
				'type' => 'checkbox',
				'default_value' => TMM_OptionsHelper::get_default_value('blog_single_show_likes'),
				'description' => esc_html__('If checked, the post likes number will appear under article title.', 'diplomat'),
				'custom_html' => ''
			),
		)
	),
);




//*************************************
//*************************************
$sections = array(
	'name' => esc_html__('Blog/News', 'diplomat'),
	'css_class' => 'shortcut-blog',
	'show_general_page' => true,
	'content' => $content,
	'child_sections' => $child_sections,
        'menu_icon' => 'dashicons-format-standard'    
);

TMM_OptionsHelper::$sections[$tab_key] = $sections;

