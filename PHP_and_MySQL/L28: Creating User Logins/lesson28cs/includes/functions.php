<?php
/**
 * loadContent
 * Load the Content
 * @param $default
 */
function loadContent($where, $default='') {
  // Get the content from the url 
  // Sanitize it for security reasons
  $content = filter_input(INPUT_GET, $where, FILTER_SANITIZE_STRING);
  $default = filter_var($default, FILTER_SANITIZE_STRING);
  // If there wasn't anything on the url, then use the default
  $content = (empty($content)) ? $default : $content;
  // If you found have content, then get it and pass it back
  if ($content) {
  // sanitize the data to prevent hacking.
  $html = include 'content/'.$content.'.php';
  return $html;
  }
}

function maintContact() {
  $results = '';
  if (isset($_POST['save']) AND $_POST['save'] == 'Save') {
    // check the token
    $badToken = true;
    if (!isset($_POST['token']) || !isset($_SESSION['token']) || empty($_POST['token']) || $_POST['token'] !== $_SESSION['token']) {
      $results = array('','Sorry, go back and try again. There was a security issue.');
      $badToken = true;
    } else {
      $badToken = false;
      unset($_SESSION['token']);
      // Put the sanitized variables in an associative array 
      // Use the FILTER_FLAG_NO_ENCODE_QUOTES to allow names like O'Connor
      $item  = array (  'id' => (int) $_POST['id'],
                'first_name' => filter_input(INPUT_POST,'first_name', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES),
                'last_name'  => filter_input(INPUT_POST,'last_name', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES),
                'position'   => filter_input(INPUT_POST,'position', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES),
                'email'      => filter_input(INPUT_POST,'email', FILTER_SANITIZE_STRING),            
                'phone'      => filter_input(INPUT_POST,'phone', FILTER_SANITIZE_STRING)
            );
              
      // Set up a Contact object based on the posts
      $contact = new Contact($item);
      if ($contact->getId()) {
        $results = $contact->editRecord();
      } else {
         $results = $contact->addRecord();
      }
    }
  }
  return $results;
}

function deleteContact() {
  $results = '';
  if (isset($_POST['delete']) AND $_POST['delete'] == 'Delete') {
    // check the token
    $badToken = true;
    if (!isset($_POST['token']) 
    || !isset($_SESSION['token']) 
    || empty($_POST['token']) 
    || $_POST['token'] !== $_SESSION['token']) {
      $results = array('','Sorry, go back and try again. There was a security issue.');
      $badToken = true;
    } else {
      $badToken = false;
      unset($_SESSION['token']);
      
      // Delete the Contact from the table
      $results = Contact::deleteRecord((int) $_POST['id']);
    }
  }
  return $results;
}

function maintCategory() {
  $results = '';
  if (isset($_POST['save']) AND $_POST['save'] == 'Save') {
    // check the token
    $badToken = true;
    if (!isset($_POST['token']) 
    || !isset($_SESSION['token']) 
    || empty($_POST['token']) 
    || $_POST['token'] !== $_SESSION['token']) {
      $results = array('','Sorry, go back and try again. There was a security issue.');
      $badToken = true;
    } else {
      $badToken = false;
      unset($_SESSION['token']);
      // Put the sanitized variables in an associative array 
      // Use the FILTER_FLAG_NO_ENCODE_QUOTES to allow quotes in the description
      $item  = array ('cat_id' => (int) $_POST['cat_id'],
                'cat_name' => filter_input(INPUT_POST,'cat_name', FILTER_SANITIZE_STRING),
                'cat_description' => filter_input(INPUT_POST,'cat_description', FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES),
                'cat_image' => filter_input(INPUT_POST,'cat_image', FILTER_SANITIZE_STRING)
            );
              
      // Set up a Category object based on the posts
      $category = new Category($item);
      if ($category ->getCat_id()) {
        $results = $category ->editRecord();
      } else {
        $results = $category ->addRecord();
      }
    }
  }
  return $results;
}

function deleteCategory() {
  $results = '';
  if (isset($_POST['delete']) AND $_POST['delete'] == 'Delete') {
    // check the token
    $badToken = true;
    if (!isset($_POST['token']) 
    || !isset($_SESSION['token']) 
    || empty($_POST['token']) 
    || $_POST['token'] !== $_SESSION['token']) {
      $results = array('','Sorry, go back and try again. There was a security issue.');
      $badToken = true;
    } else {
      $badToken = false;
      unset($_SESSION['token']);
      
      // Delete the Category from the table
      $results = Category::deleteRecord((int) $_POST['cat_id']);
    }
  }
  return $results;
}

function maintLot() {
  $results = '';
  if (isset($_POST['save']) AND $_POST['save'] == 'Save') {
    // check the token
    $badToken = true;
    if (!isset($_POST['token']) 
      || !isset($_SESSION['token']) 
      || empty($_POST['token']) 
      || $_POST['token'] !== $_SESSION['token']) {
      $results = array('','Sorry, go back and try again. 
        There was a security issue.');
      $badToken = true;
    } else {
      $badToken = false;
      unset($_SESSION['token']);
      // Put the sanitized variables in an associative array 
      // Use the FILTER_FLAG_NO_ENCODE_QUOTES
      // to allow quotes in the description
      $item  = array ('lot_id' => (int) $_POST['lot_id'],
        'lot_name' => filter_input(INPUT_POST,'lot_name', 
          FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES),
        'lot_description' => filter_input(INPUT_POST,'lot_description', 
          FILTER_SANITIZE_STRING,FILTER_FLAG_NO_ENCODE_QUOTES),
        'lot_image' => filter_input(INPUT_POST,'lot_image', 
          FILTER_SANITIZE_STRING),
        'lot_number' => (int) $_POST['lot_number'],
        'lot_price'	=> filter_input(INPUT_POST,'lot_price', 
          FILTER_SANITIZE_NUMBER_FLOAT,FILTER_FLAG_ALLOW_FRACTION),
        'cat_id' => (int) $_POST['cat_id']     
      );
              
      // Set up a Lot object based on the posts
      $lot = new Lot($item);
      if ($lot->getLot_id()) {
         $results = $lot->editRecord();
      } else {
         $results = $lot->addRecord();
      }
    }
  }
  return $results;
}

function deleteLot() {
  $results = '';
  if (isset($_POST['delete']) AND $_POST['delete'] == 'Delete') {
    // check the token
    $badToken = true;
    if (!isset($_POST['token']) 
    || !isset($_SESSION['token']) 
    || empty($_POST['token']) 
    || $_POST['token'] !== $_SESSION['token']) {
      $results = array('','Sorry, go back and try again. There was a security issue.');
      $badToken = true;
    } else {
      $badToken = false;
      unset($_SESSION['token']);
      
      // Delete the Lot from the table
      $results = Lot::deleteRecord((int) $_POST['lot_id']);
    }
  }
  return $results;
}