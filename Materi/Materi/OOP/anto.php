<?php 

class Laptop {
    protected $pemilik = "Anto";

    public function aksesPemilik() {
        return $this->pemilik;
    }
    protected function hidupkanLaptop() {
        return "Hidupkan Laptop";
    }
    public function paksaHidup() {
        return $this->hidupkanLaptop();
    }
}

$laptopAnto = new Laptop();

echo $laptopAnto->aksesPemilik();
echo "<br>";
echo $laptopAnto->pemilik;
echo "<br>";
echo $laptopAnto->paksaHidup();
echo "<br>";
echo $laptopAnto->hidupkanLaptop();

?>