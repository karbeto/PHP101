<?php
function countStringCharacterTypes(String $string): array
{
    $result = [
        'smallLetters' => 0,
        'capitalLetters' => 0,
        'emptySpaces' => 0,
        'interpunctionSigns' => 0,
    ];

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];

        if (ctype_lower($char)) {
            $result['smallLetters']++;
        } elseif (ctype_upper($char)) {
            $result['capitalLetters']++;
        } elseif (ctype_space($char)) {
            $result['emptySpaces']++;
        } elseif (ctype_punct($char)) {
            $result['interpunctionSigns']++;
        }
    }

    return $result;
}

$resultArray = countStringCharacterTypes("Lorem Ipsum, DoLOR sit AmEt!");

print_r($resultArray);