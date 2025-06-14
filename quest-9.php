<?php

// he rgb function is incomplete. Complete it so that passing in RGB decimal values will result in a hexadecimal representation being returned. Valid decimal values for RGB are 0 - 255. Any values that fall out of that range must be rounded to the closest valid value.

// Note: Your answer should always be 6 characters long, the shorthand with 3 will not work here.

// Examples (input --> output):
// 255, 255, 255 --> "FFFFFF"
// 255, 255, 300 --> "FFFFFF"
// 0, 0, 0       --> "000000"
// 148, 0, 211   --> "9400D3"

function getHex(int $n)
{
    $hex = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "A", "B", "C", "D", "E", "F"];

    if ($n < 0) return "00";
    if ($n > 255) return "FF";

    $firstHex = floor($n / 16);
    $secondHex = $n - ($firstHex * 16);
    return $hex[$firstHex] . "" . $hex[$secondHex];
}

function rgb($r, $g, $b)
{
    $hexR = getHex($r);
    $hexG = getHex($g);
    $hexB = getHex($b);
    return $hexR . "" . $hexG . "" . $hexB;
}


print_r(rgb(255, 255, 300));
