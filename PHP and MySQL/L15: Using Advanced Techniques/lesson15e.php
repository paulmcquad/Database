<?php
require_once 'cellphone_v1.php';
$myPhone = new Cellphone('555-555-1111', 'iPhone', 'Black');
$yourPhone = new Cellphone('555-555-2222', 'Droid', 'Purple');
echo 'Phone number: ' . $myPhone->phoneNumber . '<br />';
echo 'Phone number: ' . $yourPhone->phoneNumber . '<br />';