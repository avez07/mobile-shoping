<?php
include "config.php";
$men = "men";
$women = "women";
$kids = "kids";
$seakers ="seakers";
$loffers = "loffers";
$boots = "boots";
$brogues = "Brogues";


?>
</section>
  <section id="categories">
    <div class="container-fluid py-3 px-lg-5">
      <div class="head py-5">
        <p class="fs-5 text-capitalize fw-semibold text-center mb-1">categories</p>
        <div class="underline"></div>
      </div>
      <div class="featured-img row">
        <div class="col-lg-4">
          <?php
       echo   '<a href = "footwear-view-page.php?categories='.$men.'"><div class="card border-0 bg-body-light">
            <img src="images/men.jpg" class="card-img-top" height="300" alt="...">
            <div class="card-body">
              <p class="fw-semibold fs-5 text-capitalize">men</p>
            </div>
          </div></a>';
          ?>
        </div>
        <div class="col-4">
        <?php
       echo   '<a href = "footwear-view-page.php?categories='.$women.'"><div class="card border-0 bg-body-light">
            <img src="images/women.jpg" class="card-img-top" height="300" alt="...">
            <div class="card-body">
              <p class="fw-semibold fs-5 text-capitalize">women</p>
            </div>
          </div></a>';
          ?>
        </div>
        <div class="col-lg-4">
        <?php
       echo   '<a href = "footwear-view-page.php?categories='.$kids.'"><div class="card border-0 bg-body-light">
            <img src="images/kids.avif" class="card-img-top" height="300" alt="...">
            <div class="card-body">
              <p class="fw-semibold fs-5 text-capitalize">kids</p>
            </div>
          </div></a>';
          ?>
        </div>

      </div>
    </div>

  </section>
  <section id="featured">
    <div class="container-fluid py-3 px-lg-5">
      <div class="head py-5">
        <p class="fs-5 text-capitalize fw-semibold text-center mb-1">featured product</p>
        <div class="underline"></div>
      </div>
      <div class="featured-img row">
      <div class="col-lg-3">
        <?php
       echo   '<a href = "footwear-view-page.php?type='.$loffers.'"><div class="card border-0 bg-body-light">
            <img src="images/featured-1.webp" class="card-img-top" height="300" alt="...">
            <div class="card-body">
              <p class="fw-semibold fs-5 text-capitalize">loffers</p>
            </div>
          </div></a>';
          ?>
        </div>
        <div class="col-lg-3 col-6">
        <?php
       echo   '<a href = "footwear-view-page.php?type='.$seakers.'"><div class="card border-0 bg-body-light">
            <img src="images/seakers.jpg" class="card-img-top" height="300" alt="...">
            <div class="card-body">
              <p class="fw-semibold fs-5 text-capitalize">seakers</p>
            </div>
          </div></a>';
          ?>
        </div>
        <div class="col-lg-3 col-6">
        <?php
       echo   '<a href = "footwear-view-page.php?type='.$boots.'"><div class="card border-0 bg-body-light">
            <img src="images/boots.webp" class="card-img-top" height="300" alt="...">
            <div class="card-body">
              <p class="fw-semibold fs-5 text-capitalize">boots</p>
            </div>
          </div></a>';
          ?>
          </div>
        
        <div class="col-lg-3 col-6">
        <?php
       echo   '<a href = "footwear-view-page.php?type='.$brogues.'"><div class="card border-0 bg-body-light">
            <img src="images/Brogues.jpg" class="card-img-top" height="300" alt="...">
            <div class="card-body">
              <p class="fw-semibold fs-5 text-capitalize">Brogues</p>
            </div>
          </div></a>';
          ?>
        </div>
</div>
      </div>
    </div>

  </section>