<?php
    session_start();
    $login_user = $_SESSION["login_user"];

    $i_user = $login_user["i_user"];
    
    //t_board에 insert 완료 후 list.php로 이동.
