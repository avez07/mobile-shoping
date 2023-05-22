<!-- <
require_once "config.php";
require_once "./partials/signup-detail.php";


?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bookbaddies</title>
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- <
if ($showalert) {
    echo '<div class="alert alert-success alert-dismissible fade show fixed-top text-capitalize" role="alert">
    <strong>SUCCESS!</strong> your data is added to the database, now you are allowed to login.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?> -->
    <section>
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
                <div class="width-sig">


                    <form class="signup-form" method="post" onsubmit="return validate()"
                        action="">
                        <div class="borders row">
                            <p class="head">signup</p>

                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="name">Name</label><br>
                                <input type="text" class="sign form-input" name="name" id="name"
                                    placeholder="Enter your name">
                                <p class="text-danger fw-semibold" id="names"></p>
                            </div>
                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="phone">phone</label><br>
                                <input type="text" class="sign form-input" name="name" id="phone"
                                    placeholder="Enter your phone number">
                                <p class="text-danger fw-semibold" id="phone-d"></p>
                            </div>
                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="email">Email id</label><br>
                                <input type="text" class="sign form-input" name="email" id="email"
                                    placeholder="Enter your email id">
                                <p class="text-danger fw-semibold" id="email-id"></p>
                            </div>
                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="user">username</label><br>
                                <input type="text" class="sign form-input" name="user" id="username"
                                    placeholder="Create your username">
                                <p class="text-danger fw-semibold" id="user"></p>
                            </div>
                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="add">address</label><br>
                                <input type="text" class="sign form-input" name="add" id="address"
                                    placeholder="Enter your address">
                                <p class="text-danger fw-semibold" id="add-d"></p>
                            </div>
                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="landmark">landmark</label><br>
                                <input type="text" class="sign form-input" name="land" id="landmark"
                                    placeholder="Enter the landmark">
                                <p class="text-danger fw-semibold" id="lank"></p>
                            </div>
                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="city">city</label><br>
                                <input type="text" class="sign form-input" name="city" id="city"
                                    placeholder="Enter your city">
                                <p class="text-danger fw-semibold" id="city-d"></p>
                            </div>
                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="state">state</label><br>
                                <input type="text" class="sign form-input" name="state" id="state"
                                    placeholder="Enter your state">
                                <p class="text-danger fw-semibold" id="state-d"></p>
                            </div>
                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="zip">zip code</label><br>
                                <input type="text" class="sign form-input" name="zip" id="zip"
                                    placeholder="Enter your zip code">
                                <p class="text-danger fw-semibold" id="zip-d"></p>
                            </div>

                            <div class="col-md-6 text-capitalize fw-semibold">
                                <label for="pass2">Confirm Password</label><br>
                                <input type="password" class="sign form-input" name="pass2" id="password2"
                                    placeholder="Enter your password ">
                                <span><i class="fa-solid fa-eye-slash  eye-e" onclick="password2()"
                                        id="eye-3"></i></span>
                                <span><i class="fa-solid fa-eye  eye-e" id="eye-4" onclick="password2()"></i></span>
                                <p class="text-danger  fw-semibold" id="pass2"></p>
                            </div>
                            <div>
                                <input type="submit" value="Sign UP"  class="submit" id="submit">
                                <p class="text-center m-0">Alredy have a account ? <a href="login.php">Login</a></p>

                            </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>