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
    }
    
    if($_SERVER["REQUEST_METHOD"] == "GET") {
    
        $username = $_SESSION["username"];

        $sqlGetUser = "SELECT * FROM users WHERE username=?";
        $stmtUser = $conn->prepare($sqlGetUser);
        $stmtUser->bind_param("s", $username);
        $stmtUser->execute();
        $resultUser = $stmtUser->get_result();

        if ($resultUser->num_rows > 0) {
            $rowUser = $resultUser->fetch_assoc();
            $user_id = $rowUser["user_id"];
            $name = $rowUser["name"];
        } else {
            echo "User data not found";
        }
    
        $sqlItem = "SELECT * FROM item WHERE item_id=?";
        $stmtItem = $conn2->prepare($sqlItem);
        $stmtItem->bind_param("i", $item_id);
        $stmtItem->execute();
        $resultItem = $stmtItem->get_result();

        if ($resultItem->num_rows > 0) {
            $rowItem = $resultItem->fetch_assoc();
            $itemName = $rowItem["name"];
            $itemPrice = $rowItem["price"];
        } else {
            echo "Item data not found";
        }
    
        $sqlCheckout = "SELECT * FROM checkout WHERE status='PENDING'";
        $resultCheckout = $conn->query($sqlCheckout);

        if ($resultCheckout->num_rows > 0) {
            $rowCheckout = $resultCheckout->fetch_assoc();
            $checkout_id = $rowCheckout["checkout_id"];
            $sqlAddItem = "INSERT INTO checkout_item (name, price, checkout_id) VALUES (?, ?, ?)";
            $stmtAddItem = $conn->prepare($sqlAddItem);
            $stmtAddItem->bind_param("sdi", $itemName, $itemPrice, $checkout_id);
            $stmtAddItem->execute();
            header("Location: index.php");
        } else {
            $sqlAddCheckout = "INSERT INTO checkout (user_id, name, checkout_date, total_price, status) VALUES (?, ?, '06/08/2024', 0, 'PENDING')";
            $stmtAddCheckout = $conn->prepare($sqlAddCheckout);
            $stmtAddCheckout->bind_param("is", $user_id, $name);
            if ($stmtAddCheckout->execute()) {
                $checkout_id = $conn->insert_id;
                $sqlAddItem = "INSERT INTO checkout_item (name, price, checkout_id) VALUES (?, ?, ?)";
                $stmtAddItem = $conn->prepare($sqlAddItem);
                $stmtAddItem->bind_param("sdi", $itemName, $itemPrice, $checkout_id);
                $stmtAddItem->execute();
                header("Location: index.php");
            } else {
                echo "Error: " . $stmtAddCheckout->error;
            }
        }
    }
} else {
    echo "No parameter received";
}
?>
