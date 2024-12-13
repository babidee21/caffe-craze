<?php
session_start();
include "connect.php";

if (!isset($_SESSION['id'])) {
     //!isset = not isset   
// checheck if naka log in si user if hindi reredirect sa login page
    header("Location: login.php"); 
    exit();
}

$id = $_SESSION['id'];  // Get user ID from session

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $currentPassword = $_POST['CurrentPassword'];  
    $newPassword = $_POST['Password'];  
    $confirmPassword = $_POST['ConfirmPassword']; 

    $sql = "SELECT Password FROM signupusers WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_assoc($result);
        $storedPassword = $row['Password'];

        if (!password_verify($currentPassword, $storedPassword)) {

            header("location: passUpdate.php?error=password_mismatch");
            exit();
        }

        if ($newPassword !== $confirmPassword) {
            header("location: passUpdate.php?error=password_mismatch");
            exit();
        }

        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $updateSql = "UPDATE signupusers SET Password = '$hashedPassword' WHERE id = $id";

        if (mysqli_query($conn, $updateSql)) {
            echo "Password updated successfully!";
            session_destroy();
            header("location: login.php");
        } else {
            echo "Error updating password: " . mysqli_error($conn);
        }
    } else {
        echo "User not found!";
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Password</title>
</head>
<style>
    body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #5a3e36; /* Brown color */
            margin: 0;
            padding: 0;
            background-image: url(./uploads/caffee\ bg.jpg);
            background-size: cover;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url(./uploads/caffee\ bg.jpg);
            background-size: cover;
            background-position: center;
            filter: blur(8px); 
            z-index: -1;  
        }

        h2 {
            text-align: center;
            color: #ffd5a6; /* Brown color */
        }
        form {
            width: 400px;
            margin: 0 auto;
            padding: 35px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            font-size: 14px;
            color: #5a3e36;
            
        }
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            background-color: #5a3e36; /* Brown color */
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            background-color: #4b3222; /* Darker brown on hover */
        }
</style>
<body>

<h2>Update Your Password</h2>
<form method="POST" action="passUpdate.php">
<?php
if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch') {
    echo '<p style="color: red;">Current passwords do not match!</p>';
    //if nag error magpopo out toh sa taas ng confirm password 
    // && AND ibig sabihin neto kinocompare niya if both nag true lalabas "Passwords do not match!"
}
?>
    <label for="CurrentPassword">Current Password:</label><br>
    <input type="password" id="CurrentPassword" name="CurrentPassword" required><br><br>

    <label for="Password">New Password:</label><br>
    <input type="password" id="Password" name="Password" required><br><br>
    <?php
if (isset($_GET['error']) && $_GET['error'] == 'password_mismatch') {
    echo '<p style="color: red;">New passwords do not match!</p>';
    //if nag error magpopo out toh sa taas ng confirm password 
    // && AND ibig sabihin neto kinocompare niya if both nag true lalabas "Passwords do not match!"
}
?>
    <label for="ConfirmPassword">Confirm New Password:</label><br>
    <input type="password" id="ConfirmPassword" name="ConfirmPassword" required><br><br>

    <button type="submit">Update Password</button>
</form>

</body>
</html>
