<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Registration Form</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" href="style.css">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div>
   <?php include_once('include/headerac.php')
   ?>
   </div>
 <div class="container">
 <!---heading---->
     <header class="heading"> Registration-Form</header><hr></hr>
	<!---Form starting----> 
	<form method="post" action="sign-save.php">
	<div class="row ">
	 <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
			     <div class="col-xs-4">
          	         <label class="firstname">Full Name :</label> </div>
		         <div class="col-xs-8">
		             <input type="text" name="fname" id="fname" placeholder="Enter your Full Name" class="form-control ">
             </div>
		      </div>
		 </div>
		 
		 
       
     <!-----For email---->
		 <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
		             <label class="mail" >Email :</label></div>
			     <div class="col-xs-8"	>	 
			          <input type="email" name="email"  id="email"placeholder="Enter your email" class="form-control" >
		         </div>
		     </div>
		 </div>
	 <!-----For Password and confirm password---->
          <div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Password :</label></div>
				  <div class="col-xs-8">
			             <input type="password" name="password" id="password" placeholder="Enter your Password" class="form-control">
				 </div>
          </div>
		  </div>
		  
     
               <button class="btn btn-lg btn-primary btn-block" type="submit">
                Sign In
            </button>
		 </div>
		 <a href="login.php">Already have an account</a>

	 </div>	 
</form>
		 		 
		 
</div>

</body>		
</html>