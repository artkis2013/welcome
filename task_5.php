<?php

$a=100000;
$b=200000;

$d=0.08;
for ($i=0;;$i++){
$sum=$a*(1+$d)**$i;
if ($i%3===0){
$d+=0.02;
}
elseif ($sum > $b){
break; 
}
}
var_dump ($sum);
var_dump ($i);