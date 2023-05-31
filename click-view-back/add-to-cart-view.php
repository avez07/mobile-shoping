<?php
session_start();
include "config.php";


$conn->query("USE wonders_order");

// Pagination logic, only the limit keyword is added to the query
$sql_query = "SELECT * FROM `{$_SESSION['table_name']}`";

$sql_result = $conn->query($sql_query);

echo '
    <table class="notes-table" style="width:98%; text-align: center">
        <thead>
            <tr>
                <th style="width: 7%;" class="ps-1">SR.NO</th>
                <th class = "text-start ps-3" style="width: 50%;">PRODUCT NAME</th>
                <th style="width: 10%;">SIZE</th>
                <th style="width: 10%;">QUANTITY</th>
                <th style="width: 15%;">PRICE</th>
                <th style="width: 12%;"></th>

            </tr>
        </thead>
        <tbody>
        <div style="width: 100%; text-align: center">';
        

if ($sql_result->num_rows > 0) {
    while ($row = $sql_result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td class="task-ellipsis text-start ps-3">' . $row['PRODUCT_NAME'] . '</td>';
        echo '<td class="task task-ellipsis">' . $row['QUANTITY'] . '</td>';
        echo '<td class="date">' . $row['SIZE'] . '</td>';
        echo '<td class="date">' . $row['PRICE'] . '</td>';
        echo '<td class="date">' . $row['PRICE'] . '</td>';

        echo '</tr>';
    }
} else {
    echo "No rows found";
}

echo '</tbody>
</div></table>';



?>