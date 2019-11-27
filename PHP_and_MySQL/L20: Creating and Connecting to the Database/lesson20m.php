<?php
define("MYSQLUSER", "root");
define("MYSQLPASS", "gamer");
define("HOSTNAME", "localhost");

if ($connection = new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS)) {
  echo 'Successful connection to MySQL <br />';
  if ($result = $connection->query("CREATE DATABASE `mydatabase`")) {
    $connection->select_db('mydatabase'); // use the database
    echo "Database created"; 
  } else {
    echo "Problem creating the database. Is the user not allowed 
      to create database or does the database already exist?";
  }
  
}
