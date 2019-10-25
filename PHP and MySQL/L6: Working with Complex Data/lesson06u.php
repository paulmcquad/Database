<?php
echo date('l, F j, Y', strtotime('12/5/2011')) . '<br />';
echo date('l, F j, Y', strtotime('yesterday', strtotime('12/5/2011'))) . '<br />';
echo date('l, F j, Y', strtotime('yesterday')) . '<br />';
echo date('l, F j, Y', strtotime('now')) . '<br />';
echo date('l, F j, Y', strtotime('Dec 5 2011')) . '<br />';
echo date('l, F j, Y', strtotime('+4 hours')) . '<br />';
echo date('l, F j, Y', strtotime('+1 week')) . '<br />';
echo date('l, F j, Y', strtotime('+2 weeks 1 day 4 hours 10 seconds')) . '<br />';
echo date('l, F j, Y', strtotime('next Tuesday')) . '<br />';
echo date('l, F j, Y', strtotime('last Monday'));