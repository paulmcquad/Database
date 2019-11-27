<?php
function getName($name) { 
  echo $name;
  $name = "Sally Meyers";
}
?>

<h1>Contacts</h1>
<?php 
$name = "George Smith"; 
?>

<p><?php getName($name); ?></p>
<p><?php echo $name; ?>
