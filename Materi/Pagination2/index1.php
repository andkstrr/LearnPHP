<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Header
    echo '<h1>My Navbar</h1>';
// Navbar
    echo '<a href="?haha=home">HOME</a>';
    echo '<a href="?haha=tentang">TENTANG</a>';
    echo '<a href="?haha=tutorial">TUTORIAL</a><br>';
// Main
    $haha = $_GET['haha'];
    switch ($haha) {
        case 'home';
            $tampil = 'HOME';
            // echo "<h1>Home</h1>";
            break;
            case 'tentang';
            $tampil = 'Tentang';
            // echo "<h1>TENTANG</h1>";
            break;
            case 'tutorial';
            $tampil = 'Tutorial';
            // echo "<h1>TUTORIAL</h1>";
            break;
            default :
            $tampil = "Maaf";
            // echo "<h1>MAAF</h1>";
            break;
    }
    echo $tampil;
// Footer
    echo "<h1>Footer</h1>";
?>
</body>
</html>