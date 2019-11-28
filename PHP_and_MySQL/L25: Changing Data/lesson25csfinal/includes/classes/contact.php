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
  if ($error) {
    return false;
  } else {
    return true;
  }
  }

  public function addRecord() {
  
    // Verify the fields
if ($this->_verifyInput()) {

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
  if ($connection->query($query)) {
  $return = array('', 'Contact Record successfully added.','');

  // add success message
  return $return;
  } else {
  // send fail message and return to contactmaint
  $return = array('contactmaint', 'No Contact Record Added. Unable to create record.','');
  return $return;
  }
} else {
  // send fail message and return to contactmaint
  $return = array('contactmaint', 'No Contact Record Added. Missing required information.','0');
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
      
      // Set up the prepared statement
      $query = 'UPDATE `contacts` SET first_name=?, last_name=?, position=?, email=?, phone=? WHERE id=?';
      $statement = $connection->prepare($query);
      // bind the parameters
      $statement->bind_param('sssssi',$this->first_name, $this->last_name, $this->position, $this->email, $this->phone, $this->id);
      if ($statement) {
        $statement->execute();
        $statement->close();
        // add success message
        $return = array('', 'Contact Record successfully added.', '');
        return $return;
      } else {
        $return = array('contactmaint', 'No Contact Record Added. Unable to create record.', (int) $this->id);
        return $return;
      }

    } else {
      // send fail message and return to contactmaint
      $return = array('contactmaint', 'No Contact Record Added. Missing required information.', (int) $this->id);
      return $return;
    }
    
  }
  
  public static function getContact($id) {
    // Get the database connection
    $connection = Database::getConnection();
    // Set up the query
    $query = 'SELECT * FROM `contacts` WHERE id="'. (int) $id.'"';
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
  
}
