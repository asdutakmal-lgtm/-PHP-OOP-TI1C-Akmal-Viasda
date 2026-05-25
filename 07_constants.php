<?php
class Kuliah {
    const NAMA_KAMPUS = "Universitas Harapan";
    const SKS_MAX = 24;

    public function info() {
        echo "Kampus: " . self::NAMA_KAMPUS . "<br>";
        echo "Maks SKS: " . self::SKS_MAX . "<br>";
    }
}

echo Kuliah::NAMA_KAMPUS . "<br>";
echo Kuliah::SKS_MAX . "<br>";

$k = new Kuliah();
$k->info();
?>
