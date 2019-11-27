<?php
$state = 'MA';

switch ($state) {
case 'ME':
case 'VT':
case 'NH':
  echo "<p>Northern New England</p>";
  break;
case 'CT':
case 'MA':
case 'RI':
  echo "<p>Southern New England</p>";
  break;
default:
  echo "<p>$state is not in New England.</p>";
}
