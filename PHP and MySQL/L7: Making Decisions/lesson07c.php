<html>
<head>
	<title>Lesson 7c</title>
</head>
<body>
<h1>Weather Report</h1>
  <?php
  $weather = 'sunny';
  if ($weather == 'rainy') {
    echo "<p>It will be rainy today. Use your umbrella.</p>";
  } elseif ($weather == 'sunny') {
    echo "<p>It will be sunny today. Wear your sunglasses.</p>";
  } elseif ($weather == 'snowy') {
    echo "<p>It will be snowy today. Bring your shovel.</p>";
  } else {
    echo "<p>I don't know what the weather is doing today.</p>";
  }
  ?>
</body>
</html>
