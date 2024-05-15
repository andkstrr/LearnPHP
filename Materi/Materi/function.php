<?php

#Function Tambah
function tambahAngka($angka1, $angka2) {
    $hasil = $angka1 + $angka2;
    echo $hasil . "<br>";
} 

echo "<h5>Penjumlahan :</h5>";
tambahAngka(17, 23);
echo "<hr>";

#Function Kurang
function kurangAngka($angka3, $angka4) {
    $hasil2 = $angka3 - $angka4;
    echo $hasil2 . "<br>";
} 

echo "<h5>Pengurangan :</h5>";
kurangAngka(56, 67);
kurangAngka(112, 70);
kurangAngka(119, 89);
echo "<hr>";

#Function Pangkat
function perPangkatan($angka5, $angka6) {
    $hasil3 = $angka5 ** $angka6;
    echo $hasil3 . "<br>";
} 

echo "<h5>Perpangkatan   :</h5>";
perPangkatan(2, 5);
perPangkatan(6, 4);
perPangkatan(12, 6);
echo "<hr>";


#Function Perbandingan
function perBandingan($angka7, $angka8, $angka9) {
    $hasil4 = max($angka7, $angka8, $angka9);
    echo $hasil4 . "<br>";
} 

echo "<h5>Perbandingan :</h5>";
perBandingan(2, 4, 5);
perBandingan(9, 7, 3);
perBandingan(8, 12, 6);

?>