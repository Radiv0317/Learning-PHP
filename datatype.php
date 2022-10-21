<?php
echo "Decimal :";
var_dump(1234);
echo "\n";

echo "Octa :";
var_dump(01234);
echo "\n";

echo "Hexadecimal : ";
var_dump(0x1A);
echo "\n";

echo "Binary :";
var_dump(0b111111);
echo "\n";

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;
var_dump($x);
// data type
$bilangan1 = 283;
$bilangan2 = 500;
$hasil = $bilangan1+$bilangan2;

echo "Hasil dari $bilangan1 + $bilangan2 adalah $hasil";
echo "\n";
var_dump($hasil);
?>