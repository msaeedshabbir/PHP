<?php
if(isset($_POST['submit'])){
    $targetFile =  basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (limit to 5MB in this example)
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow only certain file formats (e.g., only allow image files)
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "The file ". htmlspecialchars(basename($_FILES["fileToUpload"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    
}        

?>

<!DOCTYPE html>
<html>



<head>
    <title>File Upload Form</title>
</head>

<body>

    <h2>Upload a File</h2>

    <form action="" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload">
        <input type="submit" value="Upload" name="submit">






    </form>

</body>

</html>

CREATE AN INDEX.PHP FILE WITH HTML 5 DESIGN REGISTRATION FORM WITH FIELDS FOR NAME EMAIL PHONE NUMBER ADDRESS AND
PRODUCT MODEL.
INCLUDE APPROPRIATE LABELS, INPUT TYPES ( TEXT, EMAIL, TEL) AND a dropdown (select for prodct Model)