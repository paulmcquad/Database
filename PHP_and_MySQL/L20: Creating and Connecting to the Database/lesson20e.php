<?php
define("MYSQLUSER", "root");
define("MYSQLPASS", "gamer");
define("HOSTNAME", "localhost");
define("MYSQLDB", "smithside");

$connection = @mysqli_connect(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
if (mysqli_connect_error()) {
  die('Connect Error: ' . mysqli_connect_error());
} else {
  echo 'Successful connection to MySQL <br />';
  if ($result = mysqli_query($connection, "SHOW TABLES")) {
    $count = mysqli_num_rows($result);
    echo "Tables: ($count)<br />"; 
    while ($row = mysqli_fetch_array($result)) {
      echo $row[0]. '<br />';
    }
  }
}
