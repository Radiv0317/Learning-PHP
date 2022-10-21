<?php
$name = "Eko";
$name = NULL;

$isnull = is_null($name);
var_dump($isnull);

$nama = "Maikelfapk";
$kelas = null;
$nama = null;

unset($kelas);

echo "$nama";
echo "\n";
var_dump($nama);
echo "\n";
echo "$kelas";
echo "\n";
var_dump($kelas);
echo "$nama";
echo "\n";
var_dump($nama);

$nol = 0;
$s_nol = "0";
$null = null;

var_dump($nol);
echo "\n";
var_dump($s_nol);
echo "\n";
var_dump($null);
echo "\n";
?>