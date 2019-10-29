<?php 
$name = "Sally Meyers";
$phone = "515-555-1222";
$image = "sally-meyers-t.jpg"
?>
<html>
<head>
<title>Contact</title>
</head>
<body>

<p>
  <?php  if (file_exists($image)) : ?>
    <img src="<?php echo $image; ?>" />
  <?php endif; ?>
  <?php echo $name; ?> :
  <?php echo $phone; ?>
</p>

</body>
</html>
