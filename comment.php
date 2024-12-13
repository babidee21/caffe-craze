<?php
include "connect.php";  

$user = $_POST['username'];
$message = $_POST['message'];
$product_id = $_POST['product_id']; 


if (empty($user) || empty($message) || empty($product_id)) {
    echo "All fields are required.";
    exit;
}

$sql = "INSERT INTO comments (username, message, product_id) VALUES ('$user', '$message', $product_id)";

if ($conn->query($sql) === TRUE) {
    echo "New comment added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


header("Location: product-detail.php?id=$product_id");
exit;
?>
