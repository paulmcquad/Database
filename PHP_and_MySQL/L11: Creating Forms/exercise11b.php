<?php

/**
 * convertFtoC
 * Convert from Fahrenheit to Celsius
 * @param $temperature
 */
function convertFtoC($temperature) {	
	$celsius = ($temperature - 32)* (5/9);
	$result = formatDeg($temperature) . ' Fahrenheit is equal to ' . formatDeg($celsius) . ' Celsius.';
	return $result;
}

/**
 * convertCtoF
 * Convert from Celsius to Fahrenheit
 * @param unknown_type $temperature
 */
function convertCtoF($temperature) {
	$fahren = $temperature * (9/5) + 32;
	$result = formatDeg($temperature) . ' Celsius is equal to ' . formatDeg($fahren) . ' Fahrenheit.';
	return $result;
}

/**
 * formatDeg
 * Format the numbers to display as Degrees
 * @param unknown_type $number
 */
function formatDeg($number) {
  if (is_numeric($number)) {
    return number_format($number, 1) . '&deg;';
  } else {
    return 0 . '&deg;';
  }
}