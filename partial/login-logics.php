<?php

// Initialize variables
$admin = false;
$user = false;
$show_login_error= false;


// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $username = $_POST["user"];
    $password = $_POST["pass"];

    // Use prepared statements to prevent SQL injection attacks
    $stmt = $conn->prepare("SELECT * FROM shoe_user_5599 WHERE USER_NAME = ? AND PASSWORD_1 = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

  
   
    // Check if the query returned any rows
    if ($result->num_rows == 1) {
       
        $row = $result->fetch_assoc();
        $_SESSION['customer_name'] = $row['CUSTOMER_NAME'];
        $user = true;
        // Redirect the user to the admin dashboard
        header("Location:./shop.php");
        exit();
    } else{
        $show_login_error = true;
     
    } 
    if ($_SESSION['user_name'] == "admin" &&  $_SESSION['password'] == "password") {
        header("Location: ../admin-deals.php");
        exit();
       
    } 
}
if (isset($_SESSION['user_name']) && $_SESSION['user_name'] == "admin"  && isset($_SESSION['password']) && $_SESSION['password'] == "password") {
    $admin = true;
}



// start the session


// check if the session is not set or has been destroyed or unset




?>
