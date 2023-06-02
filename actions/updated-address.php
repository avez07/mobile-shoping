<?php
session_start();
include "../config.php";
$table = $_SESSION['table_name'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "../config.php";
        $name = $_POST["name"];
        $phone = $_POST["phone-number"];
        $email_id = $_POST["email"];
        $address = $_POST["add"];
        $landmark = $_POST["land"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
  

     $query =   "UPDATE `shoe_user_5599` SET `CUSTOMER_NAME`='?',`PHONE_NUMBER`='?',`EMAIL_ID`='?',`ADDRESS_`='?',`LANDMARK`='?',`CITY`='?',`STATE_`='?',`ZIP`='?' WHERE `TABLE_NAME`='?'";
     $stmt = $conn->prepare($query);
     $stmt->bind_param("sssssssss",$name, $phone, $email_id, $address, $landmark, $city, $state, $zip, $table);
     $stmt->execute();
}
?>