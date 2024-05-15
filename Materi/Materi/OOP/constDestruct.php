<?php

# Class
class Laptop {
    # Property
    private $owner = "Andika";
    private $merk = "Asus";

    public function __construct() {
        echo "Ini berasal dari method Construct";
    }
    public function onLaptop() {
        return "Nyalakan Laptop $this->merk milik $this->owner";
    }
    public function __destruct() {
        echo "Ini berasal dari method Destruct";
    }
} 

# Object
$kepunyaanLaptop = new Laptop();

echo "<br>";
echo $kepunyaanLaptop->onLaptop();
echo "<br>";

# Class
class Computer {
    # Property
    private $processor = "Intel Core i7-4790";

    public function tampilkanProcessor() {
        echo $this->processor;
    }
    public function getProcessor() {
        return $this->processor;
    }
}

# Object
$spekComputer = new Computer();

echo $spekComputer->tampilkanProcessor();
echo "<br>";
echo $spekComputer->getProcessor();
echo "<br>";

?>