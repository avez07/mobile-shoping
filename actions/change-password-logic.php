<?php
session_start();
include "../config.php";
$table = $_SESSION['table_name'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_password = $_POST['old'];
    $new_password = $_POST['new'];
    $confirm_password = $_POST['confirm'];

        $query = "SELECT * FROM shoe_user_5599 WHERE TABLE_NAME = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $_SESSION['table_name']);
    $stmt->execute();
    
  
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    $password =  $row['PASSWORD_1'];

    if ($old_password === $password) {
        $query_2 = "UPDATE `shoe_user_5599` SET `PASSWORD_1`='$confirm_password' WHERE  TABLE_NAME = ?";
    $stmt = $conn->prepare($query_2);
    $stmt->bind_param("s",$table);
    $stmt->execute();
header("location: ../change-password.php");
    } else{
         echo '<script>
       alert("password does not match");
       window.location.href = "../change-password.php";
    </script>';
    }


    
    $stmt->close();
    $conn->close();
}


    

?>