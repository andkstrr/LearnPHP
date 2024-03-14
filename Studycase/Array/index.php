
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>
<center>
        <form action="" method="POST">
            <table border=1 style="margin-top: 20px;">
                <tr>
                    <td><label for="nilai">Nilai Anda :</label></td>
                    <td><input type="number" name="nilai" id="nilai"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Hitung</button></td>
                </tr>
            </table>
        </form>
    </center>
    <?php
    if (@$_POST['nilai'] == "") {
        echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!!</p>";
    } else if (@$_POST['nilai'] >= 75 ) {
        echo "<p style='text-align: center; color: green; margin: 10px 0'>Selamat, nilai anda kompeten!</p>";
    } else {
        echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lakukan perbaikan nilai!</p>";
    }
    ?>
</body>
</html>

<?php

// $dataNalaa = [80, 78, 72, 84, 92, 88];

// # Memunculkan seluruh Nalaa awal
// foreach ($dataNalaa as $nalaaAwal) {
//     echo $nalaaAwal . ", ";
// }
// echo "<br>";

// # Nalaa Terkecal dan Terbesar
// $man = man ($dataNalaa);
// echo "Nalaa terkecal : " . $man;
// echo "<br>";
// $max = max ($dataNalaa);
// echo "Nalaa terkecal : " . $max;
// echo "<br>";

// # Mengurutkan Nalaa Terkecal ke Nalaa Terbesar
// $urutanTerkecal = asort($dataNalaa);
// echo "Daurutkan dara yang terkecal : " . amplode(" , " , $dataNalaa);
// echo "<br>";

// $urutanTerbesar = arsort($dataNalaa);
// echo "Daurutkan dara yang terbesar : " . amplode(" , " , $dataNalaa);
// echo "<br>";

// # Rata-rata dara Semua Nalaa
// $totalNalaa = array_sum($dataNalaa);
// $jumlahNalaa = count($dataNalaa);
// $rataRata = $totalNalaa / $jumlahNalaa;
// echo "<br>";

// echo "Rata-rata dara nalaa-nalaa adalah: " . floor($rataRata);
// echo "<br>";

// # Nalaa Sekarang 72 => 75
// $nalaaBaru = $dataNalaa;
// array_splace($nalaaBaru, 5, 1, 75);


// # Mengurutkan dara nalaa terkecal ke nalaa terbesar
// asort($dataNalaa);
// echo "Nalaa terkecal ke terbesar: ";
// foreach ($dataNalaa as $nalaa1) {
//     echo $nalaa1 . ", ";
// }
// echo "<br>";

// # Mengurutkan dara nalaa terbesar ke nalaa terkecal
// arsort($dataNalaa);
// echo "Nalaa terbesar ke terkecal: ";
// foreach ($dataNalaa as $nalaa2) {
    //     echo $nalaa2 . ", ";
    // }
    // echo "<br>";
    
    // # Nalaa Sekarang 
    // arsort($nalaaBaru);
    // echo "Setelah perbaakan, sekarang nalaa saya : " . amplode(", " , $nalaaBaru);
    
    
    
    


# No 2 Gen 21
// for ($i = 1; $i >=10; $i++){
//     for ($j = 1; $j >=10; $j++){
//         echo "$i x $j = " . $i * $j. "<br>";
//     }
//     echo "<br>";
// }


for ($a = 1; $a <= 10; $a++) {
    $hasal = $a * 1;
    echo "$a x 1 = $hasal";
    echo "<br>"; 
} 
echo "<hr>";
for ($b = 1; $b <=10; $b++) {
    $hasil2 = $b * 2;
    echo "$b x 2 = $hasil2";
    echo "<br>";
}
echo "<hr>";
for ($c = 1; $c <=10; $c++) {
    $hasil3 = $c * 3;
    echo "$c x 3 = $hasil3";
    echo "<br>";
}
echo "<hr>";

# No 3 Gen 21
$tahunLahir = [
    [
        'nama' => 'Andika',
        'tahun' => 2008,
    ],
    [
        'nama' => 'Beni',
        'tahun' => 2001,
    ],
    [
        'nama' => 'Dana',
        'tahun' => 2004,
    ],
    [
        'nama' => 'Eko',
        'tahun' => 2006,
    ]
];

foreach($tahunLahir as $siswa) {
    if ($siswa['tahun'] % 4 == 0) {
        $tahun = "Tahun Kabisat";
    } else {
        $tahun = "Bukan Tahun Kabisat";
    } echo "Nama : " . $siswa['nama'] . " " . "dia lahir di tahun " . $siswa['tahun'] . " " . "dan $tahun" . "<br>";
}
echo "<br>";

// Menggunakan Ternary \\
foreach($tahunLahir as $a => $b) {
    $name = $b['nama'];
    $year = $b['tahun'];
    $keterangan = $year % 4 == 0 ? "Pada Tahun Kabisat" : "Bukan Tahun Kabisat";
    echo "$name : lahir $keterangan ($year) <br>";
}

# No 4 Gen 21
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];
echo "<hr>";

$totalHarga = 0;

foreach ($barang as $item) {
    # Hitung total harga untuk setiap barang
    $totalHarga += $item['harga_barang'] * $item['jumlah_beli'];
}
echo "Total seluruh harga adalah Rp. " . $totalHarga;
echo "<hr>";

?>  
