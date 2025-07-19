<?php

$t = (int) readline();

for ($set = 0; $set < $t; $set++) {
    $n = (int) readline();
    $scores = trim(readline());

    $codeCup = 0;
    $quera = 0;

    for ($i = 0; $i < $n; $i++) {
        if ($scores[$i] === 'C') {
            $codeCup++;
        } elseif ($scores[$i] === 'Q') {
            $quera++;
        }

        if ($codeCup === 25) {
            echo "CodeCup\n";
            break;
        } elseif ($quera === 25) {
            echo "Quera\n";
            break;
        }
    }
}

