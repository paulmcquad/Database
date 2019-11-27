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

}
