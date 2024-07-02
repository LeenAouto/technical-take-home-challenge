<?php

function palindrome($inputString){
    // Clean string from punctuation and whitespace
    $inputString = preprocessString($inputString);
    
    // Generate the reversed string 
    $reversed = strrev($inputString);

    // Compare while ignoring case
    return strcasecmp($inputString, $reversed) == 0 ? true : false;
}

function preprocessString($string) {
    // Remove any punctuations
    $string = preg_replace("/[\p{P}]/u", "", $string);
    
    // Remove all whitespaces
    $string = preg_replace("/\s+/", "", $string);
    
    return $string;
}

// Usage example:
$string1 = "Was it a car or a cat I saw?";
echo "$string1 is : " . (palindrome($string1)? "palindrome." : "NOT palindrome.");
// Output: Was it a car or a cat I saw? is : palindrome.

$string2 = "Hello, World!";
echo "$string2 is : " . (palindrome($string2)? "palindrome." : "NOT palindrome.");
// Output: Hello, World! is : NOT palindrome.
