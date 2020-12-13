<?php

use Leafo\ScssPhp\Compiler;

$directory = TMM_THEME_PATH . "/scss/";

require_once TMM_THEME_PATH . '/admin/theme_options/scss.inc.php';
$scss = new Compiler();

if ( TMM::get_option( 'compress_css' ) ) {
	$scss->setFormatter( 'Leafo\ScssPhp\Formatter\Crunched' );
}

$scss->setImportPaths( $directory );

echo $scss->compile( '@import "styles.scss"' );