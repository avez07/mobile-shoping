<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>
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
                    <li><span><a href="my-order.php.php" class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-briefcase pe-2"></i></span>my order</a></li>
                    <li class="active"><span><a href="change-password.php" class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-key pe-2 active-2"></i></span>change password</a></li>
                    <li><span><i class="fa-sharp fa-solid fa-right-from-bracket pe-2"></i></span>logout</li>
                </ul>
                
            </div>
        </div>
        <div class="address-info">
            <div class="tabular-add">
               <form action="actions/change-password-logic.php" method="post"  onsubmit="return alert_msg()">
                <div class="row">
                    <div class="col-md-6 py-4 text-capitalize fw-semibold brown" >
                        <label for="oldpassword">old password</label>
                        <input type="text" class="form-control" id="add-form" name="old">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 py-4 text-capitalize fw-semibold brown" >
                        <label for="new password">new password</label>
                        <input type="text" class="form-control" id="add-form" name="new">
                    </div>
                    <div class="col-md-6 py-4 text-capitalize fw-semibold brown" >
                        <label for="confirm password">confirm password</label>
                        <input type="text" class="form-control" id="add-form" name="confirm">
                    </div>
                   
                    <div class="col-md-2 py-4">
                        <button type="submit" class="btn text-light text-capitalize fw-semibold" style="background: #c81e1e;">Submit</button>
                    </div>
                </div>
               
               </form>

            </div>
        </div>
      </div>
    </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="index.js"></script>
  <SCript>
    function alert_msg() {
        if (window.confirm("Are You Sure , You Want To `UPDATE` This Record")) {
            alert("After `UPDATE` You Cannot Undo");
        } else {
            return false;
        }
    }
  </SCript>
</body>
</html>