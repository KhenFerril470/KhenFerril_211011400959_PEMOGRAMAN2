<?php
$A = 123; // variabel global

function Test() {
    $A = "Test"; // variabel lokal
    echo "Variabel A berisi = $A\n";
}

Test();
echo "A di luar fungsi berisi = $A\n";
?>
