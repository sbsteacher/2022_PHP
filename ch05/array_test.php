<?php
    $arr = [];
    $arr['a'] = 1;

    print $arr['a'];

    $arr['b'] = 10;
    if(isset($arr['b'])) {
        print $arr['b'];
    }
    