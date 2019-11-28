<?php
session_start();
unset($_SESSION['user_id']);
$_SESSION['user_id'] = '1';
?>
<html>
<title>Private Page</title>
<body>
<?php if (!isLoggedIn()) : ?>
  <p>Sorry, this page is restricted. </p>
<?php else : ?>
  <h1>Welcome</h1>
  <p>You are looking at a private page.</p>
<?php endif; ?>
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