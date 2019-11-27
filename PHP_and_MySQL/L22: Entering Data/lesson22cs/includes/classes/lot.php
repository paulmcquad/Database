<?php
/**
 * lot.php
 *
 * Lot class file
 *
 * @version    1.2 2011-02-03
 * @package    Smithside Auctions
 * @copyright  Copyright (c) 2011 Smithside Auctions
 * @license    GNU General Public License
 * @since      Since Release 1.0
 */
/**
 * Lot class
 *
 * @package    Smithside Auctions
 */
class Lot
{
  /**
   * Lot ID
   * @var int
   */
  protected $lot_id;
  
  /**
   * Lot Name
   * @var string
   */
  protected $lot_name;
  
  /**
   * Lot Description
   * @var string
   */
  protected $lot_description;
  
  /**
   * Lot Image path
   * @var string
   */
  protected $lot_image;
  
  /**
   * Lot Number
   * @var int
   */
  protected $lot_number;
  
  /**
   * Lot Price path
   * @var float
   */
  protected $lot_price;
  
  /**
   * Lot Catalog ID
   * @var int
   */
  protected $cat_id;

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
   * Return Lot ID
   * @return int
   */
  public function getLot_id() {
    return $this->lot_id;
  }
  
  /**
   * Return Lot Name
   * @return string
   */
  public function getLot_name() {
    return $this->lot_name;
  }
  
  /**
   * Return Lot Description
   * @return string
   */
  public function getLot_description() {
    return $this->lot_description;
  }
  
  /**
   * Return Lot Image path
   * @return string
   */
  public function getLot_image() {
    return $this->lot_image;
  }

  /**
   * Return Lot Number
   * @return int
   */
  public function getLot_number() {
    return $this->lot_number;
  }
  
  /**
   * Return Lot Price path
   * @return string
   */
  public function getLot_price() {
    return $this->lot_price;
  }  
  
  /**
   * Return Lot Category ID
   * @return string
   */
  public function getCat_id() {
    return $this->cat_id;
  }

}
