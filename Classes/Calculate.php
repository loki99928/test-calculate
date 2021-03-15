<?php
namespace liw\Classes;

use liw\Interfaces\CalculateInterface;
use liw\Factories\AdditionFactory;
use liw\Factories\SubtractionFactory;
use liw\Factories\MultiplicationFactory;
use liw\Factories\DivisionFactory;

/**
 *  Class  Calculate
 *
 * Реализация через абстрактную фабрику
 */
class Calculate
{
    /**
     * @param string $type
     *
     * @return CalculateInterface
     * @throws \Exception
     */
    public function getArithmetic(string $type): CalculateInterface
    {
        switch ($type) {
            case '+':
                $arithmetic = new AdditionFactory();
                break;

            case '-':
                $arithmetic = new SubtractionFactory();
                break;

            case '*':
                $arithmetic = new MultiplicationFactory();
                break;

            case '/':
                $arithmetic = new DivisionFactory();
                break;

            default:
                throw new \Exception("Неизвестный тип операции [{$type}]" );
        }
        return $arithmetic;
    }
}