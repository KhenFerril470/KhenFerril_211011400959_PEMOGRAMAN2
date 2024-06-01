<?php
$C = 123; // variabel global

function Test() {
    global $C; // variabel global digunakan di dalam fungsi
    echo "C pada fungsi berisi = $C\n";
}

Test();
echo "C di luar fungsi berisi = $C\n";
?>
