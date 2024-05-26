<?php

# Constanta
class User {
    const NAMA_WEB = "myweb.com";
    const NAMA_LAPTOP = "asus.com";
    const NAMA_USER = "andika";

    public function getWeb() {
        return self::NAMA_WEB;
    }
    public function getLaptop() {
        return self::NAMA_LAPTOP;
    }
    public function getUser() {
        return self::NAMA_USER;
    }
}


$user = new User;

echo $user->NAMA_WEB = "wikrama.com";
echo "<br>";
echo User::NAMA_WEB;
echo "<br>";
echo User::NAMA_LAPTOP;
echo "<br>";
echo User::NAMA_USER;
echo "<br>";
echo $user->getWeb();
echo "<br>";
echo $user->getLaptop();
echo "<br>";
echo $user->getUser();
echo "<br>------------------------------<br>";
// echo School::$name;  

/*
class Web {
    public static $title = "My Page";

    public function changeTitle() {
        self::$title = 'MyPage2';
        return self::$title;
    }

    public function changeTitle2() {
        return self::$title;
    }
}

class YourWeb extends Web {
    public function changeTitle() {
        self::$title = 'Your Page';
        return self::$title;
    }
}

echo Web::$title . "<br>";
$myweb = new Web;
echo $myweb->changeTitle() . "<br>";
echo   $myweb->changeTitle2();
echo "<br>";
$yourweb = new YourWeb;
echo $yourweb->changeTitle() . "<br>";
echo $yourweb->changeTitle2();
*/

class Web {
    protected static $title = "First Page";

    public static function getTitlePage() {
        echo "Nama Halaman ini adalah '" . self::$title . "'";
    }
}

class OtherWeb extends Web {
    public function __construct() {
        Web::getTitlePage();
    }

    public function getTitle() {
        return  Web::$title;
    }
}

$otherweb = new OtherWeb;
echo "<br>";
echo $otherweb->getTitle();
