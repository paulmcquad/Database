<?php
function customError($errno, $errstr,$errfile,$errline,$errcontext) {
  echo "Sorry, error number $errno has occurred. 
  This is the description of the error: $errstr<br />"; 
  echo '<pre>';
  print_r($errcontext);
  echo '</pre>';
  die();
} 
set_error_handler("customError"); 
echo 'here <br />';
$a = 0;
echo 15/$a;
//customError(256,'Some problem');
  
  