<?php
global $file;
$file = 'exercise09a.php';
echo '$file: ' . $file .'<br />';
$path = $_SERVER['DOCUMENT_ROOT'];
echo 'DOCUMENT_ROOT: ' . $path .'<br />';
$script = $_SERVER['SCRIPT_NAME'];
echo 'SCRIPT_NAME: ' . $script .'<br />';
$uri = $_SERVER['REQUEST_URI'];
echo 'REQUEST_URI: ' . $uri .'<br />';