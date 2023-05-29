<?php
$showalert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../config.php";
    $foot_name = $_POST["foot-name"];
    $foot_img = $_FILES["foot-pic"];
    $type = $_POST["type"];
    $categories = $_POST["categories"];
    $detail = $_POST["product-detail"];
    $style_code = $_POST["style"];
    $pattern = $_POST["pattern"];
    $brand = $_POST["brand"];
    $sub_brand = $_POST["sub-brand"];
    $material = $_POST["material"];
    $price = $_POST["price"];
    // imge uploading process 
    $foot_img_name = $_FILES["foot-pic"]["name"];
    $foot_img_size = $_FILES["foot-pic"]["size"];
    $foot_img_tmp_name = $_FILES["foot-pic"]["tmp_name"];
    $foot_img_error = $_FILES["foot-pic"]["error"];

    if ($foot_img_error === 0) {
        $foot_img_ex = pathinfo($foot_img_name, PATHINFO_EXTENSION);
        $foot_img_ex_lc = strtolower($foot_img_ex);
        $foot_img_exs = array("jpg", "jpeg", "png");

        if (in_array($foot_img_ex_lc, $foot_img_exs)) {
            $new_foot_img_name = uniqid("IMG-", true) . '.' . $foot_img_ex;
            $foot_img_uploading_path = '../all-footwear-detail/' . $new_foot_img_name;
            move_uploaded_file($foot_img_tmp_name, $foot_img_uploading_path);
        } else {
            echo "Invalid img format. Please upload a img in jpg, png, format.";
        }
    }

    // Rest of the co

    $conn->query("CREATE TABLE IF NOT EXISTS all_footwears_768 (
        id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        FOOTWEAR_NAME varchar(30) NOT NULL,
        FOOT_IMG VARCHAR(50) NOT NULL,
        TYPE_ VARCHAR(15) NOT NULL,
        CATEGORIES VARCHAR(15) NOT NULL,
        PRODUCT_DETAIL VARCHAR(100) NOT NULL,
        STYLE_CODE VARCHAR(15) NOT NULL,
        PATTERN VARCHAR(25) NOT NULL,
        BRAND VARCHAR(30) NOT NULL,
        SUB_BRAND VARCHAR(35) NOT NULL,
        MATERIAL VARCHAR(50) NOT NULL,
        PRICE varchar(10) NOT NULL
    );");

    $query = $conn->prepare("INSERT INTO all_footwears_768 (FOOTWEAR_NAME, FOOT_IMG, TYPE_, CATEGORIES, PRODUCT_DETAIL, STYLE_CODE, PATTERN, BRAND, SUB_BRAND, MATERIAL , PRICE) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $query->bind_param("sssssssssss", $foot_name, $new_foot_img_name, $type, $categories, $detail, $style_code, $pattern, $brand, $sub_brand, $material, $price);
    $query->execute();

    if ($query) {
        header("Location: ../footear-detail.php");
        $showalert = true;
    } else {
        die("Error preparing SQL statement: " . $conn->error);
    }
}
?>