<?php
global $connection;
if ($result = $connection->query("SHOW TABLES")) {
  $count = $result->num_rows;
  echo "Tables: ($count)<br />"; 
  while ($row =$result->fetch_array()) {
    echo $row[0]. '<br />';
  }
}
