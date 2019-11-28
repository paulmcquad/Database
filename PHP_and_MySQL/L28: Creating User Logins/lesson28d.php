<?php
$password = 'SomePassword!';
$id = 42; 
$salt = '!#$%jEkcy2884';
$sitekey ='d0d48339c3b82db413b3be8fbc5d7ea1c1fd3e2792605d3cbfda1HEM54!!';

echo 'sha512: ' . hash_hmac('sha512', $password . $id. $salt, $sitekey) . '<br />';
