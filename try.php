<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            text-align: center;
            margin-top: 150px;
        }
    </style>
</head>
<body>
    <?php
        echo "Hello, World! <br>";
        $nama = "I'm Andika Satrio Nurcahyo <br>";
        echo $nama;
        echo "Try Hypertext Preprocessor";
        echo "<hr>";

        $nilai = "C";

        switch($nilai) {
            case 'A':
                $grade = "Lulus";
                break;
            case 'B':
                $grade = "Lulus";
                break;
            case 'C':
                $grade = "Tidak Lulus";
                break;
            case 'D':
                $grade = "Tidak Lulus";
                break;
            default :
                $grade = "Nilai tidak Valid";
                break;
        } echo "Nilai anda $nilai, $grade";



        // input 3
        // variabel max + 3 input
        // max bagi 3, variabel mean
        // if else mean
    ?>

</body>
</html>
