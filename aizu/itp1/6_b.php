<?php

$allCards = [];
for ($i = 1; $i < 14; $i++) {
    $allCards[] = "S " . $i;
}

for ($i = 1; $i < 14; $i++) {
    $allCards[] = "H " . $i;
}

for ($i = 1; $i < 14; $i++) {
    $allCards[] = "C " . $i;
}

for ($i = 1; $i < 14; $i++) {
    $allCards[] = "D " . $i;
}

$n = (int)fgets(STDIN);
$cards = [];
for ($i = 0; $i < $n; $i++) {
    $cards[] = trim(fgets(STDIN));
}

$diff = array_diff($allCards, $cards);

foreach ($diff as $card) {
    echo $card . "\n";
}
