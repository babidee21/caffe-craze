<?php 

include 'connect.php';
session_start();


if (!isset($_SESSION['id'])) {
    echo "No user is logged in.";
    exit;
}

$id = $_SESSION['id'];

$sql = "DELETE FROM signupusers WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Account deleted successfully.";

    session_destroy();
    session_unset();

    header("location: index6c56.php");
    exit;
} else {
    echo "Error deleting account: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
