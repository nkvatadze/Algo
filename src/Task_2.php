<?php

function getElementsNumberRecursively(array $data): int
{
    $sum = 0;
    $arrCount = count($data);
    for ($i = 0; $i < $arrCount; $i++) {
        $sum++;
        if (is_array($data[$i])) {
            $sum += getElementsNumberRecursively($data[$i]);
        }
    }
    return $sum;
}

echo getElementsNumberRecursively([1, 2, 3, [3, 4, [2]]]) . PHP_EOL;