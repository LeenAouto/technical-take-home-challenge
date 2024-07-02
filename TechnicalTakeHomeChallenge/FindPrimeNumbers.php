<?php

function findPrimes($start, $end) {
    if ($start > $end) {
        return "Please enter a valid range!";
    }

    $primeNumbers = [];

    // Adjust start to be at least 2, because numbers less than 2 are not prime
    for ($i = ($start < 2 ? 2 : $start); $i <= $end; $i++) {
        if (isPrime($i) == true){
            $primeNumbers[] = $i;
        }
    }

    return $primeNumbers;
}

function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    /* If a number is divisible by any number greater than its square root, 
    it is also divisible by a number smaller than its square root. */
    for($j = 2; $j <= sqrt($num); $j++){ 
        if ($num % $j == 0) {
            return false;
        }
    }
    return true;
}

// Usage example:
$result = findPrimes(0,30);
echo json_encode($result, JSON_PRETTY_PRINT);
// Output: [ 2, 3, 5, 7, 11, 13, 17, 19, 23, 29 ]
