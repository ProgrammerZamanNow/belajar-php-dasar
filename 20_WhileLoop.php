<?php

$counter = 1;
while ($counter <= 10) {
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;
}

$counter = 1;
while ($counter <= 10) :
    echo "Ini adalah for while ke-$counter" . PHP_EOL;
    $counter++;
endwhile;