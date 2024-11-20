<?php 

    session_start();
    //unset($_SESSION['flag']);
    //session_destroy();
    setcookie('flag', 'true', time()-10, '/');
    header('location: login.html');

?>