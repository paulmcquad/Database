<?php
/**
 * contact.php
 *
 * Contact class file
 *
 * @version  1.2 2011-02-03
 * @package  Smithside Auctions
 * @copyright  Copyright (c) 2011 Smithside Auctions
 * @license  GNU General Public License
 * @since    Since Release 1.0
 */
/**
 * Contact class
 *
 * @package  Smithside Auctions
 */
class Contact
{
  /**
   * ID
   * @var int
   */
  protected $id;
  
  /**
   * First name
   * @var string
   */
  protected $first_name;
  
  /**
   * Last Name
   * @var String
   */
  protected $last_name;
  
  /**
   * Position in the company.
   * @var string
   */
  protected $position;
  
  /**
   * Email
   * @var string
   */
  protected $email;
  
  /**
   * Phone number, formatted in string
   * @var string
   */
  protected $phone;
  
  /**
   * User name
   * @var string
   */
  protected $user_name;
  
  /**
   * Password
   * @var string
   */
  protected $password;
  
  
  /**
   * Access level
   * @var string
   */
  protected $access;

  /**
   * Initialize the Contact with first name, last name, position
   * email, and phone
   * @param array
   */
  public function __construct($input = false) {
  if (is_array($input)) {
    foreach ($input as $key => $val) {
    // Note the $key instead of key. 
    // This will give the value in $key instead of 'key' itself
    $this->$key = $val;
    }
  }
  }
  
  /**
   * Return ID
   * @return int
   */
  public function getId() {
  return $this->id;
  }
  
  /**
   * Return First Name
   * @return string
   */
  public function getFirst_name() {
  return $this->first_name;
  }
  
  /**
   * Return Last Name
   * @return string
   */
  public function getLast_name() {
  return $this->last_name;
  }
  
  /**
   * Return Position
   * @return string
   */
  public function getPosition() {
  return $this->position;
  }
  
  /**
   * Return Email
   * @return string
   */
  public function getEmail() {
  return $this->email;
  }
  
  /**
   * Return Phone
   * @return string
   */
  public function getPhone() {
  return $this->phone;
  }
  
  /**
   * Return User Name
   * @return string
   */
  public function getUser_name() {
  return $this->user_name;
  }
  
  /**
   * Return Access
   * @return string
   */
  public function getAccess() {
  return $this->access;
  }
  
  /**
   * Creates a full name by concatenating first and last names
   * @return string
   */
  public function name() {
   $name = $this->first_name . ' ' . $this->last_name;
   return $name;
  }
  
  protected function _verifyInput() {
  $error = false; 
  if (!trim($this->first_name)) {
    $error = true;
  } 
  if (!trim($this->last_name)) {
    $error = true;
  }
  if (!trim($this->user_name)) {
     $error = true;
  } elseif (strlen(trim($this->user_name)) < 6) {
     $error = true;
  } 
  $password1 = trim($_POST['password1']);
  if ($password1) {
    if ($password1 != trim($_POST['password2'])) {
      $error = true;
    } elseif (strlen($password1) < 6) {
        $error = true;
    }
  }

  if ($error) {
    return false;
  } else {
    return true;
  }
  }

