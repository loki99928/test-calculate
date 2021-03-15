<?php
require __DIR__ .  '/vendor/autoload.php';

use liw\Classes\Calculate;

$calc = new Calculate();
try {
    $division = $calc->getArithmetic('*');
    $result = $division->arithmeticOperations(3, 2);
    var_dump($result);
} catch (Exception $e) {
   echo $e;
}
