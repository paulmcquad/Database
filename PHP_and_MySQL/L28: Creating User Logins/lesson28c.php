<?php
$password = 'SomePassword!';
echo 'md5: ' . hash('md5', $password) . '<br />';
echo 'sha1: ' . hash('sha1', $password) . '<br />';
echo 'sha512: ' . hash('sha512', $password) . '<br />';
echo 'whirlpool: ' . hash('whirlpool', $password) . '<br />';


