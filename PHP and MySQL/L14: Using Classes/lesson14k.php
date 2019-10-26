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
$myPhone->displayContacts();
$myPhone->addSongs(array('ibelieve.mp3','heaven.mp3','song3.mp3'));
echo 'My phone has ' . $myPhone->countSongs(). ' songs.<br />';
