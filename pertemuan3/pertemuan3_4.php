<?php
if(isset($_POST['input1'])) {
    $nilai = intval($_POST['input1']);
    if($nilai % 2 == 0)
        echo "$nilai merupakan bilangan genap";
    else
        echo "$nilai merupakan bilangan ganjil";
}
?>
