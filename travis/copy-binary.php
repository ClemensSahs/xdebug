<?php


$extDirFormat = ini_get('extension_dir') . '/%s';
$sourceDirFormat = realpath(__DIR__ . '/../modules') . '/%s';

$fileName = 'xdebug.so';

copy(sprintf($sourceDirFormat, $fileName),
         sprintf($extDirFormat, $fileName));
