<?php
require('connection.php');
$p = "select id, fname, lname, picture from user order by id";
$res = mysqli_query($con, $p);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print data</title>
    <link rel="stylesheet" href="Assects/css/bootstrap.min.css" />
    <script src="Assects/js/jquery-3.7.1.min.js"></script>
</head>

<body>
    <div class="container-fluid">
        <table class="table table-bordered">
            <tr>
                <th> id</th>
                <th>fname</th>
                <th>lname</th>
                <th>picture</th>

                <?php
         if(mysqli_num_rows($res)>0) {
            while($arr=mysqli_fetch_assoc($res)){    
         
        ?>

            <tr>
                <td><?php  echo $arr[ "id"]; ?></td>
                <td><?php echo $arr["fname"]; ?></td>
                <td><?php   echo $arr[ "lname"]; ?> </td>
                <td><img src="Assets/images/<?php echo $arr['picture'] ?>" style="height:80px"></td>
            </tr>

            <?php
              }
            }
            ?>
        </table>
    </div>

</body>

</html>