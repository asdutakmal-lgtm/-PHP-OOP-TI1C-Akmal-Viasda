<?php
class Counter {
    public static $count = 0;

    function __construct() {
        self::$count++;
    }
}

$a = new Counter();
$b = new Counter();
$c = new Counter();

echo "Jumlah object: " . Counter::$count . "<br>";
?>
