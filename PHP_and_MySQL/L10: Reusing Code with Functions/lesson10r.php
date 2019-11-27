<?php
function addNumbers($number1, $number2) {
  if (is_numeric($number1) AND is_numeric($number2)) { 
    $result = $number1 + $number2;
    return $result;
  } else {
    return false;
  }
}


$answer = addNumbers('2', 'all'); 

if ($answer) {
	echo $answer; 
} else {
	echo 'Unable to calculate. Non-numeric data.';
}