<?php
abstract class Kendaraan {
    abstract public function jalan();

    public function info() {
        echo "ini kendaraan<br>";
    }
}

class Motor extends Kendaraan {
    public function jalan() {
        echo "motor melaju kencang<br>";
    }
}

class Sepeda extends Kendaraan {
    public function jalan() {
        echo "sepeda dikayuh pelan<br>";
    }
}

$motor = new Motor();
$motor->jalan();
$motor->info();

$sepeda = new Sepeda();
$sepeda->jalan();
?>
