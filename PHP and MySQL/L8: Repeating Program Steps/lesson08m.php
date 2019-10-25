<h1>Contact</h1>
<?php
$myArr = array('name' => 'George Smith',
'email' => 'george@example.com',
'phone' => '555-555-1212',
'state' => 'MA');

?>
<ul>
<?php foreach ($myArr as $key=>$value) : 

	if ($key == 'email') :
	  continue;
	endif; ?>
	
  <li><?php echo ucfirst($key); ?>:
  <?php echo $value; ?></li>
  
<?php endforeach; ?>
</ul>
