<?php
    session_start();
    if(isset($_COOKIE['flag'])){

        if(isset($_REQUEST['id'])){
            echo $_REQUEST['id'];
        }
        $user = ['id'=>4, 'username'=>'pqr', 'email'=>'alamin@aiub.edu', 'password'=>123];
?>

<html>
<head>
    <title>Signup</title>
</head>
<body>
        <h2> Edit User </h2>
        <form method="post" action="update.php" enctype="">
            Username: <input type="text" name="username" value="<?=$user['username']?>" /> <br>
            Password: <input type="password" name="password" value="<?=$user['password']?>" /> <br>
            Email: <input type="email" name="email" value="<?=$user['email']?>" /> <br>
                    <input type="submit" name="submit" value="Update" />
        </form>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>