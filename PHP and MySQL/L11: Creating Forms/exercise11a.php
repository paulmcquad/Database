<?php 
require_once("exercise11b.php");
$answer = '';
if ($_POST['FtoC']) {
	$answer =  convertFtoC((float) $_POST['temperature']);
} elseif ($_POST['CtoF']) {
    $answer =  convertCtoF((float) $_POST['temperature']);
}
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Convert Temperature</title>
</head>
<body>

<form action="exercise11a.php" method="post">

	<fieldset>
		<legend>Fahrenheit/Celsius Converter</legend>
		<p><label for="temperature">Temperature</label>
			<input type="text" name="temperature" id="temperature" size="6" />
		</p>
		<p><input type="submit" name="FtoC" value="Fahrenheit to Celsius" /></p>
		<p><input type="submit" name="CtoF" value="Celsius to Fahrenheit" /></p>		
		
	</fieldset>
</form>
<p><?php echo $answer; ?></p>
</body>
</html>