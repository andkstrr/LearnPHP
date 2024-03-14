<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Ternary</title>
</head>
<body>
    <?php
    $nilai = 80;
    ?>
    <center><?= $nilai ?></center>
    <center><span style="color:  <?= $nilai >= 75 ? 'green' : 'red' ?>">
    <?=$nilai >= 75 ? "Kompeten" : "Tidak Kompeten"?></span></center>   
</body>
</html>