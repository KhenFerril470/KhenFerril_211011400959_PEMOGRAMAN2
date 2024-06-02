<?php
function repeat($text, $num = 10) {
    echo "<ol>\r\n";
    for ($i = 0; $i < $num; $i++) {
        echo "<li>$text</li>\r\n";
    }
    echo "</ol>";
}

// function repeat dipanggil menggunakan 2 argumen
repeat("I'm the best", 17);

// function repeat dipanggil menggunakan hanya 1 argumen
repeat("You're the man");
?>
