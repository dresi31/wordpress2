<?php
if (version_compare(PHP_VERSION, '5.4') < 0) {
    throw new \Exception('scssphp requires PHP 5.4 or above');
}
if (! class_exists('Leafo\ScssPhp\Version', false)) {
    include_once __DIR__ . '/scssPhp/Base/Range.php';
    include_once __DIR__ . '/scssPhp/Block.php';
    include_once __DIR__ . '/scssPhp/Colors.php';
    include_once __DIR__ . '/scssPhp/Compiler.php';
    include_once __DIR__ . '/scssPhp/Compiler/Environment.php';
    include_once __DIR__ . '/scssPhp/Exception/CompilerException.php';
    include_once __DIR__ . '/scssPhp/Exception/ParserException.php';
    include_once __DIR__ . '/scssPhp/Exception/RangeException.php';
    include_once __DIR__ . '/scssPhp/Exception/ServerException.php';
    include_once __DIR__ . '/scssPhp/Formatter.php';
    include_once __DIR__ . '/scssPhp/Formatter/Compact.php';
    include_once __DIR__ . '/scssPhp/Formatter/Compressed.php';
    include_once __DIR__ . '/scssPhp/Formatter/Crunched.php';
    include_once __DIR__ . '/scssPhp/Formatter/Debug.php';
    include_once __DIR__ . '/scssPhp/Formatter/Expanded.php';
    include_once __DIR__ . '/scssPhp/Formatter/Nested.php';
    include_once __DIR__ . '/scssPhp/Formatter/OutputBlock.php';
    include_once __DIR__ . '/scssPhp/Node.php';
    include_once __DIR__ . '/scssPhp/Node/Number.php';
    include_once __DIR__ . '/scssPhp/Parser.php';
    include_once __DIR__ . '/scssPhp/SourceMap/Base64VLQEncoder.php';
    include_once __DIR__ . '/scssPhp/SourceMap/SourceMapGenerator.php';
    include_once __DIR__ . '/scssPhp/Type.php';
    include_once __DIR__ . '/scssPhp/Util.php';
    include_once __DIR__ . '/scssPhp/Version.php';
}