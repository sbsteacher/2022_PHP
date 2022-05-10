<?php
    $name = "홍길동";
    $age = 22;
    $height = 177.32;
    $blood_type = 'O';

    $str = sprintf("제 이름은 %s입니다. 나이는 %4d세이고, 키는 %.2fcm입니다. 혈액형은 %s입니다."
    , $name, $age, $height, $blood_type);

    print $str;