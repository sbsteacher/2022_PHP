<?php  
    session_start();  
    session_unset();
    //session_destroy();
    if(isset($_SESSION['var1'])) {
        echo $_SESSION['var1'], "<br>";
    }

   
    
    
?>
<a href="confirm.php">확인</a>