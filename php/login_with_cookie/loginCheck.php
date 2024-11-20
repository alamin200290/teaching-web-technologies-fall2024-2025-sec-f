<?php
    session_start();

    if(isset($_POST['submit'])){

        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);

        if($username == null || empty($password) ){
            echo "Null data found!";
        }else if ($username == $password){
            //echo "Valid User!";
            //$_SESSION['flag'] = true;

            setcookie('flag', 'true', time()+3600, '/');
            $_SESSION['username'] = $username;
            header('location: home.php');
        }else{
            echo "Invalid user";
        }
    }else{
        //echo "Invalid request!";
        header('location: login.html');
    }

?>