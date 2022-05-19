<?php
    $arr = array();

    /*
    $arr[0] = 10;
    $arr[1] = 20;
    $arr[2] = 30;
    $arr[3] = 40;
    $arr[4] = 50;
    */
    $val = 10;
    for($i=0; $i<20; $i++) {
        $arr[$i] = $val;
        $val += 10;
    }

    for($i=0; $i<count($arr); $i++) {
        print "arr[$i]: $arr[$i]<br>";    
    }

   
    