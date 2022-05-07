<?php

namespace App\Services;

/**
 * Performing manipulations related to the provision of discounts on goods and services
 */
class Discount
{
    public function makeDiscountPrice(int $price, int $coefficient, $operator ) : int
    {
        switch ($operator) {
            case '/':
                $price -= $price / $coefficient;
                break;
            case '%':
                $price -= $price * ($coefficient / 100);
                break;
            case '-':
                $price -= $price - $coefficient;
                break;
            default:
                $price = $price;
                break;
        }
        return $price;
    }
}