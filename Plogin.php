<?php
    require('connection.php');

    if(isset($_POST['uname']))
    {
        $uname= $_POST['uname'];
        $pas = $_POST['pass'];
        $q="select pass from user where fname='$uname'";
        $res=mysqli_query($con,$q);
        if(mysqli_num_rows($res)>0) {
            $arr=mysqli_fetch_assoc($res);
            $db_pass= $arr['pass'];
            if($db_pass==$pas)
            {
                header('location:Index.php');
            }
            else
                echo "login failed";
        }
        else
            echo "Invalid user";

        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="" method="POST">
        <input type="text" name="uname" id="" placeholder="User Name">
        <input type="password" name="pass" id="" placeholder="Password">
        <input type="submit" value="Send" name="btn">

    </form>

</body>

</html>