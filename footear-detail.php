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
                        <li><span><a href="shop.php" class="text-dark" style="text-decoration: none;"><i
                                        class="fa-solid fa-house pe-2"></i></span>home</a></li>
                        <li class="active"><span><a href="adreress.html" class="text-dark"
                                    style="text-decoration: none;"><i
                                        class="fa-solid fa-location-dot pe-2 active-2"></i></span>todays deals</a></li>
                        <li><span><i class="fa-solid fa-briefcase pe-2"></i></span>orders</li>
                        <li><span><a href="change-password.html" class="text-dark" style="text-decoration: none;"><i
                                        class="fa-solid fa-key pe-2"></i></span>shoes data</a></li>
                        <li><span><i class="fa-sharp fa-solid fa-right-from-bracket pe-2"></i></span>logout</li>
                    </ul>

                </div>
            </div>
            <div class="address-info">
                <div class="tabular-add">
                    <form action="partial/footwear-detail-add.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 py-4 text-capitalize fw-semibold brown">
                                <label for="oldpassword">footwear name</label>
                                <input type="text" class="form-control" id="add-form" name="foot-name">
                            </div>


                            <div class="col-md-6 py-4 text-capitalize fw-semibold brown">
                                <label for="foot-pic">footwear image</label><br>
                                <input type="file" name="foot-pic" class="modal-input custom" id="foot-img">
                                <span><i class="fa-sharp fa-solid fa-cloud-arrow-up icons"></i></span>
                                <span class="text-danger fw-semibold position" id="vid1"></span>
                            </div>

                            <div class="col-md-6 py-4 text-capitalize fw-semibold brown">
                                <label for="foot-img">footwear type</label><br>
                                <select class="form-select" id="select" aria-label="Default select example" name="type">
                                    <option selected>Open this select type</option>
                                    <option value="loffers">loffers</option>
                                    <option value="seakers">seakers</option>
                                    <option value="Brogues">Brogues</option>
                                    <option value="boots">boots</option>

                                <select>
                            </div>
                            <div class="col-md-6 py-4 text-capitalize fw-semibold brown">
                                <label for="foot-img">categories</label><br>
                                <select class="form-select" id="select" aria-label="Default select example"
                                    name="categories">
                                    <option selected>Open this select menu</option>
                                    <option value="men">Men</option>
                                    <option value="women">Women</option>
                                    <option value="kids">Kids</option>
                                    <select>
                            </div>

                            <div class="col-md-6 py-4 text-capitalize fw-semibold brown">
                                <label for="price">price</label>
                                <input type="text" class="form-control" id="add-form" name="price">
                            </div>


                        </div>
                        <div class="col-2 py-4">
                            <button type="submit" class="btn text-light text-capitalize fw-semibold"
                                style="background: #c81e1e;">Submit</button>
                        </div>


                    </form>

                </div>
            </div>
        </div>
        </div>
        <script>
            var select = document.getElementById("select").value;
            console.log(select);
        </script>
</body>