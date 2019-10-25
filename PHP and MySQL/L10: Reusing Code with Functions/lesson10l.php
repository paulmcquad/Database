<?php
function getName($name, $department) { 
  echo $name . ' - ' . $department;
}
?>

<h1>Contacts</h1>
<?php 
$contacts = array("George Smith", "Sally Meyers");
$department = "Office";

foreach ($contacts as $contact) :
?>
  <p><?php getName($contact, $department); ?></p>
<?php endforeach; ?>
