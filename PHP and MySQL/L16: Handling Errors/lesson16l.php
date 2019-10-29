<?php
$b = 3;
$c = 0;

try {
  if ($c != 0) {
    echo $b/$c . '<br />';
  } else {
    throw new Exception('Divide by Zero');
  }
} catch (Exception $e) {
  echo 'Found an error: ', $e->getMessage();
}

echo '<p>And then the code continues.</p>';