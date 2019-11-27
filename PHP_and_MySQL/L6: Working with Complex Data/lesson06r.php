<?php
echo '<p>Original date/time: ' . strftime('%A, %B %e, %Y %I:%M%p %Z') . '</p>';
$myTime = time() + (60 * 60 * 24 * 7);
echo '<p>New date/time in different formats: </p>';
echo strftime('%c', $myTime) . '<br />';
echo strftime('%m/%e/%Y', $myTime) . '<br />';
echo strftime('%A, %B %e, %Y', $myTime) . '<br />';
echo strftime('%A %I:%M%p %Z', $myTime) . '<br />';
echo strftime('%I:%M %p', $myTime) . '<br />';