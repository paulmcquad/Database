<?php
function getName(&$name, $department) { 
  echo $name . ' - ' . $department;
  $name = "Sally Meyers";
  $department = "Techs";
}
?>

<h1>Contacts</h1>
<?php 
$contact = "George Smith"; 
$department = "Office";
?>

<p><?php getName($contact, $department); ?></p>
<p><?php echo $contact; ?></p>
<p><?php echo $department; ?></p>

