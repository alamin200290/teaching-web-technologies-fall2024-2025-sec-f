<?php
    session_start();

    if(isset($_POST['submit'])){

        $username  =  $_REQUEST['username'];
        $password  =  $_REQUEST['password'];

        if($username == null || $password == null){
            echo "Null data found!";
        }else if ($username == $password){
            //echo "Valid User!";
            $_SESSION['flag'] = true;
            header('location: home.php');
        }else{
            echo "Invalid user";
        }
    }else{
        //echo "Invalid request!";
        header('location: name.html');
    }


    //print_r($_GET);
    //echo "Test";
?>