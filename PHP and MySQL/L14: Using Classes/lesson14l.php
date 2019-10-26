<?php
require_once 'cellphone.php';
$myPhone = new Cellphone('555-555-1111', 'iPhone', 'Black');
$yourPhone = new Cellphone('555-555-2222', 'Droid', 'Purple');
$hisPhone = new Cellphone('555-555-3333', 'Blackberry', 'Pink');
echo 'Phone number: ' . $myPhone->phoneNumber . '<br />';
echo 'Model: ' . $myPhone->model . '<br />';
echo 'Color: ' . $myPhone->color . '<br />';
echo 'Phone number: ' . $yourPhone->phoneNumber . '<br />';
echo 'Model: ' . $yourPhone->model . '<br />';
echo 'Color: ' . $yourPhone->color . '<br />';
echo 'Phone number: ' . $hisPhone->phoneNumber . '<br />';
echo 'Model: ' . $hisPhone->model . '<br />';
echo 'Color: ' . $hisPhone->color . '<br />';

