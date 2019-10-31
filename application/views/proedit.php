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
 <?php $this->load->view('header.php');?><br><br><br>
    <div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
      <form  method="post" id="loginttt" onSubmit="return check();" style="background: #e6e4e4;padding: 20px;">
	  	<?php  foreach($details as $row){
								?>
        <h2 class="form-signin-heading">Edit Property</h2>
		
                                   
         <input type="hidden" class="form-control  required input-lg" id="model" value="<?php echo $row['id']?>"   name ="id" placeholder="Title Name">
							      
							   
        <label for="inputEmail" class="sr-only">Product Name</label>
        <input type="text"  name="pro_name" id="name" class="form-control required"  value="<?php echo $row['pro_name']?>" placeholder="Product Name" /> <br>       
		<label for="inputEmail" class="sr-only">Product Price</label>
        <input type="text"  name="pro_price" id="email" class="form-control required" value="<?php echo $row['pro_price']?>" placeholder="Product Price"  /><br> 
        <label for="inputPassword" class="sr-only">Product Description</label>
        <textarea type="text"  name="pro_description" id="number" class="form-control required"  placeholder="Product Description"><?php echo $row['pro_description']?></textarea><br>   
		<label for="inputPassword" class="sr-only">Product Image</label>
        <input type="file"  class="form-control required" id="password" name="bill" required />  <br> 
		
       
	     <img src="../upload/<?php echo $row['bill']?>"  style="width:50%; height:150px;" alt="Image Not Found"/>  <br><br> 

	   
        <button class="btn btn-sm btn-primary " type="submit" name="submit" value="submit">Update</button>
		<?php }?>
      </form>
</div>
<div class="col-md-3"></div>
    </div> <!-- /container -->
	  
    </div> 

	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<script type ="text/javascript">
      function checkk(){
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
