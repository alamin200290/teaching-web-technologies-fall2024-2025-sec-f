<?php
    session_start();
    if(isset($_POST['submit'])){
        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);

        if($username == null || empty($password) ){
            echo "Null data found!";
        }else if ($_SESSION['user']['username'] == $username && $_SESSION['user']['password']==$password){

            setcookie('flag', 'true', time()+3600, '/');
            $_SESSION['username'] = $username;
            header('location: ../view/home.php');
        }else{
            //var_dump($_SESSION['user']);
            echo "Invalid user";
        }
    }else{
        //echo "Invalid request!";
        header('location: ../view/login.html');
    }
?>