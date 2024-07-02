<?php

function findMaxMin($numbers) {
    // Check to handle input of empty arrays
    if (empty($numbers)) {
        return null; 
    }

    $max = $numbers[0];
    $min = $numbers[0];

    foreach($numbers as $num) {
        if ($num > $max) {
            $max = $num;
        }
        if ($num < $min) { 
            $min = $num;
        }
    }

    return [$max, $min];
}

// Usage example:
$array = [10, 6, 18, 3, 9, 9, 7, 1, 15];
$result = findMaxMin($array);
echo "Maximum number in the array is : " . $result[0];
// Output: Maximum number in the array is : 18
echo "Minimum number in the array is : " . $result[1];
// Output: Minimum number in the array is : 1
