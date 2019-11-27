<?php
class Database
{
  private static $_mysqlUser = 'root';
  private static $_mysqlPass = 'gamer';
  private static $_mysqlDb = 'smithside';
  private static $_hostName = 'localhost';
  protected static $_connection = NULL;
  
  public static function getConnection() {
    if (!self::$_connection) {
      self::$_connection = new mysqli(self::$_hostName, self::$_mysqlUser, self::$_mysqlPass, self::$_mysqlDb);
      if (self::$_connection->connect_error) {
        die('Connect Error: ' . self::$_connection->connect_error);
      } 
    }
    return self::$_connection;
  }
}
