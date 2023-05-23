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
 
  
  $result_per_page = 6;
  $number_of_result = $sql_result->num_rows;
  
  $number_of_pages = ceil($number_of_result / $result_per_page);
  
  
  
  
  if (!isset($_GET['pages'])) {
      $pages = 1;
  } else {
      $pages = $_GET['pages'];
  }
  $page_num = ($pages - 1) * $result_per_page; //set a number limmit output of this query is 0
  
  
  //pagination logic end only limit keyword added to the query
  
  $sql_query_2 = "SELECT * FROM user_deals_768 LIMIT " . $page_num . ',' . $result_per_page;
  
 
  
  
   $sql_result_2 = $conn->query($sql_query_2);
  
   if (!$sql_result_2) {
    echo "NO DATA IS ADDED"  . $sql_query_2->error;
  } else {
    if ($sql_result_2->num_rows > 0) {
      while ($row = $sql_result_2->fetch_assoc()) {
echo '<div class="col-lg-3 col-6">
          <div class="card">
            <img src="images/'.$row['FOOT_IMG'].'" class="card-img-top" alt="...">
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
  
  
  
  
  echo ' 
  <nav aria-label="...">
  <ul class="pagination page float-right me-3 mt-auto">';

if ($pages > 1) {
  $prev = $pages - 1;
  echo '<li class="page-item">
      <a class="page-link" href= "./sem1.subject1.php?pages=' . $prev . '">Previous</a>
    </li>';
} else {
  echo '<li class="page-item">
      <a class="page-link">Previous</a>
    </li>';
}
for ($i = 1; $i <= $number_of_pages; $i++) {
  $active = ($i == $pages) ? "active" : "";
  echo ' <li class="page-item ' . $active . '"><a class="page-link" href="./sem1.subject1.php?pages=' . $i . '">' . $i . '</a></li>';
}

if ($pages < $number_of_pages) {
  $next_pages = $pages + 1;
  echo '<li class="page-item">
            <a class="page-link" href="./sem1.subject1.php?pages=' . $next_pages . '">Next</a>
          </li>';
} else {
  echo '<li class="page-item disabled">
            <a class="page-link">Next</a>
          </li>';
}
echo '</ul>
        </nav>
        ';
?>