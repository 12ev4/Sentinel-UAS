<?php

session_start();

$servername = "localhost"; 
$username = "id22301757_root"; 
$password = "W@duhajagwmah0"; 
$database = "id22301757_localhost"; 

$conn = new mysqli($servername, $username, $password, $database);
$conn2 = new mysqli($servername, $username, $password, $database);
$conn3 = new mysqli($servername, $username, $password, $database);

$sqlCheckout = "SELECT * FROM checkout WHERE status='PENDING'";
$resultCheckout = $conn->query($sqlCheckout);

if ($resultCheckout->num_rows > 0) {
    $rowCheckout = $resultCheckout->fetch_assoc();
    $checkout_id = $rowCheckout["checkout_id"];
    $sqlCheckoutItem = "SELECT * FROM checkout_item WHERE checkout_id= $checkout_id";
    $resultCheckoutItem = $conn->query($sqlCheckoutItem);
    $resultCheckoutItem2 = $conn2->query($sqlCheckoutItem);
    $resultCheckoutItem3 = $conn3->query($sqlCheckoutItem);
    $totalPrice = 0;
if ($resultCheckoutItem3->num_rows > 0) {
    while ($row = $resultCheckoutItem3->fetch_assoc()) {
        $totalPrice += $row['price'];
    }

} else {
    echo "No items found";
}
}


?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <title>Material Style</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon.png?v=3">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="assets/css/preload.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.light-blue-500.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>
    <div class="ms-site-container">
      <!-- Modal -->

     
      <header class="header">
    <a href="#" class="logo">
        <img src="images/image1.png" alt="">
    </a>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="index.php#about">About</a>
        <a href="index.php#products">Products</a>
        <a href="index.php#review">Review</a>
        <a href="index.php#contact">Contact</a>
        <a href="v_login.php">Account</a>
    </nav>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
    <?php 
    
    if ($resultCheckoutItem->num_rows > 0) {
        while($row = $resultCheckoutItem->fetch_assoc()) {
            
            echo "<div class='cart-item'>
            <form id='myForm' action='delete_item.php' method='GET'>
                    <input type='hidden' name='item_id' value='". $row['list_item_id'] ."'>
                    <button style='background-color: transparent;' type='submit'><span class='fas fa-times'></span></button>
                </form>
            <div class='content'>
                <h3>". htmlspecialchars($row['name']) ."</h3>
                <div class='price'>" . htmlspecialchars($row['price']) . "</div>
            </div>
        </div>";
            
        }
    }
     ?>
        <a href="checkout.php" class="btn">Checkout Now</a>
    </div>
  </header> 

    </header>  
    <div class="container" style="padding-top: 80px">
        <h1 class="right-line mb-4">Cart</h1>
        <div class="row">
          <div class="col-md-9">
            
            <?php 
    
    if ($resultCheckoutItem2->num_rows > 0) {
        while($row = $resultCheckoutItem2->fetch_assoc()) {
            
            echo "<div class='card mb-1'>
              <table class='table table-responsive table-no-border vertical-center'>
                <tr>
                  <td class='d-none d-sm-block'>
                     </td>
                  <td>
                    <h4 >".$row['name']."</h4>
                  </td>
                  <td>
                    <div class='form-inline input-number'>
                      <input type='text' class='form-control form-control-number' pattern='[0-9]*' value='1'> </div>
                  </td>
                  <td>
                    <span class='color-success'>".$row['price']."</span>
                  </td>
                  <td class='d-none d-sm-block'>
                <form>
                    <input type='hidden' id='list_item_id' name='list_item_id' value='".$row['list_item_id']."'>
                    <button  class='btn btn-danger' type='button' onclick='deleteItem()'><i class='zmdi zmdi-delete'></i> Delete Item</button>
                </form>
                  </td>
                </tr>
              </table>
            </div>";
            
        }
    }
     ?>
          </div>
          <div class="col-md-3">
            <div class="card card-success">
              <div class="card-header">
                <i class="fa fa-list-alt" aria-hidden="true"></i> Summary</div>
              <div class="card-block">
                <h3>
                  <strong>Total:</strong>
                  <span class="color-success"><?php print_r( number_format($totalPrice, 2))?></span>
                </h3>
                <a href="admin_page.php" class="btn btn-raised btn-success btn-block btn-raised mt-2 no-mb">
                  <i class="zmdi zmdi-shopping-cart-plus"></i> Purchase</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- container -->
      <section class="footer">

<div class="share">
   <a href="#" class="fab fa-facebook-f"></a>
   <a href="#" class="fab fa-twitter"></a>
   <a href="#" class="fab fa-instagram"></a>
   <a href="#" class="fab fa-linkedin"></a>
   <a href="#" class="fab fa-pinterest"></a>
</div>

<div class="links">
    <a href="index.php">Home</a>
    <a href="index.php#about">About</a>
    <a href="index.php#products">Products</a>
    <a href="index.php#review">Review</a>
    <a href="index.php#contact">Contact</a>
    <a href="v_login.php">Account</a>
</div>

<div class="credit">created by <span>Sentinel</span>|all right reserved</div>

</section>

    </div>
    <!-- ms-site-container -->
    <div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar">
      <div class="sb-slidebar-container">
       
        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <span class="badge-pill badge-pill-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <span class="badge-pill badge-pill-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
              <i class="zmdi zmdi-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="js/script.js"></script>
    <script>
function deleteItem() {
    // Retrieve the item ID from the form
    var itemId = document.getElementById("list_item_id").value;
    
    // Display a confirmation dialog
    var confirmDelete = confirm("Are you sure you want to delete this item?");
    
    // If user confirms, send the item ID to the PHP script
    if (confirmDelete) {
        // Send an AJAX request to the PHP script
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "delete_item copy.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Handle the response from the PHP script if needed
                alert(xhr.responseText);
            }
        };
        xhr.send("item_id=" + itemId);
    }
}
</script>

  </body>
</html>