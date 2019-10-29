<?php
require_once 'cellphone_v2.php';
require_once 'smartphone_v2.php';

$applist = array("Angry Birds", "Tetris", "Pandora");
$myPhone = new Smartphone('555-555-1111', 'iPhone', 'Black', $applist);

$applist = array("CNN", "Angry Birds");
$yourPhone = new Smartphone('555-555-2222', 'Droid', 'Purple', $applist);

echo 'Phone number: ' . $myPhone->getPhoneNumber() . '<br />';
echo 'List Apps: '. $myPhone->displayApps() . '<br />';
echo 'Phone number: ' . $yourPhone->getPhoneNumber() . '<br />';
echo 'List Apps: '. $yourPhone->displayApps() . '<br />';