  public function addRecord() {
  
    // Verify the fields
    if ($this->_verifyInput()) {
      // prepare for the encrypted password
        $password = trim($_POST['password1']);
      
      // Get the Database connection
      $connection = Database::getConnection();
      
      // Prepare the data 
      $query = "INSERT INTO contacts(first_name, last_name, position, email, phone) 
      VALUES ('" . Database::prep($this->first_name) . "',
       '" . Database::prep($this->last_name) . "',
       '" . Database::prep($this->position) . "',
       '" . Database::prep($this->email) . "',
       '" . Database::prep($this->phone) . "')";
      // Run the MySQL statement 
      if ($connection->query($query)) { // this inserts the row
        // update with the user name and password now that you know the id
        $query = "UPDATE contacts 
        SET user_name = '" . Database::prep($this->user_name) . "', 
        password = '" . hash_hmac('sha512',
          $password . '!hi#HUde9' . mysql_insert_id(), 
          SITE_KEY) ."',
        access = '" . Database::prep($this->access) . "'";
        if ($connection->query($query)) { // this updates the row
          $return = array('', 'Contact Record successfully added.', '');   
          // add success message
          return $return;
        } else {
          // send fail message 
            $return = array('', 'User name/password not added to contact.', '');
            return $return;
        }

      } else {
      // send fail message and return to contactmaint
      $return = array('contactmaint', 'No Contact Record Added. Unable to create record.', '0');
      return $return;
      }
    } else {
      // send fail message and return to contactmaint
      $return = array('contactmaint', 'No Contact Record Added. Missing required information
       or the passwords do not match or are too short.', '0');
      return $return;
    }
  
  }
  
  static function getContacts() {
    // clear the results
    $items = '';
    // Get the connection  
    $connection = Database::getConnection();
    // Set up query
    $query = 'SELECT * FROM `contacts` ORDER BY first_name, last_name';
    // Run the query
    $result_obj = '';
    $result_obj = $connection->query($query);
    // Loop through the results, 
    // passing them to a new version of this class, 
    // and making a regular array of the objects
    try {  
      while($result = $result_obj->fetch_object('Contact')) {
        $items[]= $result;
      }
      // pass back the results
      return($items);
    }
    
    catch(Exception $e) {
      return false;
    }  
  }
  
  public function editRecord() {
    // Verify the fields
    if ($this->_verifyInput()) {
      
      // Get the Database connection
      $connection = Database::getConnection();

      // Update with a password changed
      if (trim($_POST['password1'])) {
        // prepare the encrypted password
        $hash_password = hash_hmac('sha512', 
          trim($_POST['password1']) . '!hi#HUde9' . $this->id, 
          SITE_KEY);
        // Set up the prepared statement
        $query = 'UPDATE `contacts` SET first_name=?, last_name=?, 
          position=?, email=?, phone=?, 
          user_name=?, password=?, access=? 
          WHERE id=?';
        $statement = $connection->prepare($query);
        // bind the parameters
        $statement->bind_param('ssssssssi',$this->first_name, $this->last_name, 
          $this->position, $this->email, $this->phone, 
          $this->user_name, $hash_password, $this->access, 
          $this->id);  
      } else {
        // update without a password changed
        // Set up the prepared statement
        $query = 'UPDATE `contacts` SET first_name=?, last_name=?,
          position=?, email=?, phone=?,
          user_name=?, access=? 
          WHERE id=?';
        $statement = $connection->prepare($query);
        // bind the parameters
        $statement->bind_param('sssssssi',$this->first_name, $this->last_name, 
          $this->position, $this->email, $this->phone, 
          $this->user_name, $this->access, 
          $this->id);
      }
      
      if ($statement) {
        $statement->execute();
        $statement->close();
        // add success message
        $return = array('', 'Contact Record successfully updated.');
        return $return;
      } else {
        $return = array('contactmaint', 'Contact Record not updated. Unable to change record.', '');
        return $return;
      }

    } else {
      // send fail message and return to categorymaint
      $return = array('contactmaint', 'Contact Record not updated. Missing required information.', (int) $this->id);
      return $return;
    }
    
  }
  
  public static function getContact($id) {
    // Get the database connection
    $connection = Database::getConnection();
    // Set up the query
    $query = 'SELECT `id`,`first_name`,`last_name`,`position`, `email`, `phone`, `user_name`, `access`
      FROM `contacts` WHERE id="'. (int) $id.'"';
    // Run the MySQL command   
    $result_obj = '';    
      try {
        $result_obj = $connection->query($query);
        if (!$result_obj) {
          throw new Exception($connection->error);
        } else {
          $item = $result_obj->fetch_object('Contact');
          if (!$item) {
            throw new Exception($connection->error);
          } else {
            // pass back the results
            return($item);
          }
        }
      }
      catch(Exception $e) {
        echo $e->getMessage();
      }
  } 

