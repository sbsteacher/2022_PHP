<?php

    //비void
    function sum($n1, $n2) {
        print "((((( : " . $n1 + $n2 . "<br>";
        return $n1 + $n2;
    }

    function void_sum($n1, $n2) {
        print "sum : " . $n1 + $n2 . "<br>";
        return;
    }

    $n1 = 30;
    $n2 = 20;

    void_sum($n1, $n2);    
    void_sum($n1, $n2);    

    $result = sum($n1, $n2);
    print "썸썸 : " . sum($n1, $n2) . "<br>";
    print "썸 : $result <br>";
    print "sum : $result <br>";
    print "sum * 2 : " . ($result * 2) . "<br>";