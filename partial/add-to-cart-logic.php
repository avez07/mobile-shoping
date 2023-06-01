<?php
session_start();
$id = $_GET["id"];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../config.php";
    
    $product_name = $_POST["product_name"];
    $product_img = $_POST["product_img"];
    $quantity = $_POST["qty"];
    $size = $_POST["size"];
    $type = $_POST["type"];
    $categories = $_POST["categries"];
    $price = $_POST["product_price"];
    $code = $_POST["style_code"];
    $brand = $_POST["brand"];
    $sub_brand = $_POST["sub_brand"];
    $material = $_POST["material"];
    print_r($product_img);

    $conn->query("CREATE TABLE IF NOT EXISTS `wonders_order`.`{$_SESSION['table_name']}` (
        id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        PRODUCT_NAME varchar(30) NOT NULL,
        PRODUCT_IMG varchar(50) NOT NULL,
        QUANTITY FLOAT NOT NULL,
        SIZE FLOAT NOT NULL,
        TYPE_ VARCHAR(50) NOT NULL,
        CATEGORIES VARCHAR(15) NOT NULL,
        PRICE varchar(10) NOT NULL,
        STYLE_CODE VARCHAR(15) NOT NULL,
        BRAND VARCHAR(30) NOT NULL,
        SUB_BRAND VARCHAR(35) NOT NULL,
        MATERIAL VARCHAR(50) NOT NULL
    );");

    $conn->query("USE wonders_order");

    $query = "INSERT INTO {$_SESSION['table_name']} (PRODUCT_NAME,PRODUCT_IMG, QUANTITY, SIZE, TYPE_, CATEGORIES, PRICE, STYLE_CODE, BRAND, SUB_BRAND, MATERIAL) 
              VALUES ('$product_name', '$product_img', '$quantity', '$size', '$type', '$categories', '$price', '$code', '$brand', '$sub_brand', '$material')";

    if ($conn->query($query) === TRUE) {
        if (isset($_GET['t'])) {
            $t = $_GET['t'];
            header("location: ../single-view.php?id=$id&t=$t");
        } else{
            header("location: ../single-view.php?id=$id");
        }
      
    } else {
        echo "Error inserting record: " . $conn->error;
    }
}
?>
