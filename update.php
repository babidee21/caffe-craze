<?php
include "connect.php";
session_start();

if (!isset($_SESSION['id'])) {
    echo "You must be logged in to update your information."; //if wala kang id hindi mo ma uupdate acc mo
    exit;
}

//collect data
$id = $_SESSION['id'];

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['YourEmail'];
$Role = $_POST['Role'];
$Status = $_POST['Status'];

$target_dir = "uploads/";
$uploadOk = 1;

if (!empty($_FILES["fileToUpload"]["name"])) {
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($_FILES["fileToUpload"]["error"] !== UPLOAD_ERR_OK) {
        echo "File upload error: " . $_FILES["fileToUpload"]["error"];
        exit;
    }

    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    if (!in_array($imageFileType, ["jpg", "jpeg", "png", "gif"])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            $fileName = basename($_FILES["fileToUpload"]["name"]);

            // Update image 
            $sql = "UPDATE signupusers SET img_name='$fileName' WHERE id=$id";
            if (mysqli_query($conn, $sql)) {
                $_SESSION['profile_image'] = $fileName; // Update session

                if ($_SESSION['Role'] == 'Admin' || $_SESSION['Role'] === 'Super Admin') {
                    header("Location: account.php");
                    exit();
                }
            } else {
                echo "Error updating image: " . mysqli_error($conn);
                exit;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }
}

if ($FirstName) {
    $sql = "UPDATE signupusers SET FirstName='$FirstName' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['FirstName'] = $FirstName; 

        if ($_SESSION['Role'] == 'Admin' || $_SESSION['Role'] === 'Super Admin') {
            header("Location: account.php");
            exit(); // kaya may if dito na admin/super admin para ma redirect sa account.php if hindi
            //ma didirect ka sa may myaccount.php which is for user only if na direct ka doon mag kukulang ung nav bar mo kase naka set role ka na admin/super admin
        }
    } else {
        echo "Error updating FirstName: " . mysqli_error($conn);
        exit();
    }
}

if ($LastName) {
    $sql = "UPDATE signupusers SET LastName='$LastName' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['LastName'] = $LastName;
          
        if ($_SESSION['Role'] == 'Admin' || $_SESSION['Role'] === 'Super Admin') {
            header("Location: account.php");
            exit();
        }
    } else {
        echo "Error updating LastName: " . mysqli_error($conn);
        exit();
    }
}

if ($Email) {
    $sql = "UPDATE signupusers SET YourEmail='$Email' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        $_SESSION['YourEmail'] = $Email;
        
        if ($_SESSION['Role'] == 'Admin' || $_SESSION['Role'] === 'Super Admin') {
            header("Location: account.php"); 
            exit();
        }
    } else {
        echo "Error updating YourEmail: " . mysqli_error($conn);
        exit();
    }
}

// Deactive n activate user's account

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the current status of the user
    $sql = "SELECT Status FROM signupusers WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentStatus = $row['Status'];

        // Toggle the status
        $newStatus = ($currentStatus == 'Active') ? 'Inactive' : 'Active';

        // Update the status in the database
       $sql = "UPDATE signupusers SET Status = '$newStatus' WHERE id = $id";

        if (mysqli_query($conn, $sql)) {
            $_SESSION['Status'] = $newStatus;  
           
            if ($_SESSION['id'] == $id && $newStatus == 'Inactive') {
                session_destroy();
                header("Location: login.php");
                exit();

            }

            header("Location: Users_column.php");  
            exit();
        } else {
            echo "Error updating status: " . mysqli_error($conn);
        }
    } else {
        echo "User not found.";
    }
} else {
    echo "No user ID specified.";
}



header("Location: myaccount.php");
exit();

mysqli_close($conn);
?>
