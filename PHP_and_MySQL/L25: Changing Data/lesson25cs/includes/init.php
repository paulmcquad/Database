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
      header("Location: index.php?content=contactmaint");
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
      header("Location: index.php?content=categorymaint");
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
