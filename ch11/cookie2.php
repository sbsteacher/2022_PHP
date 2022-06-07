<?php
    $cookie_key = "aaa";
   
    echo "Country : ", $_COOKIE[$cookie_key], "<br>";

    setcookie($cookie_key, "한국");
    

    $country = $_COOKIE[$cookie_key];

    $country = 'UK';

    echo "Country : ",  $country, "<br>";

    /*
    unset($_COOKIE['country']);
    setcookie("country");
    */
    echo "Country : ", $_COOKIE[$cookie_key], "<br>";
    
?>