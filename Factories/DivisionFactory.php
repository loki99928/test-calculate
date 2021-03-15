<?php


namespace liw\Factories;


use liw\Interfaces\CalculateInterface;

class DivisionFactory  implements CalculateInterface
{
    /**
     * Обработка операции деления
     *
     * @param $a integer
     * @param $b integer
     *
     * @return integer
     */
    public function arithmeticOperations(int $a, int $b) : int
    {
        return $a / $b;
    }
}