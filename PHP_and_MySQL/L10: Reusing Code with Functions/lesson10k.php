<?php
function getName($name) { 
  echo $name;
}
?>

<h1>Contacts</h1>
<?php 
$contacts = array("George Smith", "Sally Meyers");

foreach ($contacts as $contact) :
?>
  <p><?php getName($contact); ?></p>
<?php endforeach; ?>
