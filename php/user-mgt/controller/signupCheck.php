<?php
    require_once('../model/userModel.php');
    if(isset($_POST['submit'])){
        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);
        $email  =  trim($_REQUEST['email']);

        if($username == null || empty($password) || empty($email) ){
            echo "Null data found!";
        }else {
            $status = addUser($username, $password, $email);
            if($status){
                header('location: ../view/login.html');
            }else{
                header('location: ../view/signup.html');
            }
        }
    }else{
        header('location: ../view/signup.html');
    }

?>