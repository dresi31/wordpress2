<?php
/**
 *  WPML init
 */
if ( !function_exists('tmm_wpml_init') ) {
	function tmm_wpml_init() {
		add_filter('tmm_custom_sidebar_page', 'tmm_wpml_custom_sidebar_page', 1000);
	}
}

add_action('init', 'tmm_wpml_init', 1);

/**
 * 	Custom sidebar page id
 */
if ( !function_exists('tmm_wpml_custom_sidebar_page') ) {
	function tmm_wpml_custom_sidebar_page( $id ) {

		if (defined('ICL_LANGUAGE_CODE') && ICL_LANGUAGE_CODE != ''){

			if (is_tax()) {
				//$type = 'category';
			} else if (is_category()) {
				$type = 'category';
			} else {
				$type = get_post_type();
			}

			global $sitepress;
			$id =  icl_object_id($id, $type, true, $sitepress->get_default_language());
		}

		return $id;
	}
}

TMM::init();

$display_ls = TMM::get_option('display_ls_in_main_nav');

// Display language switcher in main nav
if ($display_ls){
	add_filter( 'wp_nav_menu_items', 'flags_selector', 10, 2 );
}

function flags_selector($menu, $args){
	$args = (array)$args;
	$flags = '';

	if ( $args['container_class'] != 'menu-primary-menu-container' )
		return $menu;

	$lang = icl_get_languages('skip_missing=0&orderby=code');
	if( !empty($lang) ) {
		$flags .= '<li class="menu-item wpml-menu-item">';

		foreach( $lang as $l ) {
			if( $l['active'] )
				$flags .= '<a href="' . $l['url']. '">'
				          . '<img src="'. $l['country_flag_url'] .'" class="wpml-lang-icon" height="12" alt="'. $l['language_code'] .'" width="18" title="' . $l['translated_name'] .'" />' . $l['native_name']
				          . '</a>';
		}
		$flags .= '<ul class="sub-menu">';
		foreach( $lang as $l ) {
			if( !$l['active'] )
				$flags .= '<li><a href="' . $l['url']. '">'
						. '<img src="'. $l['country_flag_url'] .'" class="wpml-lang-icon" height="12" alt="'. $l['language_code'] .'" width="18" title="' . $l['translated_name'] .'" />' . $l['native_name']
						. '</a></li>';
		}
		$flags .= '</ul></li>';
	}
	return $menu . $flags;
}