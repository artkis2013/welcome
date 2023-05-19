<?php

$supportedOperators = ['+','-','*'];

function calculateOperation (int $a, int $b, string $operation = '+') : int
{
    if ($operation == '+') {
        return $a + $b;
    } elseif ($operation == '-') {
        return $a - $b;
    } elseif ($operation == '*') {
        return $a * $b;
    }
}
function parseOperator ($userInput, $operator){
    $parseResult = explode ($operator, $userInput);
    if ($parseResult && count($parseResult) == 2){
        return ['operators => $parseResult', 'operator'=> $operator];
    }
    return false;
}

do {
    $userInput = readline ('введите выражение:');

    foreach ($supportedOperators as $operator)
    $parseResult = parseOperator ($operator,$userInput);
    if ($parseResult){
        echo 'Результат = '. calculateOperation (intval ($parseResult['operators'][0]), intval($parseResult['operators'][1]), $parseResult ['operators']);
    }
    
}while (true);