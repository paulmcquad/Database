<h1>Contacts</h1>
<?php
$contacts = array(
        array('name' => 'George Smith', 'email' => 'george@example.com'),
        array('name' => 'Sally Carpenter', 'email' => 'sally@example.com'),
        array('name' => 'Peter Jason', 'email' => 'peter@example.com'),
        array('name' => 'Lila Carhausen', 'email' => 'lila@example.com')
        ); 
?>
<ul>
<?php foreach ($contacts as $contact) : ?>
  
  <li><?php echo $contact['name']; ?><br />
  <?php echo $contact['email']; ?></li>
  
<?php endforeach; ?>
</ul>
