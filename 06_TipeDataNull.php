<?php

$name = "Eko";
$name = null;

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

echo "Is Name Null? : ";
var_dump(is_null($name));
echo "\n";

$contoh = "Eko";
unset($contoh);

$contoh = "Kurniawan";
$contoh = null;

var_dump(isset($contoh));