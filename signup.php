<?php
    require('connection.php');

    if(isset($_POST['fname']))
    {
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pass=$_POST['pass'];


    $q="insert into user (fname,lname, pass) values ('$fname','$lname','$pass')";
    $r= mysqli_query($con,$q);
    if($r==1)
        echo "User Registered";
    else
        echo "Registration Failed";
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
    <form action="signup.php" method="post">
        <input type="text" name="fname" id="" placeholder="Enter your fname">
        <input type="text" name="lname" id="" placeholder="Enter your lname">
        <input type="password" name="pass" id="" placeholder="User your password">
        <input type="submit" name="signup" value="Signup">
    </form>

</body>

</html>