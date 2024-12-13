<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signupform"; //pangalang database natin

//note: iba d ko na nilagyan ng comment meron naman nakalagay intindihin na lng if d pa rin gets search
//sa internet or w3schools

//good luck sa atin! <33 
//(i did what i can do T T)

// gawa ka connection :PPP
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT id FROM signupusers";
        // ung id sa signupusers
// tingnan mo if gagana uwu
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>


