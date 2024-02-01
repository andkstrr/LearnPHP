<?php
    // $string = 'Ini adalah contoh string sederhana';
    // $string2 = 'Variabel juga tidak otomatis ditampilkan : $string';
    
    // echo $string;
    // echo "<br>";
    // echo $string2;
    
    // echo "<br>";
    
    // $stringa = "Ini adalah string sederhana 2";
    // $stringb = "Variabel akan otomatis ditampilkan : $string";
    
    // echo $stringa;
    // echo "<br>";
    // echo $stringb;
    
    // echo "<br>"; echo "<br>";
    
    // $nama = "Andika";
    // $umur = 15;
    
    // echo "Nama saya adalah ", $nama, " dan saya berumur ", $umur; echo "<br>";
    // echo "Nama saya adalah ". $nama. " dan saya berumur ". $umur; echo "<br>";
    
    // echo "<br>"; echo "<br>";
    
    // $a = "1";
    // $b = 2;
    // echo $a + $b;
    
            
    
    // $name = "Andikastrr";
    // $age = 15;
    // $score = 100.22;
    
    // var_dump($name);
    // echo "<br>";
    // var_dump($age);
    // echo "<br>";
    // var_dump($score);
    
            
    
    // ARRAY
    // Cara 1 ()
    // $laptops = array("asus", "acer", "huawei", "lenovo");
    // var_dump($laptops)
    
    // Cara 2 []
    // $laptops = ["asus", "acer", "huawei", "lenovo"];
    // var_dump($laptops)
    
    // Cara hanya ambil 1 data menggunakan []; var_dump($laptops[1]) //
    
            
    
    // Operator PhP
    
    $a = 5;
    $b = 2;
    
    // Penjumlahan
    $c = $a + $b;
    echo "$a + $b = $c";
    echo "<br>";
    
    // Pengurangan 
    $c = $a - $b;
    echo "$a - $b = $c";
    echo "<br>";
    
    // Perkalian
    $c = $a * $b;
    echo "$a * $b = $c";
    echo "<br>";
    
    // Pembagian
    $c = $a / $b;
    echo "$a / $b = $c";
    echo "<br>"; 
    
    // Modulus
    $c = $a % $b;
    echo "$a % $b = $c";
    echo "<br>";
    
    // Pangkat
    $c = $a ** $b;
    echo "$a ** $b = $c";
    echo "<br>";
    
            
    
    // Operator Penugasan
    
    $x  = 83;
    $x = $x + 10; // output 83 + 10;
    
    $y = 10;
    $y += 10;  // output 10 + 10;
    
    $o = 20;
    
    $m = $o + 20;
    echo "$o + 20 = $m";
    echo "<br>";
    
    $m += 30;
    echo "40 + 30 = $m";
    echo "<br>";
    
    // Operator Increment & Decrement
    
    // $score = 0;
    
    // $score++;
    // $score++;
    // $score++;
    // echo "score = $score"; // output 3
    // echo "<br>";
    
    // $goal = 4;
    
    // $goal++;
    // $goal++;
    // $goal++; 
    // echo "goal = $goal"; // output 7
    // echo "<br>";
    
    // $value = 20;
    
    // $value--;
    // $value--;
    // $value--;
    // $value--;
    // echo "value = $value"; // output 16
    
    // Increment dengan operator aritmatika
    
    $value = 20;
    $value += 4;
    echo "$value";
    echo "<br>";
    
    $score = 0;
    $score += 3;
    echo "$score";
    echo "<br>";
    
    $goal = 4;
    $goal += 3;
    echo "$goal";
    echo "<hr>";
    
    // Operator Relasi dan Perbandingan 
    
    $q = 6;
    $w = 2;
    
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
    
    // Latihan Op Relasi
    
    $nilai1 = 17;
    $nilai2 = 20;
    
    $hasil = $nilai1 < $nilai2;
    echo "$nilai1 < $nilai2 = $hasil";
    echo "<br>";
    
    $hasil = $nilai1 > $nilai2;
    echo "$nilai1 > $nilai2 = $hasil";
    echo "<br>";
    
    $hasil = $nilai1 == $nilai2;
    echo "$nilai1 == $nilai2 = $hasil";
    echo "<br>";
    
    $hasil = $nilai1 != $nilai2;
    echo "$nilai1 != $nilai2 = $hasil";
    echo "<hr>";
    
    $nilai3 = "20";
    $nilai4 = 20;
    
    $hasil2 = $nilai3 == $nilai4;
    echo "$nilai3 ==$nilai3 = $hasil2";
    echo "<br>";
    
    $hasil2 = $nilai3 === $nilai4;
    echo "$nilai3 === $nilai3 = $hasil2";
    echo "<br>";
    
    $hasil2 = $nilai3 != $nilai4;
    echo "$nilai3 != $nilai3 = $hasil2";
    echo "<br>";
    
    $hasil2 = $nilai3 !== $nilai4;
    echo "$nilai3 !== $nilai3 = $hasil2";
    echo "<hr>";
    
    // Operator Logika 
    
    $first = true;
    $second = false;
    
    // Operator AND {&&}
    $third = $first && $second;
    echo "and : $third 0";
    echo "<br>";
    // Operator OR {||}
    $third = $first || $second;
    echo "or : $third";
    echo "<br>";
    // Operator NOT {!=}
    $third = $first != $second;
    echo "not : $third";
    echo "<hr>";
    
    // Operator Ternary 
    // Kamu suka aku??]
    $suka = true;
    
    $jawab = $suka ? "iya" : "tidak";
    echo "$jawab"; // output "iya";
    echo "<hr>";
    
    $belajar = true;
    
    if ( $belajar == true ) {
        $result = "semangat";
    } else {
        $result = "malass";
    }
    echo "$result"; // output "semangat";
?>  
