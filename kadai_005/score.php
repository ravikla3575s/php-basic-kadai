<?php
function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}
$score = array(80,60,55,40,100,25,80,95,30,0);
echo array_reduce($score, "sum")/count($score);
?>