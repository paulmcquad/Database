<?php
session_start(); // starts new or resumes existing session
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Test Form</title>
</head>
<body>

<form action="exercise17b.php" method="post">

<fieldset>
  <legend>Test Form</legend>
  <p><label for="name">Name</label>
  <input type="text" name="name" id="name"  />
  </p>
  <p><input type="submit" name="testform" value="Submit" /></p>

  <?php 
  $salt = 'SomeSalt';
  $token = sha1(mt_rand(1,1000000) . $salt); 
  $_SESSION['token'] = $token;
  ?>
  <input type='hidden' name='token' value='<?php echo $token; ?>'/>
</fieldset>
</form>
</body>
</html>