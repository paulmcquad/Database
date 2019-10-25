<?php
function addNumbers($number1, $number2) {
  if (is_numeric($number1) AND is_numeric($number2)) { 
    $result['answer'] = $number1 + $number2;
    $result['status'] = true;
    $result['message'] = "The answer is ";
    return $result;
  } else {
    $result['answer'] = null;
    $result['status'] = false;
    $result['message'] = "Unable to calculate. Non-numeric data.";
    return $result;
  }
}

$answer = addNumbers('2', 'all'); 

if ($answer['status']) {
	echo $answer['message'] . $answer['answer']; 
} else {
	echo $answer['message'];
}