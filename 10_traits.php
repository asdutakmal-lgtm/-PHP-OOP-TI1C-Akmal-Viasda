<?php
trait Salam {
    public function sapa() {
        echo "Halo semuanya!<br>";
    }
}

trait Perkenalan {
    public function kenalan($nama) {
        echo "Nama saya " . $nama . "<br>";
    }
}

class Orang {
    use Salam, Perkenalan;
}

$o = new Orang();
$o->sapa();
$o->kenalan("Parsa");
?>
