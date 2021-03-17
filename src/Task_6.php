<?php

function snail(array $arr): array
{
    $arrCount = count($arr);

    if (!$arrCount) return [];

    $result = $arr[0];
    $maxElementIndex = count($arr[0]) - 1;

    for ($i = 1; $i <= $maxElementIndex; $i++) {
        $result[] = $arr[$i][$maxElementIndex];
    }

    for ($i = $maxElementIndex - 1; $i >= 0; $i--) {
        $result [] = $arr[$maxElementIndex][$i];
    }

    for ($i = $maxElementIndex - 1; $i > 0; $i--) {
        $result[] = $arr[$i][0];
    }

    for ($i = 1; $i < $maxElementIndex; $i++) {
       $result[] = $arr[1][$i];
    }

    return $result;
}

$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
$result = snail($arr);
foreach ($result as $el) {
    echo $el . ',';
}
echo PHP_EOL;