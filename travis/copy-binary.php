<?php


$extDirFormat = ini_get('extension_dir');
$sourceDirFormat = __DIR__ .'/../modules/';

$fileName = 'xdebug.so';

var_dump(sprintf($sourceDirFormat, $fileName),
     sprintf($extDirFormat, $fileName));
