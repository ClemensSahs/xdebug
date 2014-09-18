<?php


$extDirFormat = ini_get('extension_dir') . '/%s';
$sourceDirFormat = realpath(__DIR__ . '/../modules') . '/%s';

$fileName = 'xdebug.so';

$sourceFile = sprintf($sourceDirFormat, $fileName);
$extFile = sprintf($sourceDirFormat, $fileName);

copy($sourceFile, $extFile);

if (file_get_contents($sourceFile) === file_get_contents($extFile)) {
    exit(0);
}

exit(1);
