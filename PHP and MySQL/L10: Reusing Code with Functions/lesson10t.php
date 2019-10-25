<?php
// FUNCTIONS
/**
 * convertTemperature
 * Convert Temperature
 * @param $temperature
 * @param $type
 */
function convertTemperature($temperature, $type = "FtoC") {	
  switch ($type) {
    case 'CtoF':
	  $result = convertCtoF($temperature);
	  break;
    case 'FtoC':
    default :
	  $result = convertFtoC($temperature);
  }	
	return $result;	
}

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

/**
 * expandType
 * Convert the type to a description
 * @param $type
 */
function expandType($type) {
  if ($type=='CtoF') {
    return 'Celsius to Fahrenheit';
  } else {
    return 'Fahrenheit to Celsius';
  }
}

?>

<?php 
// SCRIPT

// Set up the inputs
$temperature = 70; // Enter the temperature to be converted
$type = 'FtoC'; // Enter FtoC or CtoF for the type of conversion

// Display the Results
?>
<html>
<head>
  <title>Lesson 10t</title>
</head>
<body>
<h1>Convert Temperature</h1>
<p>Temperature: <?php echo formatDeg($temperature); ?></p>
<p>Type: <?php echo expandType($type); ?>
<p>Answer: <?php echo convertTemperature($temperature, $type); ?>
</body>
</html>