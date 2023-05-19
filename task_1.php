<?php

$summa = 100000;
$maxSumm = 200000;
$percen = 0.08;

for ($i = 1; ;$i++) {
    $sum = $summa * (1 + $percen) **$i;
    if ($sum > $maxSumm) {
        break; 
    } elseif ($i%3 == 0) {
        $percen += 0.02;
    }
}
var_dump ($sum);
var_dump ($i);
var_dump ($percen);