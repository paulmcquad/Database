<?php
echo '<p>Original date/time: ' . date('l, F j, Y g:ia T') . '</p>';
$myTime = time() + (60 * 60 * 24 * 7);
echo '<p>New date/time in different formats: </p>';
echo date('c', $myTime) . '<br />';
echo date('m/d/Y', $myTime) . '<br />';
echo date('l, F j, Y', $myTime) . '<br />';
echo date('l g:ia T', $myTime) . '<br />';
echo date('h:i a', $myTime) . '<br />';