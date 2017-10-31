<?php

namespace SamLittler\UPC;

class UPC
{
    public static function calculate($data)
    {
        if (!is_string($data)) {
            throw new \InvalidArgumentException('Data with value "' . $data . '" is not a string.');
        }

        // Get all the individual digits
        $digits = str_split($data);

        // Create variables to store sums
        $even_digit_sum = 0;
        $odd_digit_sum = 0;

        // For each digit
        // Bear in mind, we start counting from 0, so odd and even operations are swapped here
        for ($i = 0; $i < count($digits); $i++) {
            if ($i % 2 === 0) {
                // If it's even
                $odd_digit_sum += $digits[$i];
            } else {
                // If it's odd
                $even_digit_sum += $digits[$i];
            }
        }

        // Multiply the sum of the odd digits by 3
        $odd_digit_sum_multiplied = $odd_digit_sum * 3;

        // Add the sums together
        $sum_of_both = $odd_digit_sum_multiplied + $even_digit_sum;

        // Get the remainder when divided by 10
        $remainder = $sum_of_both % 10;

        // If it's not 0, minus it from 10
        if ($remainder !== 0) {
            return 10 - $remainder;
        }

        // Return 0 remainder
        return $remainder;
    }
}
