<?php
function countFiguresOnFields($figures)
{
    $whiteCount = 0;
    $blackCount = 0;

    foreach ($figures as $figure) {
        $row = $figure[0];
        $col = $figure[1];
        
        if (($row + $col) % 2 == 0) {
            $whiteCount++;
        } else {
            $blackCount++;
        }
    }

    echo "Figures on white fields: $whiteCount\n";
    echo "Figures on black fields: $blackCount\n";
}

$figures = [ [0,0], [0,3], [3,6], [5,7], [2,5], [4,5] ];

countFiguresOnFields($figures);

