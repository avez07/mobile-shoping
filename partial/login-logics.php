<?php

// Initialize variables
$admin = false;
$user = false;
$show_login_error = false;


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
        $table_name = $row['TABLE_NAME'];
        $_SESSION['table_name'] = $table_name;

        // Redirect the user to the admin dashboard
        header("Location:./shop.php");
        exit();
    } else {
        $show_login_error = true;

    }
    if ($_SESSION['user_name'] == "admin" && $_SESSION['password'] == "password") {
        $_SESSION['customer_name'] = "AAVEZ";
        header("Location: ./shop.php");
        exit();

    }
}
if (isset($_SESSION['user_name']) && $_SESSION['user_name'] == "admin" && isset($_SESSION['password']) && $_SESSION['password'] == "password") {
    $admin = true;
} else{
    $user= true;
}

?>