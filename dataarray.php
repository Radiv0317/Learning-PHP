<?php
$games = array("Cyberpunk", "GTA V", "Genshin Impact");
var_dump($games);
$pc = array("ROG", "TUF", "LEGION");
var_dump($pc);

$kelas = array("XI PPLG 1", "XI PPLG 2", "XI PPLG 3");
var_dump($kelas);

$nama = ["Maikel", "Vallad", "GGSRHD", "Ipin", "Neima", "AidanCross"];
$nama[3] = "Naoal";
unset($nama[5]);
$nama[] = "Mike";
var_dump($nama);
var_dump($nama[3]);
?>