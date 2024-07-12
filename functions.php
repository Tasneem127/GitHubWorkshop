<?php
//1- Function to calculate the area of a rectangle
function calculateRectangleArea($length, $width) {
    $area = $length * $width;
    return $area;
}

//2- Function to reverse a string
function reverseString($str) {
    return strrev($str);
}

//3- Function to check if a number is prime
function isPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

//4- Function to find the factorial of a number
function findFactorial($num) {
    $factorial = 1;
    for ($i = 1; $i <= $num; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

//5- Function to sort an array in ascending order
function sortArrayAscending($arr) {
    sort($arr);
    return $arr;
}

// Function to convert Celsius to Fahrenheit
function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

// Enhance the 6th function

function Enhance_celsiusToFahrenheit($celsius, $precision = 2) {
    // Check if the input is a valid number
    if (!is_numeric($celsius)) {
        return "Invalid input. Please provide a numeric value.";
    }

    // Perform the conversion
    $fahrenheit = ($celsius * 9/5) + 32;

    // Round the result to the specified precision
    $fahrenheit = round($fahrenheit, $precision);

    return $fahrenheit;
}
?>
