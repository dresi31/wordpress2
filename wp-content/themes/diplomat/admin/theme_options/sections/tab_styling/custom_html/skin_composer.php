<?php if (!defined('ABSPATH')) die('No direct access allowed'); ?>

<div class="admin-one-half">
	<div class="option option-add-form">

		<h4 classs="option-title"><?php esc_html_e('Create a new skin', 'diplomat'); ?></h4>

		<div class="controls">

			<input type="text" id="new_color_scheme_name" class="middle" placeholder="Type here new skin name" />
			<a href="#" class="add-button" id="save_current_color_scheme" title="<?php esc_html_e('Create new skin', 'diplomat'); ?>"></a>

		</div>


		<div class="explain"></div>

	</div><!--/ .option-->

	<div class="option option-select">

		<h4 class="option-title"><?php esc_html_e('Load Skin', 'diplomat'); ?></h4>

		<div class="controls">

			<?php $theme_schemes = TMM_Ext_Demo::get_theme_schemes(); ?>

			<label class="sel">
				<select id="color_schemes_select">
					<option value=""><?php esc_html_e('None', 'diplomat'); ?></option>
					<?php if (!empty($theme_schemes)): ?>
						<?php foreach ($theme_schemes as $value) : ?>
							<option style="color: <?php echo $value['color'] ?>;" value="<?php echo $value['key'] ?>" data-color="<?php echo $value['color'] ?>"><?php echo $value['name'] ?></option>
						<?php endforeach; ?>
					<?php endif; ?>
				</select>
			</label>

		</div>

		<div class="explain"></div>

	</div><!--/ .option-->
</div>

<div class="admin-one-half">
	<?php
	TMM_OptionsHelper::draw_theme_option(array(
		'name' => '',
		'title' => esc_html__('Color Mark', 'diplomat'),
		'type' => 'color',
		'default_value' => '',
		'description' => esc_html__('New skin name', 'diplomat'),
		'css_class' => 'new_color_scheme_color',
		'hide_item_html' => 1,
		'placeholder' => esc_html__('#ffffff', 'diplomat')
	));
	?>

	<a href="#" class="admin-button button-gray button-medium" id="upload_color_scheme"><?php esc_html_e('Load', 'diplomat'); ?></a>
	&nbsp;
	<a href="#" class="admin-button button-gray button-medium" id="edit_color_scheme"><?php esc_html_e('Modify', 'diplomat'); ?></a>
	&nbsp;
	<a href="#" class="admin-button button-gray button-medium" id="delete_color_scheme"><?php esc_html_e('Delete', 'diplomat'); ?></a>
</div>
