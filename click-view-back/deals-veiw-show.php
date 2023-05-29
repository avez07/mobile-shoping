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
 
  
 
  
   if (!$sql_result) {
    echo "NO DATA IS ADDED"  . $sql_query->error;
  } else {
    if ($sql_result->num_rows > 0) {
      while ($row = $sql_result->fetch_assoc()) {
echo '<div class="col-lg-3 col-6">
          <div class="card hover my-3">
            <img src="deals-image-upload/'.$row['FOOT_IMG'].'" class="card-img-top high" alt="...">
            <div class="card-body">
              <div class="d-flex justify-content-between">
                <p class="card-text"><span class="fs-6 bg-danger fw-semibold px-2 py-1 text-light">Up to '.$row['DISCOUNT'].'
                    off</span><span class="fs-6 text-danger ms-2 fw-semibold">Deal</span></p>
                <p><span class="fw-semibold text-right">'.$row['PRICE'].'</span></p>
              </div>
              <p>'.$row['FOOTWEAR_NAME'].'</p>
            </div>
          </div>
        </div>';
      }
  } 
  }
?>