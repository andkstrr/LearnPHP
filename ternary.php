<?php
    // Membuat KTP
    echo "<h3>Membuat KTP</h3>";
    $age = 23;
    
    $approve = $age >= 17 ? "Buat KTP" : "Belum Cukup Umur";
    echo "Jika kita berumur $age apakah kita boleh membuat KTP? <br> =$approve";
    echo "<hr>";
    
    // Menentukan Golongan Umur IF_ELSE
    echo "<h3>Menentukan Tipe Usia</h3>";
    $umur = 45;
    
    if ( $umur >= 25 ) {
        $type = "Dewasa";
    } 
    else if ( $umur >= 12 ) {
        $type = "Remaja";
    }
    else if ( $umur >= 5 ) {
        $type = "Anak-anak";
    }
    else if ( $umur < 5 ) {
        $type = "Balita";
    }
    echo "Jika kita berumur $umur tahun, maka kita termasuk golongan umur <br> =$type";
    
    // Ternary Golongan Umur
    echo "<h3>Ternary Umur</h3>";
    $umur = 5;
    
    $type = ($umur >= 25) ? "Dewasa" : (($umur >= 12) ? "Remaja" : (($umur >= 5 ) ? "Anak-anak" : "Balita"));
    echo "Jika kita berumur $umur tahun, maka kita termasuk golongan umur <br> =$type";
    echo "<hr>";
    
    // Ternary Nilai
    echo "<h3>Ternary Grade</h3>";
    $grade = 85;
    
    $raport = ($grade > 90) ? "Grade A" : (($grade > 80) ? "Grade B" : (($grade > 70) ? "Grade C" : "Grade D"));
    echo "Jika kita mendapatkan nilai $grade, maka kita mendapat golongan <br> =$raport <hr>";
   // Ternary Menentukan Rata-rata 3 Nilai
    echo "<h3>Ternary Rata-rata</h3>";
    $DPK = 70;
    $MTK = 87;
    $PAI = 80;
    
    $mean = floor(($DPK + $MTK + $PAI) / 3);
    
    $rataRata = ($mean >= 90) ? "Sangat Bagus" : ($mean >= 85 ? "Bagus" : ($mean >= 80 ? "Sangat Baik" : ($mean >= 70 ? "Baik" : "Kurang")));
    echo " Jika kita mendapat Rata-rata $mean, maka mendapat golongan grade <br> =$rataRata";
    echo "<hr>";
    
    // Ternary Perbandingan
    echo "<h3>Ternary Perbandingan</h3>";
    $x = 20;
    $y = 30;
    
    $z = ($x == $y) ? "Nilai Sama" : (($x > $y) ? "lebih besar x" : (($x < $y) ? "lebih besar y" : "Tidak ada"));
    echo "Jika x = $x, dan y = $y, maka $z";
    echo "<hr>";
?>