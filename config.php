<?php
 $servername = 'localhost';
 $user = 'root';
 $password = '';
 $database = "wonders";
 
 $conn = new mysqli($servername , $user , $password , $database);
 
 if($conn -> connect_error){
     die('error in connection'+$conn -> connect_error);
 }else{
    //  echo('connect susessfull');
 };
 
?>