<?php
session_start(); // starts new or resumes existing session
$message = '';
$badToken = true;
if (!isset($_POST['token']) 
  || !isset($_SESSION['token']) 
  || empty($_POST['token']) 
  || $_POST['token'] !== $_SESSION['token']) {
  $message = 'Sorry, go back and try again. There was a security issue.';
  $badToken = true;
} else {
  $badToken = false;
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  unset($_SESSION['token']);
}
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>Test Form</title>
</head>
<body>

<?php  if (!$badToken) : ?>
  <p>My name is <?php echo $name; ?></p>
<?php else : ?>
  <p><?php echo $message; ?></p>
<?php endif ?>

</body>
</html>