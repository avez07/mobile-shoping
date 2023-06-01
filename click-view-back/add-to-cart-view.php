<?php
session_start();
include "config.php";


$conn->query("USE wonders_order");

// Pagination logic, only the limit keyword is added to the query
$sql_query = "SELECT * FROM `{$_SESSION['table_name']}`";

$sql_result = $conn->query($sql_query);


        

if (is_bool($sql_result) && !$sql_result) {
    echo "NO PRODUCT IS ADD IN THE CART";
} elseif ($sql_result->num_rows > 0) {
    echo '
    <table class="notes-table" style="width:98%; text-align: center">
        <thead>
            <tr>
                <th style="width: 7%;" class="ps-1">SR.NO</th>
                <th class="text-start ps-3" style="width: 10%;">IMAGE</th>
                <th class="text-start ps-3" style="width: 45%;">PRODUCT NAME</th>
                <th style="width: 10%;">SIZE</th>
                <th style="width: 10%;">QUANTITY</th>
                <th style="width: 10%;">PRICE</th>
                <th style="width: 8%;"></th>
            </tr>
        </thead>
        <tbody>
        <div style="width: 100%; text-align: center">';

    while ($row = $sql_result->fetch_assoc()) {
        echo '<tr class= "hover-back">';
        echo '<td>' . $row['id'] .'</td>';
        echo '<td class="task-ellipsis text-start ps-3"><img src="all-footwear-detail/'.$row['PRODUCT_IMG'].'" style = "height:80px;"></td>';
        echo '<td class="task-ellipsis text-start ps-3">' . $row['PRODUCT_NAME'] . '</td>';
        echo '<td class="date">' . $row['SIZE'] . '</td>';
        echo '<td class="task task-ellipsis">' . $row['QUANTITY'] . '</td>';
        echo '<td class="date">' . $row['PRICE'] . '</td>';
        echo '<td class="delete"><a href = "actions/add-to-cart-delete.php?id='. $row['id'] .'" style= "cursor:pointer;"><span><i class="fa-solid fa-trash-can" style = "color:#b12704"></i></span></a></td>';
        echo '</tr>';
    }
} else {
    echo "No rows found";
}


echo '</tbody>
</div></table>';



?>