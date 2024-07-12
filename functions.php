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


