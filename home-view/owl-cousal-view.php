<?php
    if (isset($_GET['t']) && $_GET['t'] === "deal") {
        $sql_query_1 = "SELECT * FROM `user_deals_768` WHERE id <> ?";
$stmt = $conn->prepare($sql_query_1);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if (!$result) {
    echo "NO DATA IS ADDED: " . $stmt->error;
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo ' <div class="item p-0">
            <div class="col-12">
            <a href = "single-view.php?t=deal&id='.$row['id'].'"style ="text-decoration: none"><div class="card hover my-3">
              <img src="all-footwear-detail/'.$row['FOOT_IMG'].'" class="card-img-top high" alt="...">
              <div class="card-body">
                <div class="d-flex justify-content-between">
                  <p class="card-text"><span class="fs-6 bg-danger fw-semibold px-2 py-1 text-light">Up to '.$row['DISCOUNT'].'
                      off</span><span class="fs-6 text-danger ms-2 fw-semibold">Deal</span></p>
                  <p><span class="fw-semibold text-right">'.$row['PRICE'].'</span></p>
                </div>
                <p>'.$row['FOOTWEAR_NAME'].'</p>
              </div>
            </div></a>
          </div>
          
        </div>';
        }
    }
}
} else{
$sql_query_1 = "SELECT * FROM `all_footwears_768` WHERE id <> ?";
$stmt = $conn->prepare($sql_query_1);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();
    

if (!$result) {
    echo "NO DATA IS ADDED: " . $stmt->error;
} else {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo ' <div class="item p-0">
            <div class="col-12">
            <a href = "single-view.php?&id='.$row['id'].'"style ="text-decoration: none">
            <div class="card">
                    <img src="all-footwear-detail/'.$row['FOOT_IMG'].'" class="card-img-top high"
                        alt="...">
                    <div class="card-body">
                        <p class="card-title naow text-capitalize fs-6 fw-semibold">'.$row['FOOTWEAR_NAME'].'</p>
                        <p class="text-capitalize fw-semibold card-text mb-0" style="font-size: 14px;">
                            rating : 4.5
                            <span><i class="fa-solid fa-star color"></i></span>
                            <span><i class="fa-solid fa-star color"></i></span>
                            <span><i class="fa-solid fa-star color"></i></span>
                            <span><i class="fa-solid fa-star color"></i></span>
                            <span><i class="fa-solid fa-star-half-stroke color"></i></span>
                        </p>
                        <p class="mb-0"><span class="text-capitalize fw-semibold"
                                style="font-size: 12px; color: #727272;">price:</span>
                            <span class="price fs-6">'.$row['PRICE'].'</span>
                        </p>
                    </div>
                    </div></a>
                </div>
        </div>';
        }
    }
}
    }
?>