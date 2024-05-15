<?php

class Produk {
    public $judul = "judul", 
            $penulis = "Andrea Hirata";
}

# Mengubah 
$produk1 = new Produk();
$produk1->judul = "Laskar Pelangi";

# Menampilkan nilai properti
echo "Judul: " . $produk1->judul . "<br>";
echo "Penulis: " . $produk1->penulis . "<br>";

?>