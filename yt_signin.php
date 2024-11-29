<?php

$server = "localhost";
$database = "db._.yubik";
$username = "root";
$password = "";

$con = new mysqli($server, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];


$sql = "SELECT * FROM youtube WHERE Email = '$email' ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
   
    $user = $result->fetch_assoc();

    
    if (password_verify($password, $user['Password'])) {
        
        session_start();
        $_SESSION["user_id"] = $user["id"];
        $_SESSION["username"] = $user["Username"];
        
        
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Incorrect password";
    }
} else {
    echo "No account found with this email";
}

$con->close();
?>
