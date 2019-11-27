<?php
$b = 3;
$c = 0;
$d = '0';
$e = 'xyz3';

if ($c != 0) {
  echo $b/$c . '<br />';
} else {
  trigger_error('The value of $c is ' . $c .'. You cannot divide by it ', E_USER_NOTICE);
}

if ($d != 0) {
  echo $b/$d . '<br />';
} else {
  trigger_error('The value of $d is ' . $d .'. You cannot divide by it ', E_USER_WARNING);
}

if ($e != 0) {
  echo $b/$e . '<br />';
} else {
  trigger_error('The value of $e is ' . $e .'. You cannot divide by it ', E_USER_ERROR);
}

echo 'You will never see this because E_USER_ERROR stops the program';
