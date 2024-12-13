<?php
include 'connect.php';
session_start();

if (isset($_GET['id'])) {
    $productID = $_GET['id'];

    $productID = mysqli_real_escape_string($conn, $productID);

    $sql = "DELETE FROM drinkandpastry WHERE id = $productID";

    if (mysqli_query($conn, $sql)) {
        echo "Product Deleted Successfully";

        header("Location: new_menu.php");
        exit;
    } else {
        echo "Error deleting product: " . mysqli_error($conn);
    }
} else {
    echo "Product ID is not provided!";
}

mysqli_close($conn);
?>
