<?php
class Cellphone
{
  protected $_phoneNumber;
  public $model;
  public $color;

  public function __construct($phoneNumber, $model, $color) {
    $this->_phoneNumber = $phoneNumber;
    $this->model = $model;
    $this->color = $color;
  }
  
  public function getPhoneNumber() {
    return $this->_phoneNumber;
  }
}