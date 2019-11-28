<?php
session_start();
unset($_SESSION['user_id']);
$_SESSION['access'] = 'Registered';
?>
<html>
<title>Private Information</title>
<body>
  <h1>Welcome</h1>
  <p>You are looking at the public part of this page.</p>

<?php if (accessLevel() == 'Admin') : ?>
  <a href="index.php?content=adminstuff">Admin functions</a>
<?php elseif (accessLevel() == 'Registered') : ?>
  <a href="index.php?content=registeredstuff">Registered functions</a>
<?php else : ?>
  <a href="index.php?content=publicstuff">Public functions</a>
<?php endif; ?>

</body>
</html>


<?php
function accessLevel() {  
  if (isset($_SESSION['access'])) {
    return $_SESSION['access'];
  } else {
    return false;
  }
} 