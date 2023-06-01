<?php
include "html-head.php"
    ?>

<body>
    <section class="profile">
        <div class="container-fluid d-flex">
            <div class="mx-4" style="width: 25%;">
                <div class="profile-mage">
                    <img src="images/default-profile.png" class="img-fluid" alt="">
                </div>
                <div class="tabular d-flex justify-content-center align-items-center">
                <ul class="add-links">
                    <li><span><a href="shop.php" class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-house pe-2"></i></span>home</a></li>
                    <li><span><a href="adreress.php" class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-location-dot pe-2"></i></span>my address</a></li>
                    <li class="active"><span><a href="my-order.php.php" class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-briefcase pe-2 active-2"></i></span>my order</a></li>
                    <li><span><a href="change-password.php" class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-key pe-2"></i></span>change password</a></li>
                    <li><span><i class="fa-sharp fa-solid fa-right-from-bracket pe-2"></i></span>logout</li>
                </ul>
                
            </div>
            </div>
            <div class="address-info">
                <div class="tabular-add">
                  <?php  include "click-view-back/add-to-cart-view.php" ?>

                </div>
            </div>
        </div>
        </div>
</body>