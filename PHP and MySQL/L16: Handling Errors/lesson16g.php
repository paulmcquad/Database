<?php
$b = 3;
$c = 0;
$d = '0';
$e = 'xyz3';
if ($c != 0) {
  echo $b/$c . '<br />';
} else {
  echo 'Cannot divide by 0. <br />';
}
echo ($c != 0) ? $b/$c : 'Cannot divide by 0.<br />';
echo ($d != 0) ? $b/$d : 'Cannot divide by 0.<br />';
echo ($e != 0) ? $b/$e : 'Cannot divide by 0.<br />';
