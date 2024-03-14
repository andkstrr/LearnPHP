<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Boolean True False
    // Apabila Value diubah menjadi false, output tidak muncul
    echo "<h2>Boolean</h2>";
    $baju = true;
    
    if($baju){
        echo "Variable baju bernilai true"; 
    }
    echo "<hr>";
    // Menghitung nilai dan menentukan grade sebuah nilai
    echo "<h2>Menghitung Nilai dan Grade Nilai</h2>";
    $nilai = 85;
    
    if ( $nilai <= 100  ) {
        echo "Nilai anda $nilai, ";
        if ( $nilai <= 100 ) {
            echo "Anda mendapat Grade A.";
        } 
    } else if ( $nilai >= 90 ) {
        echo "Nilai anda $nilai, ";
        if ( $nilai >= 90 ) {
            echo "Anda mendapat Grade B.";
        }
    }  else if ( $nilai >= 80 ) {
        echo "Nilai anda $nilai, ";
        if ( $nilai >= 80 ) {
            echo "Anda mendapat Grade C.";
        }
    } else {
        echo "Nilai anda $nilai, ";
        if ( $nilai < 80 ) {
            echo "Maaf anda Remedial :(";
        }
    }
    echo "<hr>";
?>
</body>
</html>