<html>
<head>
    <title>Exercise 8a</title>
</head>

<body>

<?php 
$myArray = array(1,2,3,4,5,6,7,8,9,10);
$total = count($myArray);
?>

<h1>Display the even numbers</h1>
<ul>
  <?php for ($i=1; $i < $total; $i += 2) : ?>
  	<li>The array element value is <?php echo $myArray[$i]; ?>.</li>
  <?php endfor; ?>
</ul>

</body>
</html>