<?php
    session_start();
    
    if(isset($_REQUEST['submit'])){
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);

        if($username == "" || $password == ""){
            echo "Null username/password!";
        }else if($username == $password){
            //echo "valid user!";
            // $_SESSION['status'] = true;
            setcookie('status', 'true', time()+3000, '/');
            header('location: ../view/home.php');
        }else{
            echo "invalid user!";
        }
    }else{
        //echo "invalid request! please submit the form frist!";
        header('location: ../view/login.html');
    }

?>