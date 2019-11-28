<?php
session_start();
unset($_SESSION['user_id']);
$_SESSION['user_id'] = '1';
?>
<html>
<title>Private Information</title>
<body>
  <h1>Welcome</h1>
  <p>You are looking at the public part of this page.</p>

<?php if (isLoggedIn()) : ?>
  <p>And here you see private information</p>
<?php endif; ?>

  <p>And here is more public information.</p>

</body>
</html>


<?php
function isLoggedIn() {  
  if (isset($_SESSION['user_id'])) {
    return true;
  } else {
    return false;
  }
} 