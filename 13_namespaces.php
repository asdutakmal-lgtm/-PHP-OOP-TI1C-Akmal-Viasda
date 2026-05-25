<?php
namespace Kampus;

class Mahasiswa {
    public $nama;

    function __construct($nama) {
        $this->nama = $nama;
    }

    public function tampil() {
        echo "Mahasiswa: " . $this->nama . "<br>";
    }
}

$mhs = new \Kampus\Mahasiswa("Parsa Ramadhan");
$mhs->tampil();
?>
