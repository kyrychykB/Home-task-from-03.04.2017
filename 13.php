<?php
// distance in km
$s = 500;

//time in hours
$t = 7;

//speed in km/h
$v = $s / $t;
echo 'speed in km/h:&nbsp;' . $v . '<br/>';

//speed in m/s
define ('KILOMETR', 1000);
define ('HOUR', 3600);
$v = ($s*KILOMETR) / ($t*HOUR);
echo 'speed in m/s:&nbsp;' . $v . '<br/>';