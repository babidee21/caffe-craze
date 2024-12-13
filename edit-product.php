<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM drinkandpastry WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $product = mysqli_fetch_assoc($result);

    if ($product) {
        $productName = $product['ProductName'];
        $price = $product['Price'];
        $description = $product['Description'];
        $img_name = $product['img_name'];
    } else {
        echo "Product not found!";
        exit;
    }
} else {
    echo "No product ID provided!";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $img_name = mysqli_real_escape_string($conn, $_FILES['image']['name']);
        $img_tmp = $_FILES['image']['tmp_name'];
        $img_path = 'uploads/' . basename($img_name);

        if (move_uploaded_file($img_tmp, $img_path)) {
            $sql = "UPDATE drinkandpastry 
                    SET ProductName = '$productName', Price = $price, Description = '$description', img_name = '$img_name' 
                    WHERE id = $id";

         header("location: new_menu.php");
        } else {
            echo "Failed to upload image.";
            exit;
        }
    } else {

        $sql = "UPDATE drinkandpastry 
                SET ProductName = '$productName', Price = $price, Description = '$description' 
                WHERE id = $id";

                header("location: new_menu.php");
    }

    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully!";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<style>
 /* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body background */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f5f2; /* Light cream background */
    color: #5a3825; /* Dark brown text */
    padding: 20px;
    background-image: url(./uploads/caffee\ bg.jpg);
    background-size: cover;
    
}

body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(./uploads/caffee\ bg.jpg);
    background-size: cover;
    filter: blur(8px); /* Apply blur to the background image */
    z-index: -1; /* Position the blurred background behind the content */
}


/* Form container */
form {
    background: #fff8f0; /* Soft beige form background */
    padding: 20px;
    border: 2px solid #5a3825; /* Dark brown border */
    border-radius: 8px;
    width: 400px;
    margin: 0 auto;
    box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.1);
}

/* Form labels */
form label {
    font-size: 16px;
    font-weight: bold;
    display: block;
    margin-bottom: 8px;
}

/* Input fields */
form input[type="text"],
form input[type="number"],
form input[type="file"],
form textarea {
    width: 100%;
    padding: 8px 10px;
    margin-bottom: 16px;
    border: 1px solid #b8977e; /* Light brown */
    border-radius: 5px;
    font-size: 14px;
}

/* Textarea customization */
form textarea {
    height: 100px;
    resize: none;
}

/* Submit button */
form button {
    background: #5a3825; /* Dark brown */
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    width: 100%;
    text-transform: uppercase;
    font-weight: bold;
}

form button:hover {
    background: #7a5336; /* Lighter brown */
}

</style>
<!-- Product Edit Form -->
<form method="post" enctype="multipart/form-data">
    <label for="productName">Product Name</label>
    <input type="text" name="productName" value="<?php echo $productName; ?>" required>
    
    <label for="price">Price</label>
    <input type="number" name="price" value="<?php echo $price; ?>" required>
    
    <label for="description">Description</label>
    <textarea name="description"><?php echo $description; ?></textarea>
    
    <!-- Optionally add file upload for image -->
    <label for="image">Product Image</label>
    <input type="file" name="image">

    <button type="submit">Update Product</button>
</form>
