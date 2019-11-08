
<?php

/*
Задача 2
Дана матрица из 0, 1. Единички  по горизонтали и вертикали соединяются и образуют островки, написать функцию которая вернет количество островков.
01001
01100
00011
00010
В приведенном примере 3 островка.
*/

$data = [
    [0, 1, 0, 0, 1],
    [0, 1, 1, 0, 0],
    [0, 0, 0, 1, 1],
    [0, 0, 0, 1, 0],
];

$count = countElements($data);
echo 'count islands: ' . $count;

function countElements($array) {
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array[$i]); $j++) {
            if ($array[$i][$j] === 1) {
                $array = deletedElement($array, $i, $j);
                $count++;
            }
        }
    }
    return $count;
}

function deletedElement($array, $a, $b) {
    if (isset($array[$a][$b]) && $array[$a][$b] === 1) {
        $array[$a][$b] = 0;
        $array = deletedElement($array, $a + 1, $b);
        $array = deletedElement($array, $a - 1, $b);
        $array = deletedElement($array, $a, $b + 1);
        $array = deletedElement($array, $a, $b - 1);
    }
    return $array;
}
