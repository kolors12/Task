<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/favicon.ico">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="asserts/signin.css" rel="stylesheet">
	
  </head>

  <body><br><br>
	
	<?php $this->load->view('header.php');?>
	<br><br><br>
    <div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
      <form  method="post" id="loginttt" onSubmit="return check();" style="background: #e6e4e4;padding: 20px;">
        <h2 class="form-signin-heading">Please Register</h2>
        <label for="inputEmail" class="sr-only">Name</label>
        <input type="text"  name="name" id="name" class="form-control required"  placeholder="Name" /> <br>       
		<label for="inputEmail" class="sr-only">Email</label>
        <input type="text"  name="email" id="email" class="form-control required" placeholder="Email address"  /><br> 
        <label for="inputPassword" class="sr-only">Mobile Number</label>
        <input type="text"  name="number" id="number" class="form-control required" placeholder="Mobile Number"><br>   
		<label for="inputPassword" class="sr-only">Password</label>
        <input type="password"  class="form-control required" id="password" name="password" placeholder="Password" />  <br> 
		
       
        <button class="btn btn-sm btn-primary " type="submit" name="submit" value="submit">Register</button>
      </form>
</div>
<div class="col-md-3"></div>
    </div> <!-- /container -->
	  
    </div> 

	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<script type ="text/javascript">
      function check(){
		// alert("hai");
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var numbers = /^[0-9]+$/;  
		var name = document.getElementById('name').value;
		var email = document.getElementById('email').value;
		var number = document.getElementById('number').value;
	    var password = document.getElementById('password').value;
	   
	    if(name == ''){
            alert("Please enter your Name");
            document.getElementById('name').focus();
            
            return false;
        }
           else if(email == ''){
            alert("Please enter your Email");
            document.getElementById('email').focus();
            return false;

        } else if(!filter.test(email)){
            
            alert("Enter valid email format");
            document.getElementById('email').focus();
            return false;
        } 		
	       
		    else if(number == ''){
            alert("Please enter your Mobile Number");
            document.getElementById('number').focus();
            return false;
        }
	       else if(isNaN(number)){
            
            alert("Enter valid number format");
            document.getElementById('number').focus();
            return false;
      }
	  else if(number.length !=10 ){
            
            alert("Enter 10 characters length");
            document.getElementById('number').focus();
            return false;
        }
		
		
		
         else if(password == ''){
           alert("Please enter Your Password");
            document.getElementById('password').focus();
            return false;
        } 
		
      }
    </script>

  </body>
</html>
