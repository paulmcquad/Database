<?php
class Converter
{
  
  static public function convertFtoC($temperature) {
    $celsius = ($temperature - 32)* (5/9);
    $result = self::_formatDeg($temperature) . ' Fahrenheit is equal to '
      . self::_formatDeg($celsius) . ' Celsius.';
    return $result;
  }

  static public function convertCtoF($temperature) {
    $fahren = $temperature * (9/5) + 32;
    $result = self::_formatDeg($temperature) . ' Celsius is equal to '
      . self::_formatDeg($fahren) . ' Fahrenheit.';
    return $result;
  }

  static private function _formatDeg($number) {
    if (is_numeric($number)) {
      return number_format($number, 1) . '&deg;';
    } else {
      return 0 . '&deg;';
    }
  }

} // end of class

// script to use the class
echo Converter::convertFtoC(70);