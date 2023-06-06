<?php
if (!isset($_SESSION['user_name']) && !isset( $_SESSION['customer_name'])) {
    header("location: ./index.php");
}
?>