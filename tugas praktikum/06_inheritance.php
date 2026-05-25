<?php
class Hewan {
    public $nama;

    function __construct($nama) {
        $this->nama = $nama;
    }

    public function makan() {
        echo $this->nama . " sedang makan<br>";
    }
}

class Anjing extends Hewan {
    public function menggonggong() {
        echo $this->nama . " guk guk!<br>";
    }
}

$anjing = new Anjing("Doggy");
$anjing->makan();
$anjing->menggonggong();
?>
