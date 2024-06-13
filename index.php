<?php

session_start();

$servername = "localhost"; 
$username = "id22301757_root"; 
$password = "W@duhajagwmah0"; 
$database = "id22301757_localhost"; 

$conn = new mysqli($servername, $username, $password, $database);

$sqlCheckout = "SELECT * FROM checkout WHERE status='PENDING'";
$resultCheckout = $conn->query($sqlCheckout);

if ($resultCheckout->num_rows > 0) {
    $rowCheckout = $resultCheckout->fetch_assoc();
    $checkout_id = $rowCheckout["checkout_id"];
    $sqlCheckoutItem = "SELECT * FROM checkout_item WHERE checkout_id= $checkout_id";
    $resultCheckoutItem = $conn->query($sqlCheckoutItem);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Mandala</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="header">
    <a href="#" class="logo">
        <img src="images/image1.png" alt="">
    </a>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#products">Products</a>
        <a href="#review">Review</a>
        <a href="#contact">Contact</a>
        <a href="profil.php">Account</a>
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

  <section class="home" id="home">
    
    <div class="content">
        <h3>Paling sering habis!</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus pariatur quae nisi. Accusamus, accusantium odio cumque voluptate totam, ratione hic incidunt obcaecati ducimus expedita cum sed tempora error facilis quis!</p>
        <a href="#" class="btn">segera beli!</a>
    </div>
  </section>

  <section class="about" id="about">
    
    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>apa yang membuat kerupuk ini laku?</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quasi ullam modi a expedita sunt quod natus in, accusamus asperiores maiores cum labore ab tempora ducimus dolorem rem. Voluptas, obcaecati.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id perferendis dignissimos distinctio, sint quis, similique laboriosam, voluptatum vero aut nesciunt neque beatae nulla. Consequuntur nulla dolorem suscipit, exercitationem nihil impedit!</p>
            <a href="#" class="btn">learn more</a>
        </div>

    </div>

  </section>

  <section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="15">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-1.jpg" alt="Product 1">
            </div>
            <div class="content">
                <h3>Kerupuk Keriting</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    
        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="16">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-2.jpg" alt="Product 2">
            </div>
            <div class="content">
                <h3>Kerupuk Bangka Kemplang</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    
        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="17">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-3.jpg" alt="Product 3">
            </div>
            <div class="content">
                <h3>Kerupuk Kentang</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    
        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="18">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-4.jpg" alt="Product 4">
            </div>
            <div class="content">
                <h3>Stik Balado</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    
        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="19">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-5.jpg" alt="Product 5">
            </div>
            <div class="content">
                <h3>Kerupuk Udang</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    
        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="20">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-6.jpg" alt="Product 6">
            </div>
            <div class="content">
                <h3>Kacang Atom</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    
        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="21">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-7.jpg" alt="Product 7">
            </div>
            <div class="content">
                <h3>Kacang Telur</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    
        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="22">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-8.jpg" alt="Product 8">
            </div>
            <div class="content">
                <h3>Emping Goreng</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    
        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="23">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-9.jpg" alt="Product 9">
            </div>
            <div class="content">
                <h3>Sunpia</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="24">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-10.jpg" alt="Product 10">
            </div>
            <div class="content">
                <h3>Getas Ikan</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="25">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-11.jpg" alt="Product 10">
            </div>
            <div class="content">
                <h3>Opak Belacan</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="26">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-12.jpg" alt="Product 10">
            </div>
            <div class="content">
                <h3>Angka 8</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="27">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-13.jpg" alt="Product 10">
            </div>
            <div class="content">
                <h3>Getas Ikan Kapsul Putih</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>

        <div class="box">
            <div class="icons">
                <form id="myForm" action="add_item.php" method="GET">
                    <input type="hidden" name="item_id" value="28">
                    <button style="background-color: transparent;" type="submit"><a class="fas fa-shopping-cart"></a></button>
                </form>
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
            <div class="image">
                <img src="images/product-14.jpg" alt="Product 10">
            </div>
            <div class="content">
                <h3>Getas Ikan Kapsul Warna</h3>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-o"></i>
                </div>
                <div class="price">Rp 15.000 <span>Rp 20.000</span></div>
            </div>
        </div>
    </div>

  </section>

  <sectiom class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

   <div class="box-container">

        <div class="box">
            <img src="images/quotes.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ad sapiente sequi ut, dignissimos quia, ducimus tempore hic explicabo, quidem voluptatum! Totam magnam dolores ut dignissimos, dolore tempora eligendi atque!</p>
            <img src="images/pic-1.png" class="user" alt="">
            <h3>felix</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quotes.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ad sapiente sequi ut, dignissimos quia, ducimus tempore hic explicabo, quidem voluptatum! Totam magnam dolores ut dignissimos, dolore tempora eligendi atque!</p>
            <img src="images/pic-2.png" class="user" alt="">
            <h3>al-furqon mustadin</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/quotes.png" alt="" class="quote">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ad sapiente sequi ut, dignissimos quia, ducimus tempore hic explicabo, quidem voluptatum! Totam magnam dolores ut dignissimos, dolore tempora eligendi atque!</p>
            <img src="images/pic-3.jpg" class="user" alt="">
            <h3>revo oktafio r.</h3>
            <div class="star">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
        </div>
   </div>

  </sectiom>

  <section class="contact" id="contact">

        <h1 class="heading"> <span>contact</span> us </h1>

        <div class="row">

            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d705.1706480547947!2d104.0125630817671!3d1.1262192190199336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1716993574814!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <form action="">
                <h3>hubungi</h3>
                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" placeholder="name">
                </div>
                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" placeholder="email">
                </div>
                <div class="inputBox">
                    <span class="fas fa-phone"></span>
                    <input type="number" placeholder="number">
                </div>
                <input type="submit" value="contact now" class="btn">
            </form>

        </div>

  </section>

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

  <script src="js/script.js"></script>
</body>
</html>
