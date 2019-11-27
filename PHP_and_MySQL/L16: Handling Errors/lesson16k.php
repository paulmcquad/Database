<?php
try {
  // your code goes here that might have an error
  // when you find an error you throw an exception
  // by creating an object in Exception class,
  // passing it the error message
  throw new Exception('Divide by Zero');
} catch (Exception $e) {
  // Here's where you handle the error
  echo 'Found an error:', $e->getMessage();
}