<?php

// Write a function that takes an integer as input, and returns the number of bits that are equal to one in the binary representation of that number. You can guarantee that input is non-negative.

// Example: The binary representation of 1234 is 10011010010, so the function should return 5 in this case

function countBits(int $n)
{
    $binnary = (string)decbin($n);
    $countBit = 0;
    foreach (str_split($binnary) as $key => $value) {
        if ($value == 1) {
            $countBit += 1;
        }
    };
    return $countBit;
}

// function countBitsOther1(int $n)
// {
//     $count = 0;

//     while ($n) {
//         $count += ($n & 1);
//         $n = $n >> 1;
//     }

//     return $count;
// }

// function countBitsOther2($n)
// {
//     return substr_count(decbin($n), 1);
// }

echo (countBits(9)) . "<br/>";
