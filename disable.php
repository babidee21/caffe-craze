<?php
include "connect.php";
session_start();

 //!isset = not isset   
// checheck if naka log in si user if hindi reredirect sa login page
if (!isset($_SESSION['id'])) {
    echo "You must be logged in to perform this action."; //hindi mo toh ma peperform ung pag disable ng acc if walang nakitang id
    header("location: login.php");
    exit();
}

if (isset($_SESSION['id'])) {
    $id = ($_SESSION['id']); 
    // Fetch the current status of the user
    $sql = "SELECT Status FROM signupusers WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $currentStatus = $row['Status'];

        $newStatus = ($currentStatus == 'Active') ? 'Inactive' : 'Active';
        
        $sql = "UPDATE signupusers SET Status = '$newStatus' WHERE id = $id";
        
        if (mysqli_query($conn, $sql)) {
            $_SESSION['Status'] = $newStatus;
            session_destroy();
            header("location: index6c56.php");  
            exit();
        } else {
            echo "Error updating status: " . mysqli_error($conn);
        }
    } else {
        echo "User not found.";
        exit();
    }
} else {
    echo "No user ID specified.";
    exit();
}


mysqli_close($conn);
?>
