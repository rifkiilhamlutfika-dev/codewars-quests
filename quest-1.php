<?php

// pangram

function detect_pangram($string)
{
    $textLower = strtolower($string);
    $spaceRemove = str_replace(' ', '', $textLower);

    $rangeAlpabet = range('a', "z");

    foreach ($rangeAlpabet as $alphabet) {
        if (strpos($spaceRemove, $alphabet) == "") {
            return false;
        }
    }

    return true;
}

if (detect_pangram("The quick brown fox jumps over the lazy dog")) {
    echo "Oke";
} else {
    echo "No";
}
