<?php
define("MYSQLUSER", "root");
define("MYSQLPASS", "gamer");
define("MYSQLDB", "smithside");
define("HOSTNAME", "localhost");

// set up the Database connection
if ($connection = new PDO('mysql:host='.HOSTNAME.';dbname=' . MYSQLDB, MYSQLUSER, MYSQLPASS)) {
    echo 'Successful connection to MySQL<br />';
  if ($result = $connection->query("SHOW TABLES")) {
    echo "Tables:<br />"; 
    while ($row =$result->fetch(PDO::FETCH_NUM)) {
      echo $row[0]. '<br />';
    }
  }
}