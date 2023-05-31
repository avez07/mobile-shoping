<?php


$showalert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "../config.php";
    $name = $_POST["name"];
    $phone = $_POST["phone-number"];
    $email_id = $_POST["email"];
    $username = $_POST["user"];
    $address = $_POST["add"];
    $landmark = $_POST["land"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $pass = $_POST["pass1"];

    // LOGICS FOR UNIQUE NAME OF USER THAT CREATED A TABLE IN THE WONDERS-ORDERS DATABASE
    $str = $name;
    $pattern = "/[\s.]+/";
    // Use a regular expression pattern to match one or more spaces
    $replace = "_";
    
    $result = preg_replace($pattern, $replace, $str);
  $table_name = uniqid($result."_");



    $conn->query("CREATE TABLE IF NOT EXISTS shoe_user_5599(
                                    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
                                 CUSTOMER_NAME varchar(30) NOT NULL,
                                 PHONE_NUMBER BIGINT NOT NULL,
                                 EMAIL_ID VARCHAR(40) NOT NUll,
                                  USER_NAME VARCHAR(20) NOT NUll,
                                 ADDRESS_ varchar(30) NOT NULL,
                                 LANDMARK varchar(30) NOT NULL,
                                 CITY varchar(30) NOT NULL,
                                 STATE_ varchar(30) NOT NULL,
                                 ZIP INT(10) NOT NULL,
                                  PASSWORD_1 varchar(20) NOT NUll,
                                  TABLE_NAME VARCHAR(50) UNIQUE NOT NULL,
                                   DATE_TIME DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
                                      );");

    $query = $conn->query("INSERT INTO shoe_user_5599(CUSTOMER_NAME ,  PHONE_NUMBER , EMAIL_ID , USER_NAME ,  ADDRESS_ ,  LANDMARK , CITY ,  STATE_ , ZIP , PASSWORD_1, TABLE_NAME) VALUES ( '$name', '$phone' , '$email_id',  '$username', '$address' , '$landmark' , '$city' , '$state' , '$zip' , '$pass' ,'$table_name')");


    if (!$query) {
        die("Error preparing SQL statement: " . $conn->error);
    } else {
        header("location:../signup.php");
        $showalert = true;

    }
}
;

?>