<?php
$nama_depan = ["depan" => "Joko"];
$nama_belakang = ["belakang" => "Endriyanto"];

var_dump($nama_belakang);
echo "\n";
var_dump($nama_depan);
echo "\n";
var_dump($nama_depan+$nama_belakang);
echo "\n";
var_dump($nama_depan["depan"],$nama_belakang["belakang"]);
// equity

$mapel1 = ["id" => "FSK",
"nama_mapel" => "Fisika",
"nama_guru" => "Siti Lestari S.PD"
];

$mapel2 = ["nama_mapel" => "Fisika",
"id" => "FSK",
"nama_guru" => "Siti Lestari S.PD"
];

var_dump($mapel1 == $mapel2);
var_dump($mapel1 === $mapel2);
?>