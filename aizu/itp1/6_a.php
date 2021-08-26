<?php

$n = (int)fgets(STDIN);
$an = fgets(STDIN);

$aList = explode(' ', $an);
$intArray = array_map(function($a) {
    return (int)$a;
}, $aList);

foreach (array_reverse($intArray) as $i => $a) {
    print $a;
    if ($i !== $n-1) {
        print " ";
    }
}

print "\n";
