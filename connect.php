<?php
$servername = "localhost";
// Enter your MySQL username below(default=root)
$username = "admin";
// Enter your MySQL password below
$password = "WnyP5C6CR2mN8GUI";
$dbname = "net_banking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    header("location:connection_error.php?error=$conn->connect_error");
    die($conn->connect_error);
}
?>
