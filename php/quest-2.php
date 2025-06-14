<?php

// An isogram is a word that has no repeating letters, consecutive or non-consecutive. Implement a function that determines whether a string that contains only letters is an isogram. Assume the empty string is an isogram. Ignore letter case.

// Example: (Input --> Output)

// "Dermatoglyphics" --> true
// "aba" --> false
// "moOse" --> false (ignore letter case)

function isIsogram($string)
{
    $string = str_replace(' ', '', strtolower($string));
    $strSplit =  str_split($string);
    $findDuplicate = array_diff_assoc($strSplit, array_unique($strSplit));
    if (count($findDuplicate) > 0) return false;
    return true;
}

if (isIsogram("ab")) {
    echo "Oke";
} else {
    echo "No";
}
