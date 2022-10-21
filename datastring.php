<?php
$sekolah = "SMK Muhammadiyah 1 Sukoharjo";

// '

// echo 'Nama saya Radiv Lazuardi';
// echo '\n';
// echo 'Sekolah Di $sekolah';

echo "\n";
// "
echo "Nama Radiv Lazuardi";
echo "\n";
echo "Sekolah di $sekolah \n";
// Heredoc
echo <<<paragraf1
Hello world 
PHP is fun 
Yeay $sekolah
paragraf1;
// newdoc
echo <<<'paragraf1'
Hello world 
PHP is fun 
Yeay $sekolah
paragraf1;
?>