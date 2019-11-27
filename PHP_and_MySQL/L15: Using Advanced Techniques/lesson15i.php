<?php
class Converter
{
  
  public function convertFtoC($temperature) {
    $celsius = ($temperature - 32)* (5/9);
    $result = $this->_formatDeg($temperature) . ' Fahrenheit is equal to '
      . $this->_formatDeg($celsius) . ' Celsius.';
    return $result;
  }

  public function convertCtoF($temperature) {
    $fahren = $temperature * (9/5) + 32;
    $result = $this->_formatDeg($temperature) . ' Celsius is equal to '
      . $this->_formatDeg($fahren) . ' Fahrenheit.';
    return $result;
  }

  private function _formatDeg($number) {
    if (is_numeric($number)) {
      return number_format($number, 1) . '&deg;';
    } else {
      return 0 . '&deg;';
    }
  }

} // end of class

// script to use the class
$newTemp = new Converter;
echo $newTemp->convertFtoC(70);