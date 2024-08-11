<?php
require('configration.php');
//$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($connection == true) {
  $myQuery = "SELECT * FROM products";
  $resutls = mysqli_query($connection, $myQuery);
}
?>



<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <!-- Box Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <title>document</title>
</head>

<body>
  <!-- Navbar -->
  <header>
    <a href="#" class="logo">
      <img src="images/logo.png" alt="logo" />
    </a>
    <!-- Menu-Icon -->
    <i class="fa-solid fa-bars" id="menu-icon"></i>
    <!-- links -->
    <ul class="navbar">
      <li><a href="#home">الصفحة الرئيسية</a></li>
      <li><a href="#about">عن الموقع</a></li>
      <li><a href="#products">المنتجات</a></li>
      <li><a href="#customers">الزبائن</a></li>
    </ul>
    <!-- Icon -->
    <div class="header-icon">
      <i class="fa-solid fa-cart-shopping" style="color: white;"></i>
      <i class="fa-solid fa-magnifying-glass" id="search-icon" style="color: white;"></i>
    </div>
    <!-- Search Box -->
    <div class="search-box">
      <input type="search" placeholder="ابحث هنا" />
    </div>

  </header>

  <!-- Home -->
  <section class="home" id="home">
    <div class="home-text">
      <h1>


        <?php echo "تذوق الطعم الاصيل" ?>




        <br />
        معنا
      </h1>
      <p>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consectetur,
        minima dignissimos explicabo veritatis illum esse.
      </p>
      <a href="#" class="btn">تسوق الان</a>
    </div>
    <div class="home-img">
      <img src="images/main.png" alt="main" />
    </div>
  </section>

  <!-- About -->
  <section class="about" id="about">
    <div class="about-img">
      <img src="images/about.jpg" alt="about" />
    </div>
    <div class="about-text">
      <h2>نبذة عن الشركة</h2>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ad
        delectus, alias maiores laboriosam eaque.
      </p>
      <p>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Commodi ad
        delectus, alias maiores laboriosam eaque.
      </p>
      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur
        recusandae magnam molestiae temporibus. Omnis?
      </p>
      <a href="#" class="btn">قراءة المزيد</a>
    </div>
  </section>

  <!-- Products -->
  <section class="products" id="products">
    <div class="heading">
      <h2>المنتجات الاكثر طلبا</h2>
    </div>
    <!-- container -->
    <div class="products-container">
      <?php if ($resutls) {
        if (mysqli_num_rows($resutls) > 0) {
          foreach ($resutls as $product) {
      ?>
            <div class="box">
              <img src="images/products/<?php echo $product['image']; ?>" alt="<?php echo $product['title']; ?>" />

              <h3><?php
                  echo $product['title'];
                  ?></h3>
              <div class="content">
                <del><?php echo $product['price']; ?> IQD</del>
                <div><?php echo $product['dicscount']; ?> IQD</div>
                <a href="#">اضافة الى السلة</a>
              </div>
            </div>
          <?php
          }

          ?>


      <?php
        }
      } ?>


    </div>
    <!-- products-container -->
  </section>

  <!-- Customers -->
  <section class="customers" id="customers">
    <div class="heading">
      <h2>اراء الزبائن</h2>
    </div>
    <!-- Container -->
    <div class="customers-container">
      <div class="box">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
          ratione nulla, vitae optio et illo.
        </p>
        <h2>Yasin Arafaat</h2>
        <img src="images/rev1.jpg" alt="rev1" />
      </div>
      <!-- box -->
      <div class="box">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
          ratione nulla, vitae optio et illo.
        </p>
        <h2>Khan Koshin</h2>
        <img src="images/rev2.jpg" alt="rev2" />
      </div>
      <!-- box -->
      <div class="box">
        <div class="stars">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star-half-stroke"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
          ratione nulla, vitae optio et illo.
        </p>
        <h2>Yusra Ali</h2>
        <img src="images/rev3.jpg" alt="rev3" />
      </div>
      <!-- box -->
    </div>
  </section>

  <!-- footer -->
  <section class="footer">
    <div class="footer-box">
      <h3>Coffee Shop</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores,
        quasi?
      </p>
      <div class="social">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
        <a href="#"><i class="fa-brands fa-instagram"></i></a>
        <a href="#"><i class="fa-brands fa-tiktok"></i></a>
      </div>
    </div>
    <div class="footer-box">
      <h3>Support</h3>
      <li><a href="#">Product</a></li>
      <li><a href="#">Help & Support</a></li>
      <li><a href="#">Return Policy</a></li>
      <li><a href="#">Terms Of Use</a></li>
    </div>
    <div class="footer-box">
      <h3>View Guides</h3>
      <li><a href="#">Features</a></li>
      <li><a href="#">Careers</a></li>
      <li><a href="#">Blog Posts</a></li>
      <li><a href="#">Our Branches</a></li>
    </div>
    <div class="footer-box">
      <h3>Contact</h3>
      <div class="contact">
        <span><i class="fa-solid fa-map-pin"></i>baghdad almansour</span>
        <span><i class="fa-solid fa-phone"></i>+9647812345678</span>
        <span><i class="fa-solid fa-envelope"></i>website@example.com</span>
      </div>
    </div>
  </section>

  <!-- Copyright -->
  <div class="copyright">
    <p>&#169; Ahmed razzaq [mega academy] All Rights Reserved.</p>
  </div>

  <script src="mysctipt.js"></script>
</body>

</html>