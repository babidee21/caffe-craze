<?php
// Database connection
include 'connect.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product_id = $_POST['product_id'];
    $rating = $_POST['rating'];

    if ($rating >= 1 && $rating <= 5 && is_numeric($product_id)) {
        $sql = "INSERT INTO ratings (product_id, rating) VALUES ($product_id, $rating)";
        if (mysqli_query($conn, $sql)) {
            header("Location: product-detail.php?id=$product_id");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid rating or product ID.";
    }
}

mysqli_close($conn);
?>
