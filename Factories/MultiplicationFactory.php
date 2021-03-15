<?php


namespace liw\Factories;


use liw\Interfaces\CalculateInterface;

class MultiplicationFactory implements CalculateInterface
{
    /**
     * Обработка операции умножения
     *
     * @param $a integer
     * @param $b integer
     *
     * @return integer
     */
    public function arithmeticOperations(int $a, int $b) : int
    {
        return $a * $b;
    }
}