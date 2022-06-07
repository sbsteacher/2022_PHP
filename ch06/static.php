<?php
    function inc()
    {
        static $i = 1;
        print $i++ . "<br>";
    }

    $z = 100;
    function inc2()
    {
        global $z;
        print $z . "<br>";
        $z += 1;
    }

    inc2();
    print $z . "<br>";
    /*
    for($i=0; $i<10; $i++)
    {
        inc();
    }
    */
?>