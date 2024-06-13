<?php

session_start();

if(!isset($_SESSION["username"])) {
    header("Location: v_login.php");
    exit();
}

$servername = "localhost"; 
$username = "id22301757_root"; 
$password = "W@duhajagwmah0"; 
$database = "id22301757_localhost";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION["username"];

$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    // echo "Username: " . $row["username"] . "<br>";
    // echo "Email: " . $row["email"] . "<br>";
    $name=$row["name"];
   
} else {
    echo "User data not found";
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
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/product-1.jpg" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">Rp.15.000</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/product-2.jpg" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">Rp.15.000</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/product-3.jpg" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">Rp.15.000</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="images/product-4.jpg" alt="">
            <div class="content">
                <h3>cart item 04</h3>
                <div class="price">Rp.15.000</div>
            </div>
        </div>
        <a href="#" class="btn">Checkout Now</a>
    </div>

    </header>  
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="row" style="padding-top: 120px;">
              <div class="col-lg-12 col-md-6 order-md-1">
                <div class="card animated fadeInUp animation-delay-7">
                  <div class="ms-hero-bg-primary ms-hero-img-coffee">
                    <h3 class="color-white index-1 text-center no-m pt-4"><?php
                    print_r($name);
                    ?></h3>
                    <div class="color-medium index-1 text-center np-m">@<?php
                    print_r($username)?></div>
                    <h3 class="color-primary">Bio</h3>
                  </div>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 order-md-3 order-lg-2">
                <a href="v_logout.php" class="btn btn-danger btn-raised btn-block animated fadeInUp animation-delay-12">
                  <i class="zmdi zmdi-delete"></i> Log Out</a>
              </div>
            
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row">
              <div class="col-sm-4">
                <div class="card card-info card-block text-center wow zoomInUp animation-delay-2">
                  <h2 class="counter color-info">450</h2>
                  <i class="fa fa-4x fa-file-text color-info"></i>
                  <p class="mt-2 no-mb lead small-caps color-info">articles</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card card-success card-block text-center wow zoomInUp animation-delay-5">
                  <h2 class="counter color-success">64</h2>
                  <i class="fa fa-4x fa-briefcase color-success"></i>
                  <p class="mt-2 no-mb lead small-caps color-success">projects done</p>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="card card-royal card-block text-center wow zoomInUp animation-delay-4">
                  <h2 class="counter color-royal">600</h2>
                  <i class="fa fa-4x fa-comments-o color-royal"></i>
                  <p class="mt-2 no-mb lead small-caps color-royal">comments</p>
                </div>
              </div>
            </div>
            <div class="card card-primary animated fadeInUp animation-delay-12">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-account-circle"></i> General Information</h3>
              </div>
              <table class="table table-no-border table-striped">
                <tr>
                  <th>
                    <i class="zmdi zmdi-account mr-1 color-success"></i> User Name</th>
                  <td>vic_smith</td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-face mr-1 color-warning"></i> Fullname</th>
                  <td>Victoria Smith</td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-email mr-1 color-danger"></i> Email</th>
                  <td>
                    <a href="#">mail@example.com</a>
                  </td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-link mr-1 color-info"></i> Website</th>
                  <td>
                    <a href="#">www.example.com</a>
                  </td>
                </tr>
                <tr>
                  <th>
                    <i class="zmdi zmdi-calendar mr-1 color-royal"></i> Member Since</th>
                  <td>12/11/2015</td>
                </tr>
              </table>
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
  </body>
</html>