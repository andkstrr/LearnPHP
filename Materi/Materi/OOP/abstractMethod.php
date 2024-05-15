<?php
# Class yang tidak bisa di Instansiasi [ "Tidak bisa dibuat menjadi objek" ] dan berperan sebagai "Kerangka Dasar" bagi class turunannya
/*
abstract class Komputer {
    abstract public function lihatSpec();
    public static function hidupkanKomputer() {
        echo "Hidupkan Komputer";
    }
}

class Laptop extends Komputer {
    public function lihatSpec() {
        return "Lihat Spec Laptop ...";
    }
    public function beliLaptop() {
        return "Beli Laptop ...";
    }
}

$laptopBaru = new Laptop();
echo $laptopBaru->lihatSpec();
echo "<br>";
echo $laptopBaru->beliLaptop();
echo "<br>";
echo Komputer::hidupkanKomputer(); 

interface Hewan {
    public function suara();
    public function makanan();
}

class Harimau implements Hewan {
    public function suara() {
        return "Rawrr";
    }
    public function makanan() {
        return "Daging";
    }
}

$harimau = new Harimau();
echo $harimau->suara();
echo "<br>";
echo $harimau->makanan();
*/

interface Hewan {
    public function suara();
    public function makanan();
}

class MakhlukHidup {
    public function intro() {
        return "Termasuk Makhluk Hidup";
    }
}

class Harimau extends MakhlukHidup implements Hewan {
    public function suara() {
        return "Rawrr";
    } 
    public function makanan() {
        return "Daging";
    }
}

$harimau = new Harimau;
echo $harimau->suara();
echo "<br>";
echo $harimau->makanan();
echo "<br>";
echo $harimau->intro();