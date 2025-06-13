<?php

// Implement the function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements.

// For example:

// uniqueInOrder("AAAABBBCCDAABBB") == {'A', 'B', 'C', 'D', 'A', 'B'}
// uniqueInOrder("ABBCcAD")         == {'A', 'B', 'C', 'c', 'A', 'D'}
// uniqueInOrder([1,2,2,3,3])       == {1,2,3}

function uniqueInOrder($iterable)
{
    if ($iterable == "" || $iterable == []) return [];

    $textInclude = [];
    if (gettype($iterable) == "string") $paramSplit = str_split($iterable);
    else $paramSplit = $iterable;

    foreach ($paramSplit as $index => $value) {
        if ($index == 0) $textInclude[] = $value;
        else {
            if ($value == $textInclude[(count($textInclude) - 1)]) continue;
            else $textInclude[] = $value;
        }
    }

    $ret = $textInclude;
    return $ret;
}

// function uniqueInOrderFromOthers($iterable)
// {
//     $arr = is_string($iterable) ? str_split($iterable) : $iterable;
//     $ret = array_reduce($arr, function ($carry, $item) {
//         print_r(end($carry));
//         if ($item != end($carry)) {
//             $carry[] = $item;
//         }
//         return $carry;
//     }, []);

//     return $ret;
// }

print_r(uniqueInOrder("ABBSSDBAJISAJ"));
print_r(in_array(['A', 'B', 'C', 'D', 'A', 'B'], uniqueInOrder('AAAABBBCCDAABBB')));
