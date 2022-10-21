<?php
// $keterampilan = 75;
// $sikap = 99;

// if ($keterampilan >= 75 == $sikap >= 75){
//     echo "Anda Lulus Coy";
// } else{
//     echo "Anda Tidak Lulus";
// }
// echo "\n";

$keterampilan = 90;
$sikap = 90;

if ($keterampilan >= 90 && $sikap >= 90) {
    echo "LULUS AJG";
} else if($keterampilan >= 80 && $sikap >= 80 ){
    echo "nilai kamu B";
}

else if($keterampilan >= 75 && $sikap >= 75){
    echo "nilai kamu C";
}
else {
    echo "awikwok nggk lulus";
}

?>