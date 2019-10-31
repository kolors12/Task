<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>assets/favicon.ico">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>asserts/signin.css" rel="stylesheet">
	
  </head>

  <body><br><br>
 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php echo base_url();?>view_message">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>view_message">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>view_message">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="<?php echo base_url();?>view_message">Disabled</a>
          </li>
          <li class="nav-item dropdown">
         
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
      
		
		<!--div class="btn-group">

 <a href="login"> <button type="button" class="btn btn-primary btn-sm">login</button></a>&nbsp;
 <a href="register"> <button type="button" class="btn btn-warning btn-sm">Register</button></a>

</div-->
	<div class="btn-group">
 

 
 

</div>
		
      </div>
    </nav><br><br>
    <div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
      <form  method="post" id="loginttt" onSubmit="return check();" style="background: #e6e4e4;padding: 20px;">
        <h2 class="form-signin-heading">Buying Details</h2>
		 <?php 	 
              foreach($detailss as $row){
								?>
        <label for="inputEmail" class="sr-only">Product Name</label>
        <input type="text"  name="pname" id="name" class="form-control required" value="<?php echo $row['pro_name']?>"  placeholder="Product Name" /> <br> 
		<label for="inputEmail" class="sr-only">Product price</label>
        <input type="text"  name="pprice" id="name" class="form-control required" value="<?php echo $row['pro_price']?>" placeholder="Product price" /> <br>
		<?php }?>			 
		<label for="inputEmail" class="sr-only">Name</label>
        <input type="text"  name="name" id="name" class="form-control required"  placeholder="Name" /> <br>       
		<label for="inputEmail" class="sr-only">Email</label>
        <input type="text"  name="email" id="email" class="form-control required" placeholder="Email address"  /><br> 
        <label for="inputPassword" class="sr-only">Mobile Number</label>
        <input type="text"  name="number" id="number" class="form-control required" placeholder="Mobile Number"><br><br>  <label for="inputPasswordd" class="sr-only">Address</label>
        <textarea type="text"  name="address" id="address" class="form-control required" placeholder="Address"></textarea><br><br>   
		 
		
       
        <button class="btn btn-sm btn-primary " type="submit" name="submit" value="submit">Submit</button>
		 
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
		var address = document.getElementById('address').value;
	   
	   
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
		
		else if(address == ''){
            alert("Please enter your Address");
            document.getElementById('address').focus();
            
            return false;
        }
		
         
		
      }
    </script>

  </body>
</html>
