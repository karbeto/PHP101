<?php
function isWhiteorBlackChessField($row, $column)
{
    $res = $row + $column;
    if($res % 2 == 0)
    {
        echo "Row: $row and $column is White color ";
    }else{
        echo "Row: $row and Column: $column is Black color";
    }
}


$row = 0;
$col = 6;

isWhiteorBlackChessField($row, $col);