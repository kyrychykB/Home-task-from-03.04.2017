<?php
$age = 60;
$isInt = is_int($age);

if ($age >= 18 && $age <= 59 && $isInt) {
    echo "Вам еще работать и работать";
} elseif($age > 59 && $isInt) {
    echo "Вам пора на пенсию";
} elseif ($age >= 0 && $age <= 17 && $isInt){
    echo "Вам еще рано работать";
} else {
    echo "Неизвестный возраст";
}