<?php
$nilaimatematika = 5.1;
$nilaiIPA = 6.7;
$nilaibahasaIndonesia = 9.3;
# hitung nilai rata-rata
$rataRata = ($nilaimatematika + $nilaiIPA + $nilaibahasaIndonesia) / 3;
#tampilkan data
echo "matemtika: {$nilaimatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "bahasa indonesia: {$nilaibahasaIndonesia} <br>";
echo "rata-rata: {rataRata} <br>";

#lihat data fariabel $rataRata          
var_dump($rataRata)
?>