<?php
    session_start();
    if(isset($_POST['submit'])){
        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
        $email  =  trim($_REQUEST['email']);

        if($username == null || empty($password) || empty($email) ){
            echo "Null data found!";
        }else {
            $user = ['username'=> $username, 'password'=> $password, 'email'=> $email];
            $_SESSION['user'] = $user;
            header('location: login.html');
        }
    }else{
        header('location: signup.html');
    }

?>