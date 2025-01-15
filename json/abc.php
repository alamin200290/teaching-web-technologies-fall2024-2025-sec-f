<?php 
    //$json = $_REQUEST['mydata'];
    //$user = json_decode($json);
    
    $user = ['username'=>'alamin', 'email'=> 'alamin@aiub.edu', 'pass'=>123];
    echo json_encode($user);
?>