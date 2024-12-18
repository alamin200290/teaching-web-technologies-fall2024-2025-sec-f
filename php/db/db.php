<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    //var_dump($con);
    //$sql = 'select * from users';
    //$result = mysqli_query($con, $sql);
    //$row = mysqli_fetch_assoc($result);
    //$row1 = mysqli_fetch_assoc($result);
    //print_r($row);
    //print_r($row1);
    //var_dump($result);
    
    // for($i=0; $i<mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }

    // while($row = mysqli_fetch_assoc($result)){
    //     print_r($row);
    //     echo "<br>";
    // }

    $sql = "insert into users VALUES('', 'cse', '123', 'cse@aiub.edu')";
    if(mysqli_query($con, $sql)){
        echo "Success";
    }else{
        echo "Error";   
    }

    
?>