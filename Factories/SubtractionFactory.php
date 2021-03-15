<?php


namespace liw\Factories;


use liw\Interfaces\CalculateInterface;

class SubtractionFactory implements CalculateInterface
{
    /**
     * Обработка операции вычитания
     *
     * @param $a integer
     * @param $b integer
     *
     * @return integer
     */
    public function arithmeticOperations(int $a, int $b) : int
    {
        return $a - $b;
    }
}