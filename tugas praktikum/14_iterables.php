<?php
function cetakSemua(iterable $data) {
    foreach ($data as $item) {
        echo $item . "<br>";
    }
}

$nilai = [80, 90, 75, 85, 95];
cetakSemua($nilai);
?>
