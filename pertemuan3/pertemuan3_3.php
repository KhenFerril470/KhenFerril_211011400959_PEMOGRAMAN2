<?php
    if(isset($_POST['input1'])) {
        $nilai = intval($_POST['input1']);
        if($nilai >= 80)
            printf("Anda lulus dengan mendapatkan grade A");
        elseif($nilai >= 70)
            printf("Anda lulus dengan mendapatkan grade B");
        elseif($nilai >= 60)
            printf("Anda lulus dengan mendapatkan grade C");
        elseif($nilai >= 50)
            printf("Anda tidak lulus, grade D");
        else
            printf("Anda tidak lulus, grade E");
    }
    ?>