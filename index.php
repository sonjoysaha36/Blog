<?php
session_start();
require_once("db.php");?>


  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
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
                header('include/adminnap.php');
            }
            if($role == 2){
              
               header('include/header.php');
              
              
            }
        } else{
          header('include/headerac.php');
        }
        
    } 
}
?>
<?php
include_once('include/headerac.php');
?>
   

   
    
</body>
</html>