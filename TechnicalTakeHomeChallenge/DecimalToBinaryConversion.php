<?php

function decimalToBinary($number) {
    if ($number == 0) {
        return "0";
    }
       
    $binary = "";
    $isNegative = false;

    // Convert negative inputs to their equivalent positive 
    if ($number < 0) {
        $isNegative = true;
        $number = ~$number + 1; // Two's complement rule
    }

    while ($number > 0) {
        $lsb = $number & 1; // Extract the least significant bit (rightmost bit)
        $binary = $lsb . $binary; // Append the lsb to the binary string from the left
        $number = $number >> 1; // Right-shift the number by one bit (to get the next lsb)
    }

    if ($isNegative) {
        $binary = '-' . $binary; // Append the minus sign for negative input
    }

    return $binary;
}

// Usage example:
echo decimalToBinary(10);  // Output: 1010
echo decimalToBinary(-10); // Output: -1010
echo decimalToBinary(25);  // Output: 11001
echo decimalToBinary(-25); // Output: -11001
