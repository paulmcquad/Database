<?php
class Smartphone extends Cellphone
{
  public $apps;

  public function __construct($phoneNumber, $model, $color, $apps) {
    $this->_phoneNumber = $phoneNumber;
    $this->model = $model;
    $this->color = $color;
    $this->apps = is_array($apps) ? $apps : array($apps);
  }
  
  public function displayApps() {
    $result = '<ul>';
    foreach ($this->apps as $key=>$app) {
      $result .=  '<li>' . ($key + 1)  . ' - ' . $app . '</li>'; 
    }
    $result .= '</ul>';
    return $result;
  }
}