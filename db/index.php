<?php

    $con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
    $sql = "insert into users values(null, 'AIUB', 'AIUB', 'aiub@aiub.edu')";
    if(mysqli_query($con, $sql)){
        echo "Success!";
    }else{
        echo "DB Error!";
    }
    
    $sql1 = "select * from users";
    $result = mysqli_query($con, $sql1);
    //print_r($result);
    //$row = mysqli_fetch_assoc($result);
    // $row1 = mysqli_fetch_assoc($result);
    // print_r($row);
    // print_r($row1);

    // for ($i=0; $i <= mysqli_num_rows($result); $i++){
    //     $row = mysqli_fetch_assoc($result);
    //     print_r($row);
    //     echo "<br>";
    // }
?>

   <table border=1> 
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>Password</td>
                <td>EMAIL</td>
            </tr>
<?php
    while($row = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?=$row['username']?></td>
            <td><?=$row['password']?></td>
            <td><?=$row['email']?></td>
        </tr>

 <?php   } ?>
    </table>