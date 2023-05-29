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

if (isset($_GET["categories"])) {
  $categories = $_GET["categories"];
  $sql_query = "SELECT * FROM `all_footwears_768` WHERE CATEGORIES = ?";
  $stmt = $conn->prepare($sql_query);
  $stmt->bind_param("s", $categories);
  $stmt->execute();
  $result = $stmt->get_result();
  
} elseif (isset($_GET["type"])) {
  $type = $_GET["type"];
  $sql_query = "SELECT * FROM `all_footwears_768` WHERE TYPE_ = ?";
  $stmt = $conn->prepare($sql_query);
  $stmt->bind_param("s", $type);
  $stmt->execute();
  $result = $stmt->get_result();
} else {
  // Handle the case when neither "categories" nor "type" is set
  echo "No category or type specified.";
  exit; // Stop further execution
}

if (!$result) {
  echo "NO DATA IS ADDED: " . $stmt->error;
} else {
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      echo '<div class="col-md-3">
             <a href = "single-view.php?id='.$row['id'].'"><div class="card">
                <img src="all-footwear-detail/'.$row["FOOT_IMG"].'" class="card-img-top high" alt="...">
                <div class="card-body">
                  <p class="card-title naow text-capitalize fs-6 fw-semibold">'.$row["FOOTWEAR_NAME"].'</p>
                  <p class="text-capitalize fw-semibold card-text mb-0" style="font-size: 14px;">
                    rating : 4.5
                    <span><i class="fa-solid fa-star color"></i></span>
                    <span><i class="fa-solid fa-star color"></i></span>
                    <span><i class="fa-solid fa-star color"></i></span>
                    <span><i class="fa-solid fa-star color"></i></span>
                    <span><i class="fa-solid fa-star-half-stroke color"></i></span>
                  </p>
                  <p class="mb-0">
                    <span class="text-capitalize fw-semibold" style="font-size: 12px; color: #727272;">price:</span>
                    <span class="price fs-6">'.$row["PRICE"].'</span>
                  </p>
                </div>
              </div></a>
            </div>';
    }
  } else {
    echo "No results found.";
  }
}
?>


