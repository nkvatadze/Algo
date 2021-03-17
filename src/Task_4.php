<?php

function expanseString(string $str): string
{
    $strLength = strlen($str);
    $multiplier = 0;
    $chars = '';
    for ($i = 0; $i < $strLength; $i++) {
        if (is_numeric($str[$i])) {
            if ($multiplier > 1) {
                $chars .= expanseString(substr($str, $i, $strLength));
                break;
            } else {
                $multiplier = $str[$i];
            }
        } elseif (ctype_alpha($str[$i])) {
            $chars .= $str[$i];
        }
    }
    return str_repeat($chars, $multiplier);
}

echo expanseString('3(a2(b))') . PHP_EOL;