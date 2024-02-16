<?php

// Increment ++ // Decrement --
// Looping For
echo "<h3>Looping For</h3>";
for($i = 1; $i <= 50; $i++){
    echo $i;
}
echo "<br>";

for($i = 50; $i >= 1; $i--){
    echo $i;
}
echo "<hr>";

// For Ganjil Genap
echo "<h3>For Ganjil Genap</h3>";
for($a = 1; $a <= 50; $a++){
    if ($a % 2 == 0){
        echo " $a bilangan genap,";
    } else {
        echo  " $a bilangan ganjil,";
    }
}

// For Genap saja
echo "<hr>";
echo "<h3>For Genap</h3>";
for($a = 1; $a <= 50; $a++){
    if ($a % 2 == 0){
        echo " $a bilangan genap,";
    }
}

// For Ganjil saja
echo "<hr>";
echo "<h3>For Ganjil</h3>";
for($a = 1; $a <= 50; $a++){
    if ($a % 2 == 1){
        echo " $a bilangan ganjil,";
    }
}

// For Bilangan +5
echo "<hr>";
echo "<h3>For Bilangan +5</h3>";
for($a = 5; $a <= 100; $a+=5){
    echo " $a,"; 
}
echo "<hr>";

// Looping While
echo "<h3>Looping While</h3>";
$b = 1;
while ($b <= 50) {
    echo $b;
    $b++;
}
echo "<br>";
$b = 50;
while ($b >= 1) {
    echo $b;
    $b--;
}
echo "<hr>";

// While Ganjil Genap
echo "<h3>While Ganjil Genap</h3>";
$b = 1;
while ($b <= 50) {
    if ($b %2 == 0 ) {
        echo $b. " Bilangan Genap,";
    } else {
        echo " ". $b. " Bilangan Ganjil,";
    }
    $b++;
}
echo "<hr>";

// While Genap saja
echo "<h3>While Genap</h3>";
$b = 1;
while ($b <=50) {
    if ($b %2 == 0) {
        echo " ". $b. " Bilangan Genap,";
    }
    $b++;
}
echo "<hr>";

// While Ganjil saja
echo "<h3>While Ganjil</h3>";
$b = 1;
while ($b <=50) {
    if ($b %2 == 1) {
        echo " ". $b. " Bilangan Ganjil,";
    }
    $b++;
}
echo "<hr>";

// While Bilangan +5
echo "<h3>While Bilangan +5</h3>"; 
$b = 5;
while ($b <=100) {
    echo $b;
    $b+=5;
}
echo "<hr>";

// Looping Do While
echo "<h3>Looping Do While  </h3>"; 
$c = 1;

do {
    echo $c;
    $c++;
} while ($c <=50);
echo "<br>";


$c = 50;

do {
    echo $c;
    $c--;
} while ($c >1);
echo "<hr>";

// Do While Ganjil Genap
echo "<h3>Do While Ganjil Genap</h3>";
$c = 1;

do {
    if ($c %2 == 0) {
        echo " ". $c. " Bilangan Genap,";
    } else {
        echo " ". $c. " Bilangan Ganjil";
    }
    $c++;
} while ($c <= 50);
echo "<hr>";

// Do While Genap Saja
echo "<h3>Do While Genap</h3>";
$c= 1;

do {
    if ($c %2 == 0) {
        echo " ". $c. " Bilangan Genap,";
    }
    $c++;
} while ($c <= 50);
echo "<hr>";   

// Do While Ganjil 
echo "<h3>Do While Ganjil</h3>";

$c = 1;
do {
    if ($c %2 == 1) {
        echo " ". $c. " Bilangan Ganjil,";
    }
    $c++;
} while ($c <=50);
echo "<hr>";
// Do While Bilangan +5
echo "<h3>Do While Bilangan +5</h3>";

$c = 5;

do {
    echo $c;
    $c+=5;
} while ($c <=100);
?>
