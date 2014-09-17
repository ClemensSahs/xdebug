<?php


$extDirFormat = ini_get('extension_dir');
$sourceDirFormat = __DIR__ .'/../modules/';

$fileName = 'xdebug.so';

copy(sprintf($sourceDirFormat,$fileName),
     sprintf($extDirFormat,$fileName));
