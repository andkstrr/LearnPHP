<?php

class Manusia {
    public $age;
    protected $name;

    public function setManusia($name = null, $age = null) {
        $this->age = $age;
        $this->name = $name;
    }
}

class Anak extends Manusia {
    public function anakBerjalan() {
        echo $name . " sudah dapat berjalan";
    }
}

$orang = new Anak();
$orang = new Manusia();



?>