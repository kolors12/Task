<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>asserts/signin.css" rel="stylesheet">
  </head>

  <body><br><br>
  
  <?php $this->load->view('header.php');?>
  
 <br><br><br><br>
    <div class="container">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	
	
	 <form class="form-signin" method="post" style="background: #e6e4e4;padding: 20px;"  name="myform" onsubmit="return validateform()">
        <h2 class="form-signin-heading">Sign in</h2>
  <div class="form-group">
    <label for="mobile">Username</label>
    <input type="text"  id="number" class="form-control" name="number" placeholder="Mobile Number">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password"  id="password" placeholder="Password">
  </div>
  <!--div class="checkbox" style="float:right;">
    <label> <a href="register"> <button type="button" class="btn btn-primary btn-sm">Register</button></a></label>
  </div-->
  <button type="submit" name="submit" value="submit"class="btn btn-info btn-sm">Submit</button>
</form>
</div>
<div class="col-md-4"></div>
    </div> <!-- /container -->
  </body>
</html>

	

	
	

<script>  
function validateform(){  
var number=document.myform.number.value;  
var password=document.myform.password.value;  
  
if (number==null || number==""){  
  alert("Mobile Number can't be blank");  
  return false;  
}else if(password.length<6){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>  


