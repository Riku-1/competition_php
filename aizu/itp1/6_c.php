<?php

$n = (int)fgets(STDIN);
$inputs = [];

$buildings = array_fill(1, 4, array_fill(1, 3, array_fill(1, 10, 0)));

for ($i = 0; $i < $n; $i++) {
    $inputs[] = fgets(STDIN);
}

foreach ($inputs as $input) {
    # cannot use before php7
    # [$b, $f, $r, $v] = array_map(function ($str) {return (int)$str;}, explode(" ",$input));

    # before php7
    list($b, $f, $r, $v) = array_map(function ($str) {return (int)$str;}, explode(" ",$input));
    $buildings[$b][$f][$r] += $v;
}


foreach ($buildings as $key => $building) {
    foreach ($building as $stairs) {
        foreach ($stairs as $stair) {
            print " " . $stair;
        }
        print("\n");
    }
    if ($key != 4) {
        print("####################\n");
    }
}


