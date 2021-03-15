<?php


namespace liw\Factories;


use liw\Interfaces\CalculateInterface;

class AdditionFactory implements CalculateInterface
{
    /**
     * Обработка операции сложения
     *
     * @param $a integer
     * @param $b integer
     *
     * @return integer
     */
    public function arithmeticOperations(int $a, int $b) : int
    {
        return $a + $b;
    }
}