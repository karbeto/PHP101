<?php
function findPerfectNumbers($number)
{
    $perfectNumbers = [];

    for ($i = 1; $i < $number; $i++) {
        $sum = 0;

        for ($j = 1; $j <= $i / 2; $j++) {
            if ($i % $j === 0) {
                $sum += $j;
            }
        }

        if ($sum === $i) {
            $perfectNumbers[] = $i;
        }
    }
    return $perfectNumbers;
}


$number = 10000;

print_r(findPerfectNumbers($number));