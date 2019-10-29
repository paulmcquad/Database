<?php
session_start(); 
if (!isset($_POST['token']) 
  || !isset($_SESSION['token']) 
  || empty($_POST['token']) 
  || $_POST['token'] !== $_SESSION['token']) {
  die('Bad Token');
} else {
  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
  unset($_SESSION['token']);
}
