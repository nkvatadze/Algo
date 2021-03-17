<?php

function rangeExtraction(array $arr): string
{
    sort($arr);
    $arrCount = count($arr);
    $result = '';

    for ($i = 0; $i < $arrCount; $i++) {
        $count = 0;
        for ($j = $i + 1; $j < $arrCount; $j++) {
            if (abs($arr[$j - 1] - $arr[$j]) == 1) {
                $count++;
            } else if ($count > 2) {
                $result .= $arr[$i] . '-' . $arr[$j - 1] . ',';
                $i = $j;
                $count = 1;
                continue;
            } else {
                for (; $i < $j; $i++) {
                    $result .= $arr[$i] . ',';
                }
            }
        }
    }
    return $result;
}

echo rangeExtraction([-6, -3, -2, -1, 0, 1, 3, 4, 5, 7, 8, 9, 10, 11, 14, 15, 17, 18, 19, 20, 22]) . PHP_EOL;