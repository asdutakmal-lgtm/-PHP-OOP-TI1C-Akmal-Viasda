<?php
interface BisaNyanyi {
    public function nyanyi();
}

interface BisaNari {
    public function nari();
}

class Penyanyi implements BisaNyanyi {
    public function nyanyi() {
        echo "la la la...<br>";
    }
}

class Artis implements BisaNyanyi, BisaNari {
    public function nyanyi() {
        echo "artis nyanyi<br>";
    }

    public function nari() {
        echo "artis nari<br>";
    }
}

$p = new Penyanyi();
$p->nyanyi();

$a = new Artis();
$a->nyanyi();
$a->nari();
?>