  public static function deleteRecord($id) {
      // Get the Database connection
      $connection = Database::getConnection();     
      // Set up query
      $query = 'DELETE FROM `contacts` WHERE id="'. (int) $id.'"';
      // Run the query
      if ($result = $connection->query($query)) {   
        $return = array('', 'Contact Record successfully deleted.', '');
        return $return;
      } else {
        $return = array('contactdelete', 'Unable to delete Contact.', (int) $id);
        return $return;
      }
  }
  
  public function getAccess_DropDown() {
    // set up first option for selection if none selected
    $option_selected = '';
    if (!$this->access) {
      $option_selected = ' selected="selected"';
    }
    
    // Get the categories
    $items = array('Registered', 'Admin');

    $html  = array();
    
    $html[] = '<label for="access">Choose Access</label><br />';
    $html[] = '<select name="access" id="access">';
    
    foreach ($items as $i=>$item) { 
      // If the selected parameter equals the current category id then flag as selected
      if ($this->access == $item) {
        $option_selected = ' selected="selected"';
      }
      // set up the option line
      $html[]  =  '<option value="' . $item . '"' . $option_selected . '>' . $item . '</option>';
      // clear out the selected option flag
      $option_selected = '';
    }
    
    $html[] = '</select>';
    return implode("\n", $html);      
      
  }

public static function logIn($item) {
  if (!$item['user_name'] || !$item['password']) {
    return array('login','Sorry, invalid User Name and/or Password.');
  }
  // Get the database connection
  $connection = Database::getConnection();
  
  // set up the hash password to compare
  $id = '';
  $query = 'SELECT id FROM `contacts` 
    WHERE user_name="'. $item['user_name'] .'" 
    LIMIT 1';
  // Run the MySQL command   
  $result_obj = '';  
  // Run the MySQL command
  $result_obj = $connection->query($query); 
    while($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
      $id = $result['id'];
    }
  // if user name not found, return with error message
  if (!$id) { // if user name not found, return with error message
    return array('login','Sorry, invalid User Name and/or Password.','');
  } 
  
  $hash_password = hash_hmac('sha512', $item['password'] . '!hi#HUde9' . $id, SITE_KEY);

  // Set up the query
  $query = 'SELECT id, first_name, last_name, user_name, access 
    FROM `contacts` 
    WHERE user_name="'. $item['user_name'] .'" 
    AND password = "' . $hash_password . '" 
    LIMIT 1';
  // Run the MySQL command   
  $result_obj = '';  
  // Run the MySQL command
  $result_obj = $connection->query($query);  
  try { 
    while ($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
      // pass back the results
      $_SESSION['user_id'] = $result['id'];
      $_SESSION['first_name'] = $result['first_name'];
      $_SESSION['last_name'] = $result['last_name'];
      $_SESSION['user_name'] = $result['user_name'];
      $_SESSION['access'] = $result['access'];
      return array('',"Welcome, {$_SESSION['first_name']}", '');
     }
     return array('login','Sorry, invalid User Name and/or Password.','');
  }
  catch(Exception $e)
    {
      return false;
    }    
}

  public static function logout() {  
    unset($_SESSION['user_id']);
    unset($_SESSION['first_name']);
    unset($_SESSION['last_name']);
    unset($_SESSION['user_name']);
    unset($_SESSION['access']);  
  }    
  
  public static function isLoggedIn() {  
    if (isset($_SESSION['user_id'])) {
      return true;
    } else {
      return false;
    }
  }  

  public static function accessLevel() {  
    if (isset($_SESSION['access'])) {
      return $_SESSION['access'];
    } else {
      return false;
    }
  }
  
}
