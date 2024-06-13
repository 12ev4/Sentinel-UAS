<?php

$servername = "localhost"; 
$username = "id22301757_root"; 
$password = "W@duhajagwmah0"; 
$database = "id22301757_localhost"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        session_start();
        $_SESSION["username"] = $username;

        header("Location: profil.php");
        exit(); 
    } else {
        echo "Invalid username or password";
    }
}

// $conn->close();
?>