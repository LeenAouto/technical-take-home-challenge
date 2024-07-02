<?php

function factorial($number){
    // If negative input return -1 to indicate error
    return ($number < 0) ? -1 : (($number == 0) ? 1 : $number * factorial($number - 1));
}


// Usage example:
echo factorial(-10); // Output: -1
echo factorial(0); // Output: 1
echo factorial(5); // Output: 120
