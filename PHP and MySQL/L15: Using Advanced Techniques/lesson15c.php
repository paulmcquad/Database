<?php
function __autoload($class_name) {
  require_once strtolower($class_name) . '.php';
}