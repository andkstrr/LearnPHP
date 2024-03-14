<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get | Post</title>
</head>
<body>
<form method="post" action="tampil.php">
    <label>Masukkan Nama</label><br>
    <input type="text" name="nama"><br>
    <label>Masukkan Usia</label><br>
    <input type="text" name="usia"><br>
    <input type="submit" value="oke ">
</form>
<?php
    // menangkap data nama dengan method post
    $nama = $_POST['nama'];
    // menangkap data usia dengan method post
    $usia = $_POST['usia'];
    // menampilkan data nama
    echo "Nama anda adalah " . $nama;
    echo "<br/>";
    // menampilkan data usia
    echo "Usia anda adalah " . $usia;
?>
</body>
</html>