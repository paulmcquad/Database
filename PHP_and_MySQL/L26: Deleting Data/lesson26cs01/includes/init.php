<?php
/**
 * init.php
 *
 * Initialization file
 *
 * @version    1.2 2011-02-03
 * @package    Smithside Auctions
 * @copyright  Copyright (c) 2011 Smithside Auctions
 * @license    GNU General Public License
 * @since      Since Release 1.0
 */
session_start(); // starts new or resumes existing session
define('MAGIC_QUOTES_ACTIVE', get_magic_quotes_gpc()); 
// include required files
require_once 'includes/functions.php';

// Initialize message coming in
$message = '';
if (isset($_SESSION['message'])) {
  $message = htmlentities($_SESSION['message']);
  unset($_SESSION['message']);
}
   // Process based on the task. Default to display
  $task = filter_input(INPUT_POST,'task', FILTER_SANITIZE_STRING);
  switch ($task) {

    case 'contact.maint' :
    // process the maint
    $results = maintContact();
    $message .= $results[1];
    // If there is redirect information
    // redirect to that page
    if ($results[0] == 'contactmaint') {
      // pass on new messages
      if ($results[1]) {
        $_SESSION['message'] = $results[1];
      }
      header("Location: index.php?content=contactmaint&id=$results[2]");
      exit;
    }
    break;
    
    case 'contact.delete' :
    // process the delete
    $results = deleteContact();
    $message .= $results[1];
    // If there is redirect information
    // redirect to that page
    if ($results[0] == 'contactdelete') {
      // pass on new messages
      if ($results[1]) {
        $_SESSION['message'] = $results[1];
      }
      header("Location: index.php?content=contactdelete&id=$results[2]");
      exit;
    }
    break;
    
    case 'category.maint' :
    // process the maint
    $results = maintCategory();
    $message .= $results[1];
    // If there is redirect information
    // redirect to that page
    if ($results[0] == 'categorymaint') {
      // pass on new messages
      if ($results[1]) {
        $_SESSION['message'] = $results[1];
      }
      header("Location: index.php?content=categorymaint&cat_id=$results[2]");
      exit;
    }
    break;
  
    case 'category.delete' :
    // process the maint
    $results = deleteCategory();
    $message .= $results[1];
    // If there is redirect information
    // redirect to that page
    if ($results[0] == 'categorydelete') {
      // pass on new messages
      if ($results[1]) {
        $_SESSION['message'] = $results[1];
      }
      header("Location: index.php?content=categorydelete&cat_id=$results[2]");
      exit;
    }
    break;

    case 'lot.maint' :
    // process the maint
    $results = maintLot();
    $message .= $results[1];
    // If there is redirect information
    // redirect to that page
    if ($results[0] == 'lotmaint') {
      // pass on new messages
      if ($results[1]) {
        $_SESSION['message'] = $results[1];
      }
      $cat_id_in = (int) $_GET['cat_id'];
      header("Location: index.php?content=lotmaint&cat_id=$cat_id_in&lot_id=$results[2]");
      exit;
    }
    break;
  } 

/**
 * Auto load the class files
 * @param string $class_name
 */
function __autoload($class_name) {
  try {
    $class_file = 'includes/classes/' . strtolower($class_name) . '.php';
    if (is_file($class_file)) {
      require_once $class_file;
    } else {
      throw new Exception("Unable to load class $class_name in file $class_file.");
    }
  } catch (Exception $e) {
    echo 'Exception caught: ',  $e->getMessage(), "\n";
  }
}
