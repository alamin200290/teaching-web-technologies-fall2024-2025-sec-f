<?php 

    session_start();
    //unset($_SESSION['flag']);
    session_destroy();

    header('location: login.html');

?>