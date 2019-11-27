<?php
/**
 * cellphone.php
 * 
 * Cellphone class file
 *
 * @version    1.2 2011-02-03
 * @package    Example
 * @copyright  Copyright (c) 2011 Myself
 * @license    GNU General Public License
 * @since      Since Release 1.0
 */
/**
 * Cellphone class
 *
 * @package    Example
 */
class Cellphone
{
  /**
   * The phone number of this cell phone
   * @var string
   */
  public $phoneNumber;
  /**
   * The model number
   * @var string
   */
  public $model;
  /**
   * The color of the phone, using an id from the color file
   * @var int
   */
  public $color;
  /**
   * Assoc. Array with contact name as the key, the phone number as the value
   * @var array
   */
  public $contacts;
  /**
   * Array with filenames of song mp3 files
   * @var array
   */
  public $songs;
  
  /**
   * Create a new Contact
   * @param string $number
   * @param string $name
   */
  public function addContact($number, $name) {
    $this->contacts[$name] = $number;
  }
  
  /**
   * Add an array mp3 filename to the Songs array,
   * if it isn't an array, then just add the single song
   * @param array|string $songs
   */
  public function addSongs($songs) {
    if (is_array($songs)) {
      foreach ($songs as $song) {
        $this->songs[] = $song;
      }
    } else {
      $this->songs[] = $songs;
    }
  }
  
  /**
   * Display a list of the Contacts
   */
  public function displayContacts() { 
    foreach ($this->contacts as $name=>$number) {
      echo  $name . ' - ' . $number . '<br />'; 
    }
  }

  /**
   * Create a new contact and then display all the contacts
   * @param string $newname
   * @param string $newnumber
   */
  public function addThenDisplayContacts($newname, $newnumber) {
    $this->addContacts($newnumber, $newname);
    $this->displayContacts(); 
  }
  
  /**
   * Count the songs
   * @return int
   */
  public function countSongs() {
    $result = count($this->songs);
    return $result;  
  }
  
}
