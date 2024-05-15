<?php

class Barang {
    public $namaBarang;
    private $harga;
    
    public function setBarang($namaBarang = null, $harga = null ) {
        $this->namaBarang = $namaBarang;
        $this->harga = $harga;
    } 
    public function getBarang() {
        echo "Nama barang tersebut adalah: " . $this->namaBarang . "<br>";
        echo "Harga dari barang tersebut adalah: Rp. " . $this->harga;
    }
}

$totalHarga = new Barang();
$totalHarga->setBarang("Buku", "70.000,00");
echo $totalHarga->getBarang();