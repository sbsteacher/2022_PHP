<?php
    $filep = fopen("C:/Apache24/htdocs/lorem.txt", "r");

    if(!$filep) { 
        die("파일을 열 수 없습니다.");
    }
    print "파일을 열었습니다.<br>";

    while($line = fgets($filep, 10)) {
        print $line . "<br>";
    }

    fclose($filep);

   

