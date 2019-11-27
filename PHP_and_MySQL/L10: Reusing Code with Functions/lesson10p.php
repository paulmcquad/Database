<?php
function getName($name, $department="Office") { 
  echo $name . ' - ' . $department;
}
?>

<h1>Contacts</h1>
<?php 
$contact = "George Smith"; 
$department = "Tech"; 
?>
<p><?php getName($contact); ?></p>

<?php 
$contact = "Sally Meyers";
?>

<p><?php getName($contact, $department); ?></p>


