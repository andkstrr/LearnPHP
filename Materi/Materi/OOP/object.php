<?php 
class Person {
    public $nama;

    
    public function __construct($nama) {    
        $this->nama=$nama;
    } public function hasil() {
      return "$this->nama";
    }
}   

$konten1 = new Person("rapi");
$konten2 = new Person("rapa");
$konten3 = new Person("rapu");

echo $konten1->hasil();
echo "<br>";
echo $konten2->hasil();
echo "<br>";
echo "laptop 3 ".$konten3->hasil();
?>