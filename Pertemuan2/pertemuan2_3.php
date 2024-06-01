<!DOCTYPE html>
<html>
<head>
    <title>Contoh Static Variabel</title>
</head>
<body>
    <h1>Variabel Static</h1>
    <?php
    function dicoba() {
        static $a = 0; // dengan static
        echo "Nilai a: ";
        echo $a;
        echo "<br>";
        $a++;
    }

    dicoba();
    dicoba();
    dicoba();
    dicoba();
    ?>
</body>
</html>
