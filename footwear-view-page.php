<?php
session_start();
include "html-head.php";
include "partial/login-logics.php";
include "actions/unset.php";
?>
<body>
<section class="top-nav" style="background-color: #03202f;">
    <nav class="navbar navbar-expand text-light">
      <div class="container-fluid justify-content-around">
        <?php echo '<a class="navbar-brand text-light" href="#">'.$_SESSION["customer_name"].'</a>';?>

        <form class="d-flex" style="width: 70%;" role="search">
          <input class="form-control search-bar" type="search" placeholder="Search" aria-label="Search">
          <button class="btn search" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        <div class="ms-2"><i class="fa-solid fa-cart-plus fs-2"></i>CART</div>

      </div>
    </nav>
  </section>
  <!-- sidnavbar  -->
  <section class="navbar-s" id="sidenav">
    <div class="container-fluid p-0">
     
      <div id="mySidenav" class="sidenav">
       
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div>
          <p class="text-light text-uppercase fs-5  py-4 ps-5">shoe shop</p>
        </div>
        <a href="#"><span><i class="fa-solid fa-house pe-2"></i></span> home</a>
        <a href="#" onclick="toggleNav2() "><span><i class="fa-solid fa-bars-staggered pe-2"></i></span> product
          <div class="drop" id="drop">
            <a href="#"><span><i class="fa-solid fa-user pe-2"></i></span>men</a>
            <a href="#"><span><i class="fa-solid fa-circle-question pe-2"></i></span> wonem</a>
          </div>
        </a>
        <?php
        if ($user) {
          echo '<a href="adreress.php"><span><i class="fa-solid fa-user pe-2"></i></span>account</a>';
        }
       
        if ($admin) {
       
        echo ' <a href="admin-deals.php"><span><i class="fa-solid fa-user pe-2"></i></span>account</a>';
        }
        ?>
        <a href="#"><span><i class="fa-solid fa-circle-question pe-2"></i></span> about</a>
        <a href="#"><span><i class="fa-solid fa-envelope pe-2"></i></span> contact</a>
      </div>
  </section>
  <!-- navbar 2 -->
  <section style="background-color: #076493;">
    <nav class="navbar navbar-expand  p-0 ps-2 text-capitalize fw-semibold">

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="#"><span onclick="openNav()">&#9776; All</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" aria-current="page" href="#deal">today's deals</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="#categories">categories</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-light" href="#brands">brands</a>
          </li>
        </ul>

      </div>

    </nav>

    </div>
  </section>
  <!-- carausal start -->
  <section>
    <div class="container-fluid p-0">
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/car.jpg" class="d-block w-100 siz-imge" height="500" alt="carousal1">
          </div>
          <div class="carousel-item">
            <img src="images/courosal-1.jpg" class="d-block w-100 siz-imge" height="500" alt="carousal1">

          </div>
          <div class="carousel-item">
            <img src="images/carousal-3.png" class="d-block w-100 siz-imge" height="500" alt="carousal1">

          </div>
        </div>
        <button class="carousel-control-prev" id="prev" type="button" data-bs-target="#carouselExample"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>
  <section id="deal">
    <div class="container-fluid py-3 px-lg-5">
      <div class="head py-5">
        <p class="fs-5 text-capitalize fw-semibold text-center mb-1" id ="head">deal of the day</p>
        <div class="underline"></div>
      </div>
      <div class="sale-img row">
       <?php
       include "click-view-back/footwear-view-page-show.php"
       ?>
      </div>
    </div>
  </section>

  <section id="brands">
    <div class="container-fluid py-3 px-lg-5">
      <div class="head py-5">
        <p class="fs-5 text-capitalize fw-semibold text-center mb-1">explore brands</p>
        <div class="underline"></div>
      </div>
      <div class="row">
        <div class="col-lg-3" style="opacity: 0.6;">
          <img src="images/brand/addidas.png" class="img-fluid" alt="...">
        </div>
        <!-- brand 2 -->
        <div class="col-lg-3" style="opacity: 0.6;">
          <img src="images/brand/armour.png" class="img-fluid" alt="...">
        </div>
        <!-- brand 3 -->
        <div class="col-lg-3" style="opacity: 0.6;">
          <img src="images/brand/Clarks.png" class="img-fluid" alt="...">
        </div>
        <!-- brand 4 -->
        <div class="col-lg-3" style="opacity: 0.6;">
          <img src="images/brand/new-balance.png" class="img-fluid" alt="...">
        </div>
        <!-- band 5 -->
        <div class="col-lg-3" style="opacity: 0.6;">
          <img src="images/brand/nike.png" class="img-fluid" alt="...">
        </div>
        <!-- brand 6 -->
        <div class="col-lg-3" style="opacity: 0.6;">
          <img src="images/brand/campus.png" class="img-fluid" alt="...">
        </div>
        <!-- brand 7 -->
        <div class="col-lg-3" style="opacity: 0.6;">
          <img src="images/brand/reebok.png" class="img-fluid" alt="...">
        </div>
        <!-- brand 8 -->
        <div class="col-lg-3" style="opacity: 0.6;">
          <img src="images/brand/puma.png" class="img-fluid" alt="...">
        </div>
      </div>
    </div>
  </section>
  <section class="footer text-light" style="background-color: #1d1d1d;">
    <div class="container-fluid py-5 px-4">
      <div class="row">
        <div class="col-lg-3">
          <p class="fs-4 fw-bold text-uppercase">download</p>
          <p class="fs-6 fw-semibold text-capitalize"> downloads our app for android and ios</p>
          <div>
            <div>
              <img src="images/brand/footer.png" width="150" class="text-center mb-3" alt="apple logo">
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <p class="fs-4 fw-bold text-uppercase">shopping</p>
          <p class="fs-6 fw-semibold text-capitalize">our purpose is to give shoppers a memorable and enjoyable
            experience while providing them with a wide range of high-quality products and exceptional customer service.
          </p>
         
        </div>
        <div class="col-lg-2">
          <p class="fs-4 fw-bold text-uppercase">links</p>
          <ul class="fs-6 fw-semibold text-capitalize" style="list-style: none;padding: 0;">
            <li>cupons</li>
            <li>blog posts</li>
            <li>return policy</li>
            <li>join us</li>
          </ul>
         
        </div>
        <div class="col-lg-2">
          <p class="fs-4 fw-bold text-uppercase">follow us</p>
          <ul class="fs-6 fw-semibold text-capitalize" style="list-style: none;padding: 0;">
            <li>facebook</li>
            <li>instagram</li>
            <li>twitter</li>
            <li>linkedin</li>
          </ul>
         
        </div>
      </div>
    </div>
  </section>
  

  <script type="javascript" src="./index.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script>
    
  </script>
</body>