<?php
$a = 5;
$b = 0;
$operator = '/';

if ($operator == '+') {
    echo $a + $b;
} elseif ($operator == '-') {
    echo $a - $b;
} elseif ($operator == '*') {
    echo $a * $b;
} elseif ($operator == '/' && $b != '0') {
    echo $a / $b;
} elseif ($operator == '/' && $b == '0') {
    echo 'на 0 делить нельзя';
}