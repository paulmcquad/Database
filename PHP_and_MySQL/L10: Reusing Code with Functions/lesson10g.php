<?php
function getCount() { 
  $count++;
  echo "Count: " . $count. "<br />";
}
?>

<h1>Count</h1>
<?php for ($i=0; $i < 5; $i++) : 
  getCount();
endfor; ?>
