<?php
// Создаем пустой массив
$array = array();

// Добавляем в массив пять разных чисел
$array[] = 10;
$array[] = 20;
$array[] = 30;
$array[] = 40;
$array[] = 50;

// Выводим массив с использованием цикла for
echo "Массив чисел: ";
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo $array[$i];
    if ($i < $count - 1) {
        echo ", ";
    }
}
?>