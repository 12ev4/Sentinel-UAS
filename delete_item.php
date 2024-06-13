<?php
session_start();

if(isset($_GET["item_id"])) {
    $item_id = $_GET["item_id"];

    $servername = "localhost"; 
    $username = "id22301757_root"; 
    $password = "W@duhajagwmah0"; 
    $database = "id22301757_localhost"; 
    
    $conn = new mysqli($servername, $username, $password, $database);
    $conn2 = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error || $conn2->connect_error) {
        die("Connection failed: " . $conn->connect_error . " | " . $conn2->connect_error);
    }}

    $sql = " DELETE FROM checkout_item WHERE list_item_id = $item_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

   
?>