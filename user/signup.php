<!doctype html>
<html lang="en">
  <head>
  	<title>P2P Wealth Creation | Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="login_assets/css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<img src="../assets/img/logo-white.png" style="width: 280px ; height: 100px">
								<h2>Welcome to Signup</h2>
								<p>Already have an account?</p>
								<a href="login.php" class="btn btn-white btn-outline-white">Sign In</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<a href="../index.html"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
			      			<h3 class="mb-4" style="text-align: center;">Sign Up</h3>
			      		</div>
								
			      	</div>
							<form id="myForm" method="POST" action="customer_request.php" enctype="multipart/form-data" onsubmit="return form_validation()" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="full_name">Full Name</label>
			      			<input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Full Name" >
			      			<small style="margin-top: 5px ; color: red ; font-weight : bold" id="full_name_error"></small>
			      		</div>
			      		
		          
		            <div class="form-group mb-3">
			      			<label class="label" for="email">Email</label>
			      			<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Address" >
			      			<small style="margin-top: 5px ; color: red ; font-weight : bold" id="email_error"></small>
			      	</div>
			      	<div class="form-group mb-3">
			      			<label class="label" for="password">Password</label>
			      			<input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" >
			      			<small style="margin-top: 5px ; color: red ; font-weight : bold" id="password_error"></small>
			      	</div>
			     
		            <div class="form-group">
		            	<div class="row">
		            	<div class="col-md-6">
		            	<button type="submit" name="signup" class="form-control btn btn-primary submit px-3">Sign Up</button>	
		            	</div>	
		            	<div class="col-md-6">
		            	<button  class="form-control btn btn-light submit px-3" onclick="reset_form()">Reset</button>	
		            	</div>	
		            		
		            	</div>
		            	
		            	
		            </div>
		           
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="login_assets/js/jquery.min.js"></script>
  <script src="login_assets/js/popper.js"></script>
  <script src="login_assets/js/bootstrap.min.js"></script>
  <script src="login_assets/js/main.js"></script>

	</body>
</html>
<script type="text/javascript">
  function form_validation()
  {
    var full_name = $('#full_name').val();
    var email = $('#email').val();
    var password = $('#password').val();
    

    var passw_test=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

    if (full_name.length < 1) 
    {
     document.getElementById("full_name_error").innerHTML = "Please Enter Your Full Name";
     return false;
    }
    else if(full_name.length > 0)
    {
     document.getElementById("full_name_error").innerHTML = "";
     
    }  
   
    if (email.length < 1) 
    {
     document.getElementById("email_error").innerHTML = "Please Enter Your Email Address";
     return false;
    }
    else if(email.length > 0)
    {
     document.getElementById("email_error").innerHTML = "";
     
    } 
    if (password.length < 1) 
    {
     document.getElementById("password_error").innerHTML = "Please Enter Your Password";
     return false;
    }
    else if(password.length > 0)
    {
     document.getElementById("password_error").innerHTML = "";
     
    } 

     if (!password.match(passw_test)) 
    {
     document.getElementById("password_error").innerHTML = "Password should be more than 8 characters & must use alphanumeric characters ";
     return false;
    }
    else if(password.match(passw_test))
    {
     document.getElementById("password_error").innerHTML = "";
     
    } 

  }

  function reset_form()
  {
    document.getElementById("myForm").reset();

  }
</script>        

