<?php 
    session_start();
    session_destroy();
    header("location:Star.php");
    die();
?>