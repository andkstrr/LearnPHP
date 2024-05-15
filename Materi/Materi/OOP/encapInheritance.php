<?php

class Siswa {
    public $nama;
    private $nis;

    public function __construct($nama, $nis) {
        $this->nama = $nama;
        $this->nis = $nis;
    }
    public function getNis() {
        return $this->nis;
    }
}


class SiswaKelas extends Siswa {
    public $rombel;
    public $rayon;

    public function __construct($nama, $nis, $rombel, $rayon) {
        parent::__construct($nama, $nis);
        $this->nama = $nama;
        $this->nis = $nis;
        $this->rombel = $rombel;
        $this->rayon = $rayon;
    }
    public function dataSiswa() {
        return "Nama: " . $this->nama . "<br> NIS: " . $this->nis . "<br> Rombel: " . $this->rombel . "<br> Rayon: " . $this->rayon;
    }
}

$siswa_kelas = new SiswaKelas("Andika Satrio Nurcahyo" , "12309526" , "PPLG X-4" , "Cicurug 8");

echo "<hr>";
echo $siswa_kelas->dataSiswa();
echo "<br>=======================<br>";


class Laptop {
    var $pemilik;
    public static $merk; # property static
    public static $ukuran_layar;
    
    public static function nyalakan_laptop() { # static method digunakan berfungsi memanggil method / property lain dalam satu class yang sama
        echo "Menyala <b>Abangkuhh</b>";
    }
    public function matikan_laptop() {
        # echo "Matikan Abangkuhh";
        self::nyalakan_laptop(); # self:: => untuk memanggil sebuah method / property lain, yang berada dalam satu class yang sama
    }
}

$laptop_dk = new Laptop();
$laptop_dk->pemilik = "Andika";
Laptop::$merk = "Asus N56V";
Laptop::$ukuran_layar = "16 inch";
echo "Pemilik: <b>" . $laptop_dk->pemilik ."</b> <br>";
echo "Dengan merk: <b>" . Laptop::$merk ."</b> <br>";
echo "Ukuran layar: <b>" . Laptop::$ukuran_layar ."</b> <br>";
echo $laptop_dk->matikan_laptop(); echo "<br>";
echo Laptop::nyalakan_laptop(); # Memanggil method static yang memanggil method tanpa perlu instansiasi class menjadi sebuah object 
echo "<br>=======================<br>";


// Encapsulation 
# Private
class Komputer {
    private $merk = "Axioo";

    public function getMerk() {
        return $this->merk;
    }
}

$komputer = new Komputer();
echo "Merk komputer saya: " . "<b>" . $komputer->getMerk() . "</b>";
# Mengakses property private, menggunakan method tambahan | getMerk() |
echo "<br>=======================<br>";


# Protected
class PC { # Parent Class
    protected $brand = "Acer";

    public function getBrand() {
        return $this->brand;
    }
}

# Inheritance [ Pewarisan ]
class PC2 extends PC { # Child Class
    public function namaBrand() {
        return $this->brand;
    }
    protected function brandLagi() {
        return $this->brand;
    }
}

$pComputer1 = new PC;
$pComputer2 = new PC2;
echo "Merk PC saya: " . "<b>" .$pComputer2->namaBrand() . "</b>";
# echo "Merk PC saya: " . "<b>" .$pComputer2->getBrand() . "</b>";
echo "<br>=======================<br>";

class Smartphone {
    public $layar;

    public function processor() {
        echo "Snapdragon 8, 2th gen";
    }
    public function getLayar() {
        return $this->layar;
    }
}

class Handphone extends Smartphone {
    public function getProcessor() {
        return $this->processor();
    }
}

$phone1 = new Smartphone();
$phone2 = new Handphone();
$phone1->layar = "Amoled";
$phone2->layar = "Gorilla Glass";

echo "Smartphone saya dengan layar: " . $phone1->layar . "<br>";
echo "dan menggunakan processor: ";
echo $phone1->processor() . "<br>";
echo "Handphone saya dengan layar: " . $phone2->layar . "<br>";
echo "dan menggunakan processor: "; 
echo $phone2->getProcessor();

?>
