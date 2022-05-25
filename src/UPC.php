<?php

namespace SamLittler\UPC;

class UPC
{
    public static function calculate(string $data): int
    {
        // Get all the individual digits
        $digits = str_split($data);

        // Create variables to store sums
        $evenDigitSum = 0;
        $oddDigitSum = 0;

        // For each digit
        // Bear in mind, we start counting from 0, so odd and even operations are swapped here
        for ($i = 0; $i < count($digits); $i++) {
            if ($i % 2 === 0) {
                // If it's even
                $oddDigitSum += $digits[$i];
            } else {
                // If it's odd
                $evenDigitSum += $digits[$i];
            }
        }

        // Multiply the sum of the odd digits by 3
        $oddDigitSumMultiplied = $oddDigitSum * 3;

        // Add the sums together
        $SumOfBoth = $oddDigitSumMultiplied + $evenDigitSum;

        // Get the remainder when divided by 10
        $remainder = $SumOfBoth % 10;

        // If it's not 0, minus it from 10
        if ($remainder !== 0) {
            return 10 - $remainder;
        }

        // Return 0 remainder
        return $remainder;
    }
}
