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

/**
 * Auto load the class files
 * @param string $class_name
 */
function __autoload($class_name) {
  require_once 'includes/classes/' . strtolower($class_name) . '.php';
}
 
// include required files
require_once 'includes/functions.php';