<?php
    session_start();
    if(isset($_COOKIE['flag'])){

    $users = [
        ['id'=>1, 'username'=>'alamin', 'email'=>'alamin@aiub.edu', 'password'=>123],
        ['id'=>2, 'username'=>'xyz', 'email'=>'alamin@aiub.edu', 'password'=>123],
        ['id'=>3, 'username'=>'abc', 'email'=>'alamin@aiub.edu', 'password'=>123],
        ['id'=>4, 'username'=>'pqr', 'email'=>'alamin@aiub.edu', 'password'=>123]
    ];
?>

<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
        <h2>User List </h2>
        <a href="home.php">Back</a> |
        <a href="logout.php">logout</a>

        <table border=1> 
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php 
                    for($i=0; $i< count($users); $i++){
            ?>
            <tr>
                <td><?php echo $users[$i]['id']; ?></td>
                <td><?php echo $users[$i]['username']; ?></td>
                <td><?=$users[$i]['email']?></td>
                <td>
                    <a href='edit.php?id=<?=$users[$i]['id']?>'> EDIT </a> |
                    <a href='delete.php'> DELETE </a> 
                </td>
            </tr>

            <?php } ?>
        </table>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>

