<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
		
		<link rel="stylesheet" href="css1/style.css"> 
                <link rel="stylesheet" href="css1/screen.css"> 
  <script type="text/javascript" src="js/jquery-min.js"></script>   
  <script type="text/javascript" src="js/javascript.js"></script>
   <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <title>LOG IN</title>
</head>
<body>
  <header id="header">
	<!--<a type="button" class="btn btn-primary"  href="index.php">Home</a>-->
<div>
	<a href="index.php"><h1>CourseKart</h1></a>
	<!--<a class="btn btn-xl" href="index.php">Home</a>-->
	</div>
  </header>
  <section id="maincontent">
  	<div id="container">
  		<div id="tabbox">  	  			
        		<a href="#" id="signin" class="tab select">signin</a>
        		<a href="#" id="signup" class="tab signup">signup</a>
  		</div>
  		<div id="formpanel">
  			<div id="signinbox">
  				<form action="login.php" id="signinform" method="post">
  			<label for="email">Email Address</label>
            		<input type="email" class="form-group" placeholder="Enter your mail-id" name="email" id="email" class="txtfield" tabindex="1" autocomplete="off" required data-validation-required-message="Please enter your email.">
			<p class="help-block text-danger"></p>
                       
            		<label for="password">Password </label>
            		<input type="password" class="form-group" placeholder="Your Password" name="password" id="password" class="txtfield" tabindex="2" autocomplete="off" required data-validation-required-message="Please enter your password">
			<p class="help-block text-danger"></p>      
                
            		<input type="submit" name="loginbtn" id="submitlogin" value="LOGIN" class="btn" tabindex="3">
  				</form>
  			</div>
  			<div id="signupbox">
  				<form action="signup.php" id="signupform" method="post" name="signupform" onSubmit="return Validate()">
  			<label for="username">User Name</label>
          <input type="text" name="uname" id="uname" class="form-group" class="txtfield" tabindex="8" autocomplete="off" required data-validation-required-message="Please enter your user name.">
           <p class="help-block text-danger"></p>

          <label for="newemail">Email Address</label>
          <input type="email" name="newemail" id="newemail" class="form-group" class="txtfield" tabindex="5" autocomplete="off" required data-validation-required-message="Please enter your email.">
           <p class="help-block text-danger"></p>

          <label for="password1">Password</label>
          <input type="password" name="password1" id="password1"class="form-group"  class="txtfield" tabindex="6"  autocomplete="off" required data-validation-required-message="Please enter your password">
          <p class="help-block text-danger"></p>

          <label for="password2">Confirm Password</label>
          <input type="password" name="password2" id="password2" class="form-group" class="txtfield" tabindex="7" autocomplete="off" required data-validation-required-message="Confirm password">
          <p class="help-block text-danger"></p>

          <input type="submit" name="registerbtn" id="registerbtn" value="SIGN UP" class="btn" tabindex="9">
  				</form>
  			</div>
  		</div>
  	</div>
	
  </section>  <footer id="footer">
  	<p>&copy CourseKart, 2017</p>
  </footer>
</body>
	<script type="text/javascript">
		var password = document.forms["signupform"]["password1"];
		var conf_password = document.forms["signupform"]["password2"];
		var user = document.forms["signupform"]["uname"];
		var new_email = document.forms["signupform"]["newemail"];

		function Validate(){

			if(password.value != conf_password.value)
			{
				alert("Sorry...The two passwords didn't match");
				password1.value="";
				password2.value="";
				return false;
				
			}
			else{
				alert("Succesfully signed up to CourseKART");
				return true;
			}
		}
		

	</script>
</html>
