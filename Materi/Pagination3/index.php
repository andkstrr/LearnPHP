<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghubungkan Web Dinamis Dengan PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
<div class="content">
    <header>
        <h1 class="judul">WWW.MALASNGODING.COM</h1>
        <h1 class="deksripsi">Membuat Halaman Web Dinamis dengan PHP</h1>
    </header>
    
    <div class="menu">
        <ul>
            <li> <a  a href="index.php?page=home">HOME</a></li>
            <li> <a href="index.php?page=tentang">TENTANG</a></li>
            <li> <a href="index.php?page=tutorial">TUTORIAL</a></li>
        </ul>
    </div>
    
    <div class="badan">
    
    <?php
    if(isset($_GET['page'])) {
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
            default :
            echo "<center><h1>Maaf Halaman Tidak Tersedia</h1></center>";
        }
    } else {
        include "halaman/home.php";
    }
    ?>
</div>
</div>
</body>
</html>