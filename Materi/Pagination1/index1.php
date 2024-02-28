<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>
</head>
<body>
    <?php
    // Percabangan Switch Case
    
    echo "<center><h1>Header</h1></center>";
    echo '<a href="?page=home">HOME</a><br>';
    echo '<a href="?page=tentang">TENTANG</a><br>';
    echo '<a href="?page=tutorial">TUTORIAL</a><br>';
    $page = $_GET['page'];
    switch ($page) {
        case 'home';
            include "home.php";
            break;
        case 'tentang';
            include "tentang.php";
            break;
        case 'tutorial';
            include "tutorial.php";
            break;  
        default:
            echo "<center><h3>Maaf. halaman tidak ditemukan!</h3></center>";
    }
    ?>
</body>
</html>