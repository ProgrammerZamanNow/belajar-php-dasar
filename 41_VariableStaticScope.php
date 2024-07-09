<?php

function increment()
{
    static $counter = 1; // static scope
    echo "Counter = $counter" . PHP_EOL;
    $counter++;
}


increment();
increment();
increment();
increment();
increment();
increment();