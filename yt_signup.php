<?php

$server = "localhost";
$database = "db._.yubik";
$username = "root";
$password = "";

$con = new mysqli($server, $username, $password, $database);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    echo "connected"; 
}

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];
$birthday = $_POST["birthday"];
$gender = $_POST["gender"];

if ($password !== $confirm_password) {
    echo "Passwords do not match";
    exit;
}



$sql = "INSERT INTO youtube (Username, Email, Password, Birthday, Gender) VALUES ('$username', '$email', '$password', '$birthday', '$gender')";

if ($con->query($sql) === TRUE) {
    header("Location: dashboard.php");
} else {
    echo "Error: " . $con->error;
}

$con->close();
?>
