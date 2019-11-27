<?php 
session_start(); // starts new or resumes existing session
$message = '';
$error = '';

if (isset($_POST['save']) AND $_POST['save'] == 'Save') {
  // check the token
  $badToken = true;
  if (empty($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
    $message = 'Sorry, try it again. There was a security issue.';
    $badToken = true;
  } else {
    $badToken = false;
    unset($_SESSION['token']);
    
    define("MYSQLUSER", "root");
    define("MYSQLPASS", "gamer");
    define("HOSTNAME", "localhost");
    define("MYSQLDB", "test");
    
    // Make connection to database
    $connection = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
    if ($connection->connect_error) {
      die('Connect Error: ' . $connection->connect_error);
    } else {
      // Get the data
      $desc = filter_input(INPUT_POST,'desc', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES);
      $code = (int) $_POST['code'];
      
      // Verify the data
      if (!(trim($desc))) {
        $error .= "You must enter a description<br />";
      }
      if (!(trim($code))) {
        $error .= "You must enter a code<br />";
      }
      if ($error) {
        $message .= $error;
      } else {
      
        // Prepare the data    
        if (get_magic_quotes_gpc()) {
          $desc = stripslashes($desc);
        }
        $desc = $connection->real_escape_string($desc);
        $code = (int) $code;
        
        // Set up the query 
        $query = "INSERT INTO `table1` (`description`, `code`) VALUES "
         . " ('$desc', '$code')";
        
        // Run the query and display appropriate message
        if (!$result = $connection->query($query)) {
          $message .= "Unable to add rows<br />";
        } else {
          $message .= "Row successfully added<br />";
        }
      }
    }
  }
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
</head>
<body>
<h1>Data Entry</h1>

<p><?php echo $message; ?></p>

<form action="lesson22j.php" method="post" name="maint" id="maint">

  <fieldset class="maintform">
    <legend>Add a Row</legend>
    <ul>
      <li><label for="desc">Description *</label><br />
        <input type="text" name="desc" id="desc" /></li>
      <li><label for="code">Code *</label><br />
        <input type="text" name="code" id="code" /></li>
    </ul>

    <?php 
    // create token
    $salt = 'SomeSalt';
    $token = sha1(mt_rand(1,1000000) . $salt); 
    $_SESSION['token'] = $token;
    ?>
    <input type='hidden' name='token' value='<?php echo $token; ?>'/>

    <input type="submit" name="save" value="Save" />
    <a class="cancel" href="lesson22j.php">Cancel</a>
    </fieldset>
</form>

</body>
</html>
