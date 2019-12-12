<?php   
    session_start();

    if(isset($_POST["loginsub"])){
        session_unset();
        session_destroy();
        header("Location: login.php");
    }

?>
