<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>

<!-- Header Section -->
<div class="header">
    <div class="container">
      <div class="navbar" style="overflow: hidden; position: sticky;">
        <div class="logo">
          <a href="index.html"><img src="https://i.ibb.co/kDVwgwp/logo.png" alt="RedStore" width="125px" /></a>
          <link rel="stylesheet" href="main.css">
        </div>
        <nav>
          <ul id="MenuItems">
            <li><a href="main.php">Home</a></li>
            <li><a href="products.html">Products</a></li>
            <li><a href="about pro.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="logout.php">Log out</a></li>
          </ul>
        </nav>
        <div class="search">
  
            <input type="text" placeholder="search products" id="input">
               <ion-icon class="s" name="search"></ion-icon>
           
           </div>
        <a href="#"><img src="https://i.ibb.co/PNjjx3y/cart.png" alt="" width="30px" height="30px" /></a>
        <img src="https://i.ibb.co/6XbqwjD/menu.png" alt="" class="menu-icon" onclick="menutoggle()" />
      </div>
      <div class="row">
        <div class="col-2">
        <h1 style="color:white; font-weight:bold; color:black; font-size:40px;">Welcome:  <?php echo $username;?></h1>
          <h1>
            Give Your Workout <br />
            A New Style!
          </h1>
          <p>
            Success isn't always about greatness. It's about consistency.
            Consistent <br />hard work gains success. Greatness will come.
          </p>
          <a href="#" target="_blank" rel="noopener noreferrer" class="btn">Explore Now →</a>
        </div>
        <div class="col-2">
          <img src="https://previews.123rf.com/images/swhite/swhite0805/swhite080500015/3011881-electronic-components-on-a-schematic-diagram-background.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
<!-- Featured categories -->
<div class="categories">
    <div class="small-container">
      <div class="row">
        <div class="col-3">
          <img src="https://cdn.shopify.com/s/files/1/0559/1970/6265/products/1_9713a8db-db1e-42d0-a3e7-eebb7f66c4e9_180x.jpg?v=1670581925" alt="" />
        </div>
        <div class="col-3">
          <img src="https://empere.in/wp-content/uploads/2022/10/DHT111.jpeg" alt="" />
        </div>
        <div class="col-3">
          <img src="https://robu.in/wp-content/uploads/2018/11/5V-Passive-Buzzer-10-Pcs-5-314x252.jpg" alt="" />
        </div>
      </div>
    </div>
  </div>
<!-- Featured products -->
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
      <div class="col-4">
        <a href="product_details.html"><img src="https://robu.in/wp-content/uploads/2019/10/3Pin-15mm-Shaft-Potentiometer-2-314x252.jpg" alt="" /></a>
        <a href="product_details.html">
          <h4>potentiometer</h4>
        </a>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://robu.in/wp-content/uploads/2019/12/SLA-05VDC-SL-A-4Pin-30A-Power-Relay-3-314x252.jpg" alt="" />
        <h4>Relay</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://www.electronicscomp.com/image/cache/catalog/ultrasonic-sensor-hc-sr04-india-800x800.jpg" alt="" />
        <h4>ultrasonic sensor</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://www.electronicscomp.com/image/cache/catalog/pir-sensor-module-1-400x400.jpg" alt="" />
        <h4>PIR</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
      <div class="col-4">
        <img src="https://robu.in/wp-content/uploads/2021/04/zero-PCB-and-Breadboard-314x252.jpg" alt="" />
        <h4>PCB and BREAD BOARD</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://3.imimg.com/data3/YA/CV/GLADMIN-34695/optical-sensors-125x125.jpg" alt="" />
        <h4>Optical sensors</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://www.electronicscomp.com/image/cache/catalog/ir-sensor-module-india-400x400.jpg" alt="" />
        <h4>IR sensor</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://robu.in/wp-content/uploads/2018/11/robu-2-19-314x252.jpg" alt="" />
        <h4>semiconductors</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
    </div>
  
    <div class="row">
      <div class="col-4">
        <img src="https://robu.in/wp-content/uploads/2020/02/Untitled-2-2-314x252.jpg" alt="" />
        <h4>switches</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://empere.in/wp-content/uploads/2022/10/DHT111.jpeg" alt="" />
        <h4>DHT111</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://cdn.shopify.com/s/files/1/0559/1970/6265/products/1_9713a8db-db1e-42d0-a3e7-eebb7f66c4e9_180x.jpg?v=1670581925" alt="" />
        <h4>Flow sensor</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>₹500.00</p>
      </div>
  
      <div class="col-4">
        <img src="https://robu.in/wp-content/uploads/2019/11/100pcs-5mm-Light-Assorted-Kit-1-314x252.jpg" alt="" />
        <h4>LED</h4>
        <div class="rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </div>
        <p>₹500.00</p>
      </div>
    </div>
  </div>
  <!-- offer -->
  <div class="offer">
    <div class="small-container">
      <div class="row">
        <div class="col-2">
          <img src="https://www.allaboutcircuits.com/uploads/thumbnails/ArduinoUNO.jpg" alt="" class="offer-img" />
        </div>
        <div class="col-2">
          <p>Exclusively Available on RedStore</p>
          <h1>Arduino UNO</h1>
          <small>an open-source electronics platform or board and the software used to program it. .</small>
          <br />
          <a href="#" class="btn">Buy Now →</a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>Download App for Android and iso mobile phone.</p>
          <div class="app-logo">
            <img src="https://i.ibb.co/KbPTYYQ/play-store.png" alt="" />
            <img src="https://i.ibb.co/hVM4X2p/app-store.png" alt="" />
          </div>
        </div>

        <div class="footer-col-2">
          <img src="https://i.ibb.co/j3FNGj7/logo-white.png" alt="" />
          <p>
            Our Purpose Is To Sustainably Make the Pleasure and Benefits of
            Sports Accessible to the Many.
          </p>
        </div>

        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>

        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="copyright">Copyright &copy; 2021 - Red Store</p>
    </div>
  </div>

