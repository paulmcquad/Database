<?php
function getName($name) { 
  echo $name;
}
?>

<h1>Contacts</h1>
<?php 
  $name1 = "George Smith";
  $name2 = "Sally Meyers";
?>
<p><?php getName($name1); ?></p>
<p><?php getName($name2); ?></p>
