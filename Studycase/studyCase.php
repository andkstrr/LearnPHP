<?php

/*
A > 85
B > 68
C > 56
D > 45
E < 45

A, B, C Lulus
*/
$nilai = 54;

if ($nilai > 85){
    echo "A, Lulus";
} else if ($nilai > 68){
    echo "B, Lulus";
} else if ($nilai > 56){
    echo "C, Lulus";
} else if ($nilai > 45){
    echo "D, Lulus";
} else {
    echo "E, Tidak Lulus";
}    
?>