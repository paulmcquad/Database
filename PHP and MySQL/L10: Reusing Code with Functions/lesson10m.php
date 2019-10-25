<?php
function getName($name) { 
  echo $name . ' - ' . $department;
  $name = "Sally Meyers";
}
?>

<h1>Contacts</h1>
<?php 
$name = "George Smith"; 
$department = "Office";
?>

<p><?php getName($name); ?></p>
