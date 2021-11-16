<?php
require_once("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "in";
    $fname     = $_POST["fname"];
    $email    = $_POST["email"];
    $password = $_POST["password"];
    
    
    $sql =
        "insert into user(user_name,  email, password, role_id) values ('$fname','$email','$password',2)";
    if($con->query($sql)){
        header("location: Account.php");
    } else{
        header("location: sign.php");
    }
    
}