<?php
require_once 'cellphone.php';
$myPhone = new Cellphone();
$cellphone->addContacts('555-555-1212', 'Someone Strange');
$cellphone->addContacts('555-555-1515', 'Another Strangone');
$cellphone->displayContacts();
$cellphone->addSongs('a song');
$cellphone->addSongs('another song');
echo $cellphone->countSongs() . '<br />';
$cellphone->addThenDisplayContacts('Who Isit', '555-555-1234');