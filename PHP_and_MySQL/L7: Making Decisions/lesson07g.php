<?php
$weather = 'sleeting';

if ($weather == 'snowing') {
  echo '<p>Something is falling from the sky.</p>';
} elseif ($weather == 'sleeting') {
    echo '<p>Something is falling from the sky.</p>';
  } elseif ($weather == 'raining') {
      echo '<p>Something is falling from the sky.</p>';
    } elseif ($weather == 'sunny') {
        echo '<p>I need my sunglasses.</p>';
      } elseif ($weather == 'partly sunny') {  
          echo '<p>I need my sunglasses.</p>';
      } else {
          echo '<p>The weather is ' . $weather .'.</p>';
        }
