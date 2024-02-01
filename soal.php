<?php
    // Mencari Luas Segitiga 
    $alas = 10;
    $tinggi = 24;
    
    // Rumus 
    $result = 1/2 * $alas * $tinggi;
    
    // Output
    echo "Luas Segitiga dengan alas $alas cm dan tinggi $tinggi cm adalah $result cm2";
    echo "<hr>";
    
    // Mencari Luas Persegi
    $sisi = 4;
    
    // Rumus 
    $result2 = $sisi ** $sisi;
    
    // Output
    echo "Luas Persegi jika sisinya $sisi cm adalah $result2 cm2";
    echo "<hr>";
    
    // Mencari Luas Lingkaran
    $jariJari = 8;
    
    // Rumus 
    $result3 = 3.14 * 8 * 8;
    
    // Output 
    echo "Luas Lingkaran dengan jari-jari $jariJari cm adalah $result3 cm2";
    echo "<hr>";
    
    // Perbandingan Angka 19 dan 20
        
    $q = 19;
    $w = 20;
    
    // >
    $e = $q > $w;
    echo "$q > $w = $e";
    echo "<br>";
    
    // <
    
    $e = $q < $w;
    echo "$q < $w = $e";
    echo "<br>";
    
    // =
    
    $e = $q == $w;
    echo "$q == $w = $e";
    echo "<br>";
    
    // tidak sama dengan
    
    $e = $q != $w;
    echo "$q != $w = $e";
    echo "<br>";
    
    // lebih besar sama dengan
    
    $e = $q >= $w;
    echo "$q >= $w = $e";
    echo "<br>";
    
    // lebih kecil sama dengan
    
    $e = $q <= $w;
    echo "$q <= $w = $e";
    echo "<hr>";
    
?>