<?php
$weather = 'sleeting';

if ($weather == 'snowing' OR $weather == 'sleeting' OR $weather == 'raining') {
  echo '<p>Something is falling from the sky.</p>';   
} elseif ($weather == 'sunny' OR $weather == 'partly sunny') {
    echo '<p>I need my sunglasses.</p>';
  } else {
      echo '<p>The weather is ' . $weather .'.</p>';
    }
