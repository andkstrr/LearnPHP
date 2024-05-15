<?php

# Class
class Produk {
    # Membuat Attribute / Property
    public $judul;
    public $penulis = "Andrea Hirata";

    # Method
    public function getJudul() {
        return $this->judul;
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }
}

# Object 
# Menggunakan method Set untuk mengubah judul / penulis produk
$produk1 = new Produk();
$produk1->setJudul("Laskar Pelangi");

# Menampilkan nilai properti menggunakan metode Get
echo "Judul: " . $produk1->getJudul() . "<br>";
echo "Penulis: " . $produk1->getPenulis() . "<br>";
echo "==================<br>";

?>