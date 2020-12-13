<?php if (!defined('ABSPATH')) die('No direct access allowed');
$id = uniqid();
?>
<form method="get" id="searchform-<?php echo $id ?>" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<fieldset>
		<input placeholder="<?php esc_html_e('Search', 'diplomat') ?>" type="text" name="s" autocomplete="off" value="<?php echo get_search_query(); ?>" />
		<button type="submit" class="submit-search"><?php esc_html_e('Search', 'diplomat') ?></button>
	</fieldset>
</form>

