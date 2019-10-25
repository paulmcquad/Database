<html>
<head>
	<title>Lesson 7d</title>
</head>
<body>
<h1>If Statements</h1>
  <?php
  $a = 5;
  $b = 8;
  $c = 58;
  $d = 40;
  $date = date('D, M d, Y');
  if ($d < 50) {
    
    if ($a >= strlen($data)) {
      echo "<p>Position 1: $a</p>";
    } 
    
    echo "<p>Position 2: $d</p>";
    
    if (($d + $b) < ($c - $a)) {
      echo '<p>Position 3: ' . ($d + $b) .'</p>';
    } else {
      echo '<p>Position 4: ' . ($c - $a) . '</p>';
    }
    
  }
   
  ?>
  <div>
  	<?php if ($date) { ?>
  		<p>Today is <?php echo $date; ?>.</p>
  		<p>You can check to see if there's something 
  		in a variable before you print it.<p>
  		<p>You can also jump in and out of PHP in the 
  		middle of an if statement.</p>
  	<?php } ?>
  </div>
</body>
</html>
