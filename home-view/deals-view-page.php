
<style>
  img.imge-size {
  height: 164px !important;
}
.page{
  position: absolute;
    bottom: 0px !important;
    right: 22px;
}
@media only screen and (min-width: 600px) and (max-width:993px){
  img.imge-size {
  height: 233px !important;
}
}

</style>
<?php
include "config.php";



  //pagination logics started
  $sql_query = "SELECT * FROM user_deals_768";
  $sql_result = $conn->query($sql_query);
  $number_of_result = ($sql_result->num_rows) -4 ;


  function generateRandomNumber($min, $max) {
    return rand($min, $max);
}

// Check if random number is already set in session
if (isset($_SESSION['random_number'])) {
    $randomNumber = $_SESSION['random_number'];
} else {
    // Generate a new random number between 1 and 100 (change the values as per your requirement)
    $randomNumber = generateRandomNumber(1, $number_of_result);
    $_SESSION['random_number'] = $randomNumber;
}


$result_per_page = 4;
  
$sql_query_2 = "SELECT * FROM user_deals_768 LIMIT " . $randomNumber . ',' . $result_per_page;
$sql_result_2 = $conn->query($sql_query_2);
  
   if (!$sql_result_2) {
    echo "NO DATA IS ADDED"  . $sql_query_2->error;
  } else {
    if ($sql_result_2->num_rows > 0) {
      while ($row = $sql_result_2->fetch_assoc()) {
echo '<div class="col-lg-3 col-6">
          <a href = "deals-view.php" style = "text-decoration : none;"><div class="card onhover">
            <img src="deals-image-upload/'.$row['FOOT_IMG'].'" class="card-img-top high" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="card-text"><span class="fs-6 bg-danger fw-semibold px-2 py-1 text-light">Up to '.$row['DISCOUNT'].'
                    off</span><span class="fs-6 text-danger ms-2 fw-semibold">Deal</span></p>
                <p><span class="fw-semibold text-right">'.$row['PRICE'].'</span></p>
              </div>
              <p class ="naow">'.$row['FOOTWEAR_NAME'].'</p>
            </div>
          </div></a>
        </div>';
      }
  } 
  }


?>
