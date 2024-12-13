<?php
session_start();
include 'connect.php';  

$target_dir = "uploads/";

if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);  
}


$ProductName = $_POST['ProductName'];
$Price = $_POST['Price'];
$Description = $_POST['Description'];

if (isset($_FILES["fileToUpload"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }

    if (file_exists($target_file)) {
        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.<br>";
        $uploadOk = 0;
    }

    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.<br>";
    } else {
    
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.<br>";

            $fileName = basename($_FILES["fileToUpload"]["name"]);
            $img_name = $fileName;  

            $sql = "INSERT INTO drinkandpastry (img_name, ProductName, Price, Description)
                    VALUES ('$img_name','$ProductName', '$Price', '$Description')";

            if (mysqli_query($conn, $sql)) {
                echo "<br>Product added successfully!<br>";
                header("Location: new_menu.php");  
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.<br>";
        }
    }
}

mysqli_close($conn);
?>