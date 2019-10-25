<?php
$city = 'Springfield';
$state = 'MA';

if ($city == 'Springfield' AND ($state == 'MA' OR $state =='VT')) {
  echo "<p>This Springfield is in Massachusetts or Vermont.</p>";   
} else {
  echo "<p>$city, $state is not Springfield in MA or VT.</p>";
}
