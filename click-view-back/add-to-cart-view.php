<script>
     function alert_msg() {
        if (window.confirm("Are You Sure , You Want To `DELETE` This Record")) {
            alert("After `DELETE` You Cannot Undo");
        } else {
            return false;
        }
    }
</script>
<?php
session_start();
include "config.php";
$serialnumber = 1;

$conn->query("USE wonders_order");

// Pagination logic, only the limit keyword is added to the query
$sql_query = "SELECT * FROM `{$_SESSION['table_name']}`";

$sql_result = $conn->query($sql_query);


        

if (is_bool($sql_result) && !$sql_result) {
    echo "NO PRODUCT IS ADD IN THE CART";
} elseif ($sql_result->num_rows > 0) {
    echo '
   <div class= extra-div></div>
    <table class="notes-table" style="width:98%; text-align: center">
        <thead>
            <tr class = "sticky-top">
                <th style="width: 7%;" class="ps-1">SR.NO</th>
                <th class="text-start ps-3" style="width: 10%;">IMAGE</th>
                <th class="text-start ps-3" style="width: 40%;">PRODUCT NAME</th>
                <th style="width: 8%;">SIZE</th>
                <th style="width: 10%;">QUANTITY</th>
                <th style="width: 10%;">PRICE</th>
                <th style="width: 10%;">SUB TOTAL</th>
                <th style="width: 5%;"></th>
            </tr>
        </thead>
        <tbody>
        ';
   
$serialNumber = 1; 
$totalPrice = 0; 

while ($row = $sql_result->fetch_assoc()) {
    echo '<tr class="hover-back">';
    echo '<td>' . $serialNumber . '</td>';
    echo '<td class="task-ellipsis text-start ps-3"><img src="all-footwear-detail/'.$row['PRODUCT_IMG'].'" style="height:80px;"></td>';
    echo '<td class="task-ellipsis text-start ps-3">' . $row['PRODUCT_NAME'] . '</td>';
    echo '<td class="date">' . $row['SIZE'] . '</td>';
    echo '<td class="task task-ellipsis">' . $row['QUANTITY'] . '</td>';
    echo '<td class="date">' . $row['PRICE'] . '</td>';

   
    $price = str_replace('$', '', $row['PRICE']);

    $subTotal = $row['QUANTITY'] * $price;
    echo '<td class="date">$' . $subTotal . '</td>';
    echo '<td class="delete"><a href="actions/add-to-cart-delete.php?id='. $row['id'] .'" onClick="return alert_msg();" style="cursor:pointer;"><span><i class="fa-solid fa-trash-can" style="color:#b12704"></i></span></a></td>';
    echo '</tr>';

    $totalPrice += $subTotal; 
    $serialNumber++; 
}

echo '<tr>';
echo '<td colspan="6">Subtotal</td>';
echo '<td>$' . $totalPrice . '</td>';
echo '</tr>';

} else {
    echo "No rows found";
}


echo '</tbody>
</div>
</table>';



?>