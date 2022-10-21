<?php
echo "INI Benar";
echo "\n";
echo var_dump(TRUE);
echo "\n";
echo "INI Salah";
echo "\n";
echo var_dump(False);

$maikel = 169;
$naoal = 170;
$kebenaran = $maikel < $naoal;

if ($maikel < $naoal) {
    echo "naoal lebih tinggi dari maikel";
    echo "\n";
    echo var_dump($kebenaran);
} 
else {
    echo "Maikel lebih tinggi dari naoal";
    echo "\n";
    echo var_dump($kebenaran);
}
?>