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
<?php for ($i=0, $size=count($contacts); $i < $size; $i++) : ?>
  
  <li><?php echo $contacts[$i]['name']; ?><br />
  <?php echo $contacts[$i]['email']; ?></li>
  
<?php endfor; ?>
</ul>
