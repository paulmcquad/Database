<?php
/**
 * category.php
 *
 * Category class file
 *
 * @version    1.2 2011-02-03
 * @package    Smithside Auctions
 * @copyright  Copyright (c) 2011 Smithside Auctions
 * @license    GNU General Public License
 * @since      Since Release 1.0
 */
/**
 * Category class
 *
 * @package    Smithside Auctions
 */
class Category
{
  /**
   * Category ID
   * @var int
   */
  protected $cat_id;
  
  /**
   * Category Name
   * @var string
   */
  protected $cat_name;
  
  /**
   * Category Description
   * @var string
   */
  protected $cat_description;
  
  /**
   * Category Image path
   * @var string
   */
  protected $cat_image;

  /**
   * Initialize the Item
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
   * Return Category ID
   * @return int
   */
  public function getCat_id() {
    return $this->cat_id;
  }
  
  /**
   * Return Category Name
   * @return string
   */
  public function getCat_name() {
    return $this->cat_name;
  }
  
  /**
   * Return Category Description
   * @return string
   */
  public function getCat_description() {
    return $this->cat_description;
  }
  
  /**
   * Return Category Image path
   * @return string
   */
  public function getCat_image() {
    return $this->cat_image;
  }

  protected function _verifyInput() {
    $error = false; 
    if (!trim($this->cat_name)) {
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
      $query = "INSERT INTO categories(cat_name, cat_description, cat_image) 
        VALUES ('" . Database::prep($this->cat_name) . "',
         '" . Database::prep($this->cat_description) ."',
         '" . Database::prep($this->cat_image) . "')";
      
      // Run the MySQL statement
      if ($connection->query($query)) {
        $return = array('', 'Category Record successfully added.');
    
        // add success message
        return $return;
      } else {
        // send fail message and return to categorymaint
      $return = array('contactmaint', 'No Category Record Added. Unable to create record.');
      return $return;
      }
    } else {
      // send fail message and return to categorymaint
      $return = array('categorymaint', 'No Category Record Added. Missing required information.');
      return $return;
    }
    
  }  

  static public function getCategories() {
    // clear the results
    $items = '';
    // Get the connection 
    $connection = Database::getConnection();
    // Set up the query
    $query = 'SELECT * FROM `categories` ORDER BY cat_name';
  
   // Run the query
    $result_obj = '';
    $result_obj = $connection->query($query);
    // Loop through getting associative arrays, 
    // passing them to a new version of this class, 
    // and making a regular array of the objects
    try {  
      while($result = $result_obj->fetch_array(MYSQLI_ASSOC)) {
        $items[]= new Category($result);
      }
      // pass back the results
        return($items);
    }
    
    catch(Exception $e) {
      return false;
    }
  
  }
  

}
