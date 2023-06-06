<?php session_start();

include "html-head.php";
include "click-view-back/single-view-show.php";
include "partial/login-logics.php";
include "/actions/unset.php";
if (isset($_GET['t'])) {

    $t= $_GET['t'];
} else{
   $t = null;
}
?>

<body>
    <section class="top-nav" style="background-color: #03202f;">
        <nav class="navbar navbar-expand text-light">
            <div class="container-fluid justify-content-around">
                <?php echo '<a class="navbar-brand text-light" href="#">' . $_SESSION["customer_name"] . '</a>'; ?>

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
    <section style="background-color: #076493;
  ">
        <nav class="navbar navbar-expand  p-0 ps-2 text-capitalize fw-semibold">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-light" aria-current="page" href="#"><span onclick="openNav()">&#9776;
                                All</span>
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
    <section class="pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="shoe-img sticky-sm-top" style="z-index: -1">
                        <img src="all-footwear-detail/<?php echo $row['FOOT_IMG']; ?>"
                            style="height: 30rem; position: sticky;" class="w-100 img-fluid" alt="dhoe image">
                    </div>
                </div>
                <div class="col-md-5">
                    <div>
                        <p class="fw-bold fs-5 text-capitalize">
                            <?php echo $row['FOOTWEAR_NAME']; ?>
                        </p>
                    </div>
                    <div>
                        <p class="text-capitalize fw-semibold" style="font-size: 14px;">
                            rating : 4.5
                            <span><i class="fa-solid fa-star color"></i></span>
                            <span><i class="fa-solid fa-star color"></i></span>
                            <span><i class="fa-solid fa-star color"></i></span>
                            <span><i class="fa-solid fa-star color"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke color"></i></span>
                        </p>
                    </div>
                    <div>
                        <p class="bactch">
                            <span class=" ribbon text-capitalize text-light bg-danger fw-semibold"># no 1 seller</span>
                            <span class="text-capitalize ps-2"><a href="">in
                                    <?php echo $row['CATEGORIES']; ?><span class="text-lowercase">'s</span> pumps
                                </a></span>
                        <div class="divider"></div>
                        </p>
                    </div>
                    <div>
                        <p><span class="text-capitalize fw-semibold"
                                style="font-size: 17px; color: #727272;">price:</span>
                            <span class="price ps-2">
                                <?php echo $row['PRICE']; ?>
                            </span>
                        </p>
                    </div>
                    <form action="partial/add-to-cart-logic.php?id=<?php echo $id; ?>&t=<?php echo $t; ?>" method="post"
                        enctype="multipart/form-data">
                        <input type="hidden" class="name" name="product_name"
                            value="<?php echo $row['FOOTWEAR_NAME']; ?>">
                        <div class="d-flex">
                            <div style="width: 50%;">
                                <span class="text-capitalize fw-semibold">quantity: </span>
                                <select name="qty" style="width: 30%;" id="quantity">
                                    <option value="1" selected>1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                </select>
                            </div>
                            <div style="width: 50%;">
                                <span class="text-capitalize fw-semibold">size: </span>
                                <select name="size" style="width: 30%;" id="quantity">
                                    <option value="7">7</option>
                                    <option value="7.5">7.5</option>
                                    <option value="8">8</option>
                                    <option value="8.5">8.5</option>
                                    <option value="9">9</option>
                                    <option value="9.5">9.5</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="11.5">11.5</option>
                                    <option value="12">12</option>
                                    <option value="12.5">12.5</option>
                                    <option value="13">13</option>
                                </select>
                            </div>
                        </div>

                        <input type="hidden" class="name" name="product_price" value="<?php echo $row['PRICE']; ?>">
                        <input type="hidden" class="name" name="product_img" value="<?php echo $row['FOOT_IMG']; ?>">
                        <input type="hidden" class="name" name="type" value="<?php echo $row['TYPE_']; ?>">
                        <input type="hidden" class="name" name="categries" value="<?php echo $row['CATEGORIES']; ?>">
                        <input type="hidden" class="name" name="style_code" value="<?php echo $row['STYLE_CODE']; ?>">
                        <input type="hidden" class="name" name="brand" value="<?php echo $row['BRAND']; ?>">
                        <input type="hidden" class="name" name="sub_brand" value="<?php echo $row['SUB_BRAND']; ?>">
                        <input type="hidden" class="name" name="material" value="<?php echo $row['MATERIAL']; ?>">
                        <div>
                            <p class="mt-3">
                                <span class="text-capitalize fw-semibold pe-1">type: </span>
                                <span class="text-capitalize fw-bold fs-6">
                                    <?php echo $row['TYPE_']; ?>
                                </span>
                            </p>
                        </div>
                        <div>
                            <button class="btn-1" type="submit">add to cart</button>
                            <button class="btn-2" type="submit">buy now</button>
                        </div>
                    </form>
                    <div class="my-4">
                        <p class="text-capitalize text-dark fw-bold fs-5">delivery options: </p>
                        <ul class="payment fw-semibold">
                            <li><span><i class="fa-solid fa-credit-card pe-2"></i></span>credit card</li>
                            <li><span><i class="fa-solid fa-credit-card pe-2"></i></span>debit card</li>
                            <li><span><i class="fa-solid fa-building-columns pe-2"></i></span>net banking</li>
                            <li class="text-uppercase"><span><i class="fa-brands fa-cc-amazon-pay pe-2"></i></span> upi
                                id</li>
                            <li><span><i class="fas fa-shipping-fast pe-2"></i></span>cash on delivery</li>
                        </ul>
                    </div>
                    <div>
                        <p class="mt-4 text-capitalize fw-bold fs-5">product detail: </p>
                        <p class="text-capitalize">
                            <?php echo $row['PRODUCT_DETAIL']; ?>
                        </p>
                        <div class="row">
                            <div class="col-5 mb-3" style="border-bottom: 1px dashed #c3bebe;">
                                <p class="fw-medium fs-6 text-capitalize">style code: </p>
                                <p class="text-uppercase fw-bold">
                                    <?php echo $row['STYLE_CODE']; ?>
                                </p>
                            </div>
                            <div class="col-5 offset-md-2 mb-3" style="border-bottom: 1px dashed #c3bebe;">
                                <p class="fw-medium fs-6 text-capitalize">pattern: </p>
                                <p class="text-capitalize fw-bold fs-6">
                                    <?php echo $row['PATTERN']; ?>
                                </p>
                            </div>
                            <div class="col-5 mb-3" style="border-bottom: 1px dashed #c3bebe;">
                                <p class="fw-medium fs-6 text-capitalize">brand: </p>
                                <p class="text-capitalize fw-bold">
                                    <?php echo $row['BRAND']; ?>
                                </p>
                            </div>
                            <div class="col-5 offset-md-2 mb-3" style="border-bottom: 1px dashed #c3bebe;">
                                <p class="fw-medium fs-6 text-capitalize">sub-brand: </p>
                                <p class="text-capitalize fw-bold fs-6">
                                    <?php echo $row['SUB_BRAND']; ?>
                                </p>
                            </div>

                            <div class="col-5 mb-3" style="border-bottom: 1px dashed #c3bebe;">
                                <p class="fw-medium fs-6 text-capitalize">material: </p>
                                <p class="text-capitalize fw-bold">
                                    <?php echo $row['MATERIAL']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="carousal-owl my-5">
        <div class="container-fluid  my-4">
            <p class="fs-3 fw-bold text-capitalize mt-5">related products:</p>
            <div class = " px-5">
            <div class="owl-carousel owl-theme">
                    <div class="row px-3">
                        <?php include "home-view/owl-cousal-view.php" ?>

                    </div>
                </div>


            </div>
        </div>
    </section>
    <section style="background-color: #076493;">
        <div class="container-fluid d-flex justify-content-around text-capitalize text-light fw-bold py-2">
            <p class="m-0"><span><i class="fa-sharp fa-solid fa-arrow-right-arrow-left pe-2"></i></span>30 day return
                policy</p>
            <p class="m-0"><span><i class="fas fa-shipping-fast pe-2"></i></span>fast delivery</p>
            <p class="m-0 text-lowercase"><span><i
                        class="fa-solid fa-envelope pe-2"></i></span>ansariaavez1234@gmail.com</p>
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
                    <p class="fs-6 fw-semibold text-capitalize">our purpose is to give shoppers a memorable and
                        enjoyable
                        experience while providing them with a wide range of high-quality products and exceptional
                        customer service.
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="owl-carousal.js"></script>
    <script src="index.js"></script>

</body>

</html>