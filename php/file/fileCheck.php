<?php

    //print_r($_FILES);
    $file_name = $_FILES['myfile']['name'];
    //$tmp = explode('.', $file_name);
    //echo $file_name;
    //print_r($tmp)

    $src = $_FILES['myfile']['tmp_name'];
    $des = 'upload/'.$file_name;

    if(move_uploaded_file($src, $des)){
        echo "success";
    }else{
        echo "Error";
    }
?>