<?php
$showalert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../config.php";
    $foot_name = $_POST["foot-name"];
    $foot_img = $_POST["foot-img"];
    $type = $_POST["type"];
    $categories = $_POST["categories"];
    $discount = $_POST["discount"];
    $price = $_POST["price"];

    $conn->query("CREATE TABLE IF NOT EXISTS user_deals_768 (
        id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        FOOTWEAR_NAME varchar(30) NOT NULL,
        FOOT_IMG VARCHAR(20) NOT NULL,
        TYPE_ VARCHAR(15) NOT NULL,
        CATEGORIES VARCHAR(15) NOT NULL,
        DISCOUNT varchar(5) NOT NULL,
        PRICE varchar(10) NOT NULL
    );");

    $query = $conn->prepare("INSERT INTO user_deals_768 (FOOTWEAR_NAME, FOOT_IMG, TYPE_, CATEGORIES, DISCOUNT, PRICE) VALUES (?, ?, ?, ?, ?, ?)");
    $query->bind_param("ssssss", $foot_name, $foot_img, $type, $categories, $discount, $price);
    $query->execute();

    if ($query) {
        header("Location: ../admin-deals.php");
        $showalert = true;
    } else {
        die("Error preparing SQL statement: " . $conn->error);
    }
}
?>
