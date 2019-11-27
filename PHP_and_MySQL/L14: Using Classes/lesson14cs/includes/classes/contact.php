<?php
/**
 * contact.php
 *
 * Contact class file
 *
 * @version    1.2 2011-02-03
 * @package    Smithside Auctions
 * @copyright  Copyright (c) 2011 Smithside Auctions
 * @license    GNU General Public License
 * @since      Since Release 1.0
 */
/**
 * Contact class
 *
 * @package    Smithside Auctions
 */
class Contact
{
  /**
   * First name
   * @var string
   */
  public $first_name;
  /**
   * Last Name
   * @var String
   */
  public $last_name;
  /**
   * Position in the company.
   * @var string
   */
  public $position;
  /**
   * Email
   * @var string
   */
  public $email;
  /**
   * Phone number, formatted in string
   * @var string
   */
  public $phone;

  /**
   * Creates a full name by concatenating first and last names
   * @return string
   */
  public function name() {
	$name = $this->first_name . ' ' . $this->last_name;
	return $name;
  }
}
