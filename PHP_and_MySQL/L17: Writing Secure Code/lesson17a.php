<?php
$myVar = htmlspecialchars($myInput); // Lesson 4
$myVar = filter_var($myInput, FILTER_SANITIZE_STRING); // Lesson 6
$myVar = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING); // Lesson 10
$myVar = (int) $myInput; // Lesson 11