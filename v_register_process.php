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
    $name = $_POST["name"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, name, password) VALUES ('$username', '$name', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
        header("Location: v_login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// $conn->close();
?>
