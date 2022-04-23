<?php 
    if(session_status()>=0){
    session_start();
    session_unset();
    session_destroy();
    echo "<br> You have been logged out"; 
    }
    header("refresh: 0.5; url=index.php");
?>