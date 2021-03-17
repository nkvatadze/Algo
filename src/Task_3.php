<?php

function changeCharactersInString(string $str): string
{
    $associativeArr = [];
    $strLength = strlen($str);
    for ($i = 0; $i < $strLength; $i++) {
        if (isset($associativeArr[strtolower($str[$i])])) {
            $associativeArr[strtolower($str[$i])] += 1;
        } else {
            $associativeArr[strtolower($str[$i])] = 1;
        }
    }

    $result = '';
    for ($i = 0; $i < $strLength; $i++) {
        $result .= $associativeArr[strtolower($str[$i])] > 1 ? ')' : '(';
    }
    return $result;
}

echo changeCharactersInString('(( @') . PHP_EOL;