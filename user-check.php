<?php
session_start();
require_once("db.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $_SESSION["email_error"]    = "";
    $_SESSION["password_error"] = "";
    $_SESSION["error_msg"]      = "";
    
    $email    = $_POST["email"];
    $password = $_POST["password"];
    
    if($email !== '' && $password !== ''){
        
        $sql = "select * from user where email='$email' and password='$password'";
        
        $result = $con->query($sql);
        if($result->num_rows > 0){
            
            $user = $result->fetch_assoc();
            
            $_SESSION["user_id"]    = $user["user_id"];
            $_SESSION["fname"]  = $user["fname"];
            $_SESSION["email"] = $user["email"];
            
            $role = $user["role_id"];
            
            if($role == 1){
                header("Location: include/adminnap.php");
            }
            if($role == 2){
                header("Location: Account.php");
            }
        } else{
            $_SESSION["error_msg"] = "Username or password is wrong, try again!";
            header("Location: login.php");
        }
        
    } else{
        
        if($email === ""){
            $_SESSION["email_error"] = "Email is required";
        }
        if($password === ""){
            $_SESSION["password_error"] = "Password is required";
        }
        header("Location: login.php");
    }
}