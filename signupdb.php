<?php
    require('connection.php');

    if(isset($_POST['user_fname']))
    {
    $user_fname=$_POST['user_fname'];
    $user_lname=$_POST['user_lname'];
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];



    $q="insert into custmer (user_fname, user_lname, user_email, user_password) values ('$user_fname','$user_lname','$user_email', '$user_password')";
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
    <form action="signupdb.php" method="post">
        <input type="text" name="user_fname" id="" placeholder="Enter your fname">
        <input type="text" name="user_lname" id="" placeholder="Enter your lname">
        <input type="text" name="user_email" id="" placeholder="Enter your email">
        <input type="text" name="user_password" id="" placeholder="Enter your password">

        <input type="submit" name="signup" value="Signup">
    </form>

</body>

</html>