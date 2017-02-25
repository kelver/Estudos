<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 25/02/17
 * Time: 01:30
 */

$input = array(34,22,17,18,14,13,22,25);
$filtro = function($age){
    return ($age >= 18);
};

//$output = array_filter($input, $filtro); ou
$output = array_filter($input, function($age){
    return ($age >= 18);
});
print_r($output);