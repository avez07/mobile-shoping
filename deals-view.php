<?php
session_start();
include  "html-head.php";
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


        <a href="adreress.html"><span><i class="fa-solid fa-user pe-2"></i></span>account</a>
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
        <p class="fs-5 text-capitalize fw-semibold text-center mb-1">deal of the day</p>
        <div class="underline"></div>
      </div>
      <div class="sale-img row">
       <?php
       include "partial/deals-veiw-show.php"
       ?>
        <div class="col-lg-3 col-6">
          <div class="card">
            <img src="images/sale-image-2.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="card-text"><span class="fs-6 bg-danger fw-semibold px-2 py-1 text-light">Up to 36%
                    off</span><span class="fs-6 text-danger ms-2 fw-semibold">Deal</span></p>
                <p><span class="fw-semibold text-right">$203</span></p>
              </div>
              <p class="naow">BESPOKE BLACK LEATHER LIGHT WEIGHT BIKER BOOTS</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="card">
            <img src="images/sale-image-1.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="card-text"><span class="fs-6 bg-danger fw-semibold px-2 py-1 text-light">Up to 50%
                    off</span><span class="fs-6 text-danger ms-2 fw-semibold">Deal</span></p>
                <p><span class="fw-semibold text-right">$115</span></p>
              </div>
              <p>Robbie jones Men's Running Shoe</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="card">
            <img src="images/sale-image-1.webp" class="card-img-top" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="card-text"><span class="fs-6 bg-danger fw-semibold px-2 py-1 text-light">Up to 50%
                    off</span><span class="fs-6 text-danger ms-2 fw-semibold">Deal</span></p>
                <p><span class="fw-semibold text-right">$115</span></p>
              </div>
              <p>Robbie jones Men's Running Shoe</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="index.js"></script>
</body>