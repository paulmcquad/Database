<?php
$weather = 'sleeting';

if ($weather == 'snowing' || $weather == 'sleeting' || $weather == 'raining') {
  echo '<p>Something is falling from the sky.</p>';   
} elseif ($weather == 'sunny' || $weather == 'partly sunny') {
    echo '<p>I need my sunglasses.</p>';
  } else {
      echo '<p>The weather is ' . $weather .'.</p>';
    }
