<?php
class Buah {
    public $nama;
    public $warna;

    public function info() {
        echo "Buah: " . $this->nama . " warna: " . $this->warna . "<br>";
    }
}

$buah1 = new Buah();
$buah1->nama = "Mangga";
$buah1->warna = "Kuning";
$buah1->info();

$buah2 = new Buah();
$buah2->nama = "Apel";
$buah2->warna = "Merah";
$buah2->info();
?>
