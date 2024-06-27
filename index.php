<?php
require('connection.php');

if(isset($_POST['name'])){

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $model =  $_POST['model'];

    $q = "INSERT INTO reg (name, email, phone, address, model) VALUES ('$name', '$email', '$phone', '$address', '$model')";

    $r = mysqli_query($con, $q);
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
    <title>Registration Form</title>
    <link href="Assets/css/finial.css" rel="stylesheet">
    <script src="Assets/js/jquery-3.7.1.min.js"></script>


    <script>
    function validateForm() {
        var name = document.getElementById("name").value;

        var email = document.getElementById("email").value;

        var phone = document.getElementById("phone").value;

        var address = document.getElementById("address").value;
        var model = document.getElementById("model").value;

        var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        var phonePattern = /^\d{10}$/;

        if (name == "") {
            alert("Name must be filled out");
            return false;
        }
        if (!emailPattern.test(email)) {
            alert("Please enter a valid email address");
            return false;
        }
        if (!phonePattern.test(phone)) {
            alert("Please enter a valid phone number (10 digits)");
            return false;
        }
        if (address == "") {
            alert("Address must be filled out");
            return false;
        }
        if (model == "") {
            alert("Please select a product model");
            return false;
        }
        return true;
    }
    </script>
</head>

<body>

    <div align="center">
        <div class="container">
            <h1>Registration Form</h1>
            <form action="" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>

                <label for="product_model">Product Model:</label>
                <select id="model" name="model" required>
                    <option value="">Select a model</option>
                    <option value="model1">P1</option>
                    <option value="model2">P2</option>
                    <option value="model3">P3</option>
                    <option value="model4">P4</option>
                </select>

                <input type="submit" name="submit" id="submit" value="Register">
            </form>
        </div>
    </div>

</body>

</html>