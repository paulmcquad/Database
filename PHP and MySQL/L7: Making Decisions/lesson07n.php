<html>
<head>
	<title>Lesson 7n</title>
</head>
<body>
  <h1>Weather Report</h1>
  <?php
  $weather = 'sunny';
  
  switch ($weather) {
  case 'rainy':
    echo "<p>It will be rainy today. Use your umbrella.</p>";
    break;
  case 'sunny':
    echo "<p>It will be sunny today. Wear your sunglasses.</p>";
    break;
  case 'snowy':
    echo "<p>It will be snowy today. Bring your shovel.</p>";
    break;
  default:
    echo "<p>I don't know what the weather is doing today.</p>";
  }
  ?>
</body>
</html>
