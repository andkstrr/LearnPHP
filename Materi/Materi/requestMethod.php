<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpangkatan</title>
</head>
<body>
    <!-- <center><h3 style="margin-top: 40px;">Tabel Menghitung Akar Pangkat</h3></center> -->
    <center>
        <form action="" method="POST">
            <table border=1 style="margin-top: 20px;">
                <tr>
                    <td><label for="angka_pertama">Angka Pertama : </label></td>
                    <td><input type="number" name="angka_pertama" id="angka_pertama"></td>
                </tr>
                <tr>
                    <td><label for="angka_pangkat">Angka Pangkat : </label></td>
                    <td><input type="number" name="angka_pangkat" id="angka_pangkat"></td>
                </tr>
                <tr>
                    <td colspan="2"><button type="submit">Hitung</button></td>
                </tr>
            </table>
        </form>
    </center>
<?php

if (@$_POST['angka_pertama'] == "" || @$_POST['angka_pangkat'] == "") {
    echo "<p style='text-align: center; color: red; margin: 10px 0'>Silahkan lengkapi seluruh data!!</p>";
}   else {
    // echo "<p style='text-align: center; color: green; margin: 10px 0'>Siap diproses!</p>";
    $hasilPangkat = $_POST['angka_pertama'] ** $_POST['angka_pangkat'];
    echo "<p style='text-align: center; margin: 10px 0;'>Hasil Pangkat Dari " . "<b>" . 
    $_POST['angka_pertama'] . " pangkat " . $_POST['angka_pangkat'] . " = " . $hasilPangkat . 
    "</b>" . "</p>";
}

?>
</body>
</html>