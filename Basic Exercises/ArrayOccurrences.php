<?php
function getEachElementOccurrences($arr){
    $occurencyArray = [];

    foreach($arr as $n)
    {
        if (isset($occurencyArray[$n])) {
            $occurencyArray[$n]++;
        } else {
            $occurencyArray[$n] = 1;
        }
    }
    return $occurencyArray;
}

$numbers = [];

for($i=0; $i<=100; $i++)
{
    $numbers[] = rand(1, 10);
}

print_r( getEachElementOccurrences($numbers));
