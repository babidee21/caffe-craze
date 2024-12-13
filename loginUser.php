<?php
include "connect.php";
session_start();

$Email = $_POST['YourEmail'];
$Password = $_POST['Password'];


$sql = "SELECT * FROM signupusers WHERE YourEmail = '$Email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Fetch the user data
    while ($row = mysqli_fetch_assoc($result)) {
        $FirstName = $row['FirstName'];
        $LastName = $row['LastName'];
        $Role = $row['Role'];
        $Status = $row['Status'];  
        $HashedPassword = $row['Password'];  

        if (password_verify($Password, $HashedPassword)) {
          
            if ($Status === 'Active') {
                $_SESSION['id'] = $row['id'];
                $_SESSION['Role'] = $Role;
                $_SESSION['YourEmail'] = $Email;
                $_SESSION['FirstName'] = $FirstName;
                $_SESSION['LastName'] = $LastName;

                
                header("location: index.php");
                exit();
            } else {
                //
                header("location: error.php?error=Account is deactivated");
                exit();
            }
        } else {
           
            header("location: error.php?error=Invalid email or password");
            exit();
        }
    }
} else {
    
    header("location: error.php?error=Invalid email or password");
    exit();
}

mysqli_close($conn);
?>
