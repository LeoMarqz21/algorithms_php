<?php

 function draw(int $spaces = 0, string $symbol = "#", int $length = 0):string
 {
    $draw = "";
    if($length == 0)
        return null;
    if($spaces >= 0 && $length > 0)
    {
        for($i=0; $i < $length; $i++)
        {
            if($i < $spaces) $draw .= " ";
            else $draw .= $symbol;
        }
    }
    return $draw;
 }

function staircase(int $n):mixed
{
    if($n > 100) return null;
    $stair = null;
    if($n != 0)
    {
        for($i=1; $i <= $n; $i++)
        {
            $spaces = ($n - $i);
            $stair .= draw($spaces, "#", $n) . "\n"; 
        }
    } 
    if($stair != null) nl2br($stair);
    return $stair;
}

$n = intval(trim(fgets(STDIN)));
echo staircase($n);
