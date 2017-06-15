<?php


$input = array (22, 34, 63, 85, 41, 85, 62);
$filtro = function (int $a){
    return ($a >= 18);
};


$output = array_filter($input, $filtro);

var_dump($output);





