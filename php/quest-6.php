<?php

// Create a function taking a positive integer between 1 and 3999 (both included) as its parameter and returning a string containing the Roman Numeral representation of that integer.

// Modern Roman numerals are written by expressing each digit separately starting with the leftmost digit and skipping any digit with a value of zero. There cannot be more than 3 identical symbols in a row.

// In Roman numerals:

// 1990 is rendered: 1000=M + 900=CM + 90=XC; resulting in MCMXC.
// 2008 is written as 2000=MM, 8=VIII; or MMVIII.
// 1666 uses each Roman symbol in descending order: MDCLXVI.
// Example:

//    1 -->       "I"
// 1000 -->       "M"
// 1666 --> "MDCLXVI"
// Help:

// Symbol    Value
// I          1
// V          5
// X          10
// L          50
// C          100
// D          500
// M          1,000

function solution($number)
{
    if (!in_array($number, range(1, 3999))) return "";

    $romeUnits = ["I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"];
    $romeTens = ["X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC"];
    $romeHundreds = ["C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM"];
    $romeThousands = ["M", "MM", "MMM"];

    $numberSplit = str_split((string)$number);
    switch (count($numberSplit)) {
        case 1:
            return $romeUnits[$numberSplit[0] - 1];
        case 2:
            return $romeTens[$numberSplit[0] - 1] . ($numberSplit[1] != 0 ? $romeUnits[$numberSplit[1] - 1] : "");
        case 3:
            return $romeHundreds[$numberSplit[0] - 1] . ($numberSplit[1] != 0 ? $romeTens[$numberSplit[1] - 1] : "") . ($numberSplit[2] != 0 ? $romeUnits[$numberSplit[2] - 1] : "");
        case 4:
            return $romeThousands[$numberSplit[0] - 1] . ($numberSplit[1] != 0 ? $romeHundreds[$numberSplit[1] - 1] : "") . ($numberSplit[2] != 0 ? $romeTens[$numberSplit[2] - 1] : "") . ($numberSplit[3] != 0 ? $romeUnits[$numberSplit[3] - 1] : "");
    }
}

// function solutionFromOther(int $number)
// {
//     $result = '';

//     $romanNumerals = [
//         'M' => 1000,
//         'CM' => 900,
//         'D' => 500,
//         'CD' => 400,
//         'C' => 100,
//         'XC' => 90,
//         'L' => 50,
//         'XL' => 40,
//         'X' => 10,
//         'IX' => 9,
//         'V' => 5,
//         'IV' => 4,
//         'I' => 1
//     ];

//     foreach ($romanNumerals as $roman => $value) {
//         $matches = intval($number / $value);
//         echo "<br/>" . ($matches) . " matches";
//         $result .= str_repeat($roman, $matches);
//         echo "<br/>" . ($result) . " result";
//         $number = $number % $value;
//         echo "<br/>" . $number;
//     }

//     return $result;
// }

echo solution(9);
