<?php
include 'connect.php';

// Collect form data
$img_name = isset($_POST['img_name']) && !empty($_POST['img_name']) ? $_POST['img_name'] : '';
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['YourEmail'];
$Role = isset($_POST['Role']) && !empty($_POST['Role']) ? $_POST['Role'] : 'user';
$Password = $_POST['Password'];
$Status = isset($_POST['Status']) && !empty($_POST['Status']) ? $_POST['Status'] : 'Active';
$ConfirmPassword = $_POST['ConfirmPassword'];

// tawag dito super global variable and since naka post ung lagay mga post method kukunin katulad sa mga form
// katulad ng password which is naka form ito sa sign up form.  
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate password confirmation
    if ($Password !== $ConfirmPassword) {
        // dito yung parameter na "error"                                   
                                    //here eto ↓        
       header("location: signup.php?error=password_mismatch");
    } else {
        // Hash the password before storing it
        // sample neto $2y$10$ER/AMURXkaHsb2yY8FGlpuesJUdsdcOji5YuAD2m9VfYr0eHcWv5a
        $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
        
       //insert ito sa db table na signupusers 
        $sql = "INSERT INTO signupusers (img_name, FirstName, LastName, YourEmail, Role, Password, Status)
                VALUES ('$img_name','$FirstName', '$LastName', '$Email', '$Role', '$hashedPassword', '$Status')";

        // Execute the SQL query and then after successful na signup reredirect ung user sa login para maglogin
        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
            exit;
        } else {
            // obvious mag eerror pag hindi gumana 
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
?>
