<?php
class Mahasiswa {
    public $nama;
    public $nim;

    function __construct($nama, $nim) {
        $this->nama = $nama;
        $this->nim = $nim;
    }

    public function tampil() {
        echo "Nama: " . $this->nama . " NIM: " . $this->nim . "<br>";
    }
}

$mhs = new Mahasiswa("Parsa", "12345");
$mhs->tampil();
?>
