
  
<?php session_start() ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
          <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="style.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
<div>
   <?php include_once('include/headerac.php')
   ?>
   </div>

<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 mt-4">
            <div class="border border-primary p-2">
                <h4>Login</h4>
                
                <?php if(isset($_SESSION["email_error"]) && $_SESSION["email_error"]){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION["email_error"]; ?>
                    </div>
                <?php } ?>
                
                <?php if(isset($_SESSION["password_error"]) && $_SESSION["password_error"]){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION["password_error"]; ?>
                    </div>
                <?php } ?>
                
                <?php if(isset($_SESSION["error_msg"]) && $_SESSION["error_msg"]){ ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_SESSION["error_msg"]; ?>
                    </div>
                <?php } ?>
                
                <form method="post" action="user-check.php">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email"
                               aria-describedby="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>