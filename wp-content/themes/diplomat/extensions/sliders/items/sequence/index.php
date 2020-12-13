<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>
<?php

class TMM_Slider_Flex extends TMM_Slider {

	public static $slider_options = array();
	public static $slider_js_options = array();

	public static function init() {
		parent::$sliders_classes_array[] = __CLASS__;
		//***
		self::$slider_options = array(
			'key' => "sequence",
			'name' => "Slider",
			'fields' => array(
				'description' => array(
					'name' => esc_html__('Slide Description', 'diplomat'),
					'type' => 'textarea',
					'field_options' => array(
						'font_family' => esc_html__('Font family', 'diplomat'),
						'font_size' => esc_html__('Font size', 'diplomat'),
						'font_color' => esc_html__('Font color', 'diplomat')
					),
					'field_options_defaults' => array(
						'font_family' => '',
						'font_size' => '',
						'font_color' => ''
					)
				),
				'url' => array(
					'name' => esc_html__('Slide URL', 'diplomat'),
					'type' => 'textinput',
					'field_options' => array()
				),
			),
		);
		parent::$slider_options[self::$slider_options['key']] = self::$slider_options;
		//***
		self::$slider_js_options = array(
			'slide_image_alias' => array(
				'title' => esc_html__('Slide size', 'diplomat'),
				'type' => 'text',
				'description' => esc_html__('Slide size. width*height, for example 500*300. Empty field means full size!', 'diplomat'),
				'default' => '',
			),
			'enable_caption' => array(
				'title' => esc_html__('Enable caption', 'diplomat'),
				'type' => 'checkbox',
				'description' => "",
				'default' => 1,
			),
			'slideshow' => array(
				'title' => esc_html__('Slideshow', 'diplomat'),
				'type' => 'checkbox',
				'description' => __("Animate slider automatically", 'diplomat'),
				'default' => 1,
			),
			'init_delay' => array(
				'title' => esc_html__('initDelay', 'diplomat'),
				'type' => 'slider',
				'description' => __("Integer: Set an initialization delay, in milliseconds", 'diplomat'),
				'default' => 0,
				'max' => 500
			),
			'animation_speed' => array(
				'title' => esc_html__('Animation Speed', 'diplomat'),
				'type' => 'slider',
				'description' => __("Set the speed of animations, in milliseconds", 'diplomat'),
				'default' => 600,
				'max' => 2000
			),
			'slideshow_speed' => array(
				'title' => esc_html__('Slideshow Speed', 'diplomat'),
				'type' => 'slider',
				'description' => __("Set the speed of the slideshow cycling, in milliseconds", 'diplomat'),
				'default' => 7000,
				'max' => 20000
			),
			'animation' => array(
				'title' => esc_html__('Animation', 'diplomat'),
				'type' => 'select',
				'values' => array(
					'fade' => esc_html__('Fade', 'diplomat'),
					'slide' => esc_html__('Slide', 'diplomat'),
				),
				'description' => esc_html__('Select your animation type, "fade" or "slide"', 'diplomat'),
				'default' => 'slide',
			),
			'directionNav' => array(
				'title' => esc_html__('Direction Nav', 'diplomat'),
				'type' => 'checkbox',
				'description' => __("Direction Navigation", 'diplomat'),
				'default' => 1,
			),
			'controlnav' => array(
				'title' => esc_html__('Control Navigation', 'diplomat'),
				'type' => 'checkbox',
				'description' => __("Control Navigation", 'diplomat'),
				'default' => 1,
			),
			'direction' => array(
				'title' => esc_html__('Direction', 'diplomat'),
				'type' => 'select',
				'values' => array(
					'horizontal' => esc_html__('Horizontal', 'diplomat'),
					'vertical' => esc_html__('Vertical', 'diplomat'),
				),
				'description' => "",
				'default' => 'horizontal',
			)
		);
		parent::$slider_js_options[self::$slider_options['key']] = self::$slider_js_options;
	}

}
