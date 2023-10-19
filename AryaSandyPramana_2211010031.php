<?php

$nama = readline("Masukkan Nama       : ");
$nilaiMutu = readline("Masukkan Nilai Mutu : ");

if(($nilaiMutu >= 80.00) && ($nilaiMutu <= 100)){
    $hurufMutu = "A";
    $bobot     = 4.00;
}elseif(($nilaiMutu >= 75.00) && ($nilaiMutu <= 79.99)){
    $hurufMutu = "A-";
    $bobot     = 3.75;
}elseif(($nilaiMutu >= 70.00) && ($nilaiMutu <= 74.99)){
    $hurufMutu = "B+";
    $bobot     = 3.50;
}elseif(($nilaiMutu >= 65.00) && ($nilaiMutu <= 69.99)){
    $hurufMutu = "B";
    $bobot     = 3.00;
}elseif(($nilaiMutu >= 55.00) && ($nilaiMutu <= 64.99)){
    $hurufMutu = "C";
    $bobot     = 2.00;
}elseif(($nilaiMutu >= 30.00) && ($nilaiMutu <= 54.99)){
    $hurufMutu = "D";
    $bobot     = 1.00;
}elseif(($nilaiMutu > 0.00) && ($nilaiMutu <= 29.99)){
    $hurufMutu = "E";
    $bobot     = 0.00;
}else{
    $hurufMutu ="T";
    $bobot     = 0.00;
}

echo "Nama        : " .$nama."\n";
echo "Nilai Mutu  : " .number_format((float)$nilaiMutu,2)."\n";
echo "Huruf Mutu  : " .$hurufMutu."\n";
echo "Bobot Nilai : " .number_format((float)$bobot,2);

?>