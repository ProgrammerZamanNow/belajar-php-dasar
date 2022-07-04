<?php 

    function sum(int $first, int $last)
    {
        $total = $first + $last;
        echo "Total $first + $last = $total".PHP_EOL;
    }

    sum("12", 23);
    sum(true, false);
?>