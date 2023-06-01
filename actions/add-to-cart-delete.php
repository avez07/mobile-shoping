<script>
    alert("do you really want to delete")
</script>
<?php
session_start();
include "../config.php";
$id = $_GET['id'];
$conn -> query("use wonders_order");
$qur = "DELETE FROM  `{$_SESSION['table_name']}` WHERE id = $id";
$result_delet = $conn->query($qur);
header("location: ../my-order.php")

?>