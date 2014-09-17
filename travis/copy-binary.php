<?php


$extDirFormat = phpinfo('extension_dir');
$sourceDirFormat = __DIR__ .'/../modules/';

$fileName = 'xdebug.so';

copy(sprintf($sourceDirFormat,$fileName),
     sprintf($extDirFormat,$fileName));
