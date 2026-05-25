<?php
class Coba {
    public $nama;

    function __construct($nama) {
        $this->nama = $nama;
        echo $this->nama . " dibuat<br>";
    }

    function __destruct() {
        echo $this->nama . " dihapus<br>";
    }
}

$obj = new Coba("objek1");
echo "script jalan<br>";
?>
