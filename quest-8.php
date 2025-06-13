<?php

// Find the missing letter
// Write a method that takes an array of consecutive (increasing) letters as input and that returns the missing letter in the array.

// You will always get an valid array. And it will be always exactly one letter be missing. The length of the array will always be at least 2.
// The array will always contain letters in only one case.

// Example:

// ['a','b','c','d','f'] -> 'e'
// ['O','Q','R','S'] -> 'P'
// (Use the English alphabet with 26 letters!)

// Have fun coding it and please don't forget to vote and rank this kata! :-)

// I have also created other katas. Take a look if you enjoyed this kata!

function find_missing_letter(array $array)
{
    if (count($array) == 0) return "";
    $rangeAlphabet = range($array[0], $array[count($array) - 1]);
    $arrayDif = array_diff($rangeAlphabet, $array);
    foreach ($arrayDif as $key => $value) return $value;
}

// function find_missing_letter_other(array $array): string
// {
//     $alphabet = range($array[0], $array[count($array) - 1]);

//     return array_values(array_diff($alphabet, $array))[0];
// } //this code from other people

print_r(find_missing_letter(['a', 'b', 'c', 'd', 'f']));
print_r(find_missing_letter(['O', 'Q', 'R', 'S']));
