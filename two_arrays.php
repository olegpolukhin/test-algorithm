<?php
/*
Задача 1
Даны два неубывающих массива a(k), b(m) написать функцию которая вернет объединенный неубывающий массив. Нельзя использовать встроенные функции работы с массивами, sort, array_merge  и другие. Нельзя использовать алгоритмы сортировки.
[-1,2,3,3,4,5]
[0,2,2,3,6,6,7,99]
*/

$A = [-1,2,3,3,4,5];
$B = [0,2,2,3,6,6,7,99];
$C = [];

$indxA = 0;
$indxB = 0; 

while ($indxA < count($A) || $indxB < count($B)) {
    if (!isset($A[$indxA])) {
        $C[] = $B[$indxB];
        $indxB++;
    } else if(!isset($B[$indxB])) {
        $C[] = $A[$indxA];
        $indxA++;
    } else if ($A[$indxA] > $B[$indxB]) {
        $C[] = $B[$indxB];
        $indxB++;
    } else {
        $C[] = $A[$indxA];
        $indxA++;
    }
}
echo implode(', ', $C);