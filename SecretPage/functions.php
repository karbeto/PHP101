<?php

function checkLetterDistance($word, $secret) {
    $lastPos = -1;
    for ($i = 0; $i < strlen($secret); $i++) {
        $pos = strpos($word, $secret[$i], $lastPos + 1);  

        if ($pos === false) {
            return false;  
        }

        if ($lastPos !== -1 && $pos - $lastPos < 10) {
            return false;  
        }

        $lastPos = $pos;  
    }

    return true;
}

function isPerfectSquare($text) {
    $number = strlen(trim($text));

    $sqrt = sqrt($number);
    return $sqrt == floor($sqrt);
}

function checkPasswordInMatrix($inputText, $secret) {
    $inputText = trim($inputText);
    $length = strlen($inputText);

    $matrixSize = sqrt($length);
    
    if ($matrixSize != floor($matrixSize)) {
        return false; 
    }

    $matrix = [];
    for ($i = 0; $i < $matrixSize; $i++) {
        $row = [];
        for ($j = 0; $j < $matrixSize; $j++) {
            $row[] = substr($inputText, $i * $matrixSize + $j, 1);
        }
        $matrix[] = $row;
    }

    $diagonal = '';
    for ($i = 0; $i < $matrixSize; $i++) {
        $diagonal .= $matrix[$i][$i]; 
    }
    
    return strpos(strtolower($diagonal), trim(strtolower($secret))) !== false;
}


