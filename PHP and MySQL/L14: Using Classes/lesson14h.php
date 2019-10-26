<?php
require_once 'cellphone.php';
$myPhone = new Cellphone();
$myPhone->phoneNumber = '555-555-1111';
$myPhone->model = '3GS';
$myPhone->color = 'Black';
echo 'Phone number: ' . $myPhone->phoneNumber . '<br />';
echo 'Model: ' . $myPhone->model . '<br />';
echo 'Color: ' . $myPhone->color . '<br />';
$myPhone->addContact('555-555-1212', 'Sally Strange');
$myPhone->addContact('555-555-1515', 'George Mason');
print_r($myPhone->contacts);
