<?php

function getSmallestWordLength(string $sentence): int
{
    $words = explode(" ", $sentence);
    $wordsCount = count($words);

    $minLength = strlen($words[0]);
    for ($i = 1; $i < $wordsCount; $i++) {
        $wordsLength = strlen($words[$i]);
        if ($wordsLength < $minLength) {
            $minLength = $wordsLength;
        }
    }
    return $minLength;
}


$sentence = "turns out random test cases are easier than writing out basic ones";

echo getSmallestWordLength($sentence) . PHP_EOL;
