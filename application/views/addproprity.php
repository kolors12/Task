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
 <?php $this->load->view('header.php');?><br><br><br><br>
		
    <div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
      <form  method="post" id="loginttt" onSubmit="return check();" style="background: #e6e4e4;padding: 20px;"  ><!--enctype="multipart/form-data"-->
        <h2 class="form-signin-heading">Add  Property</h2>
        <label for="inputEmail" class="sr-only">Product Name</label>
        <input type="text"  name="pro_name" id="name" class="form-control required"  placeholder="Product Name" /> <br>       
		<label for="inputEmail" class="sr-only">Product Price</label>
        <input type="text"  name="pro_price" id="price" class="form-control required" placeholder="Product Price"  /><br> 
        <label for="inputPassword" class="sr-only">Product Description</label>
        <textarea type="text"  name="pro_description" id="des" class="form-control required" placeholder="Product Description"></textarea><br>   
		<label for="inputPassword" class="sr-only">Product Image</label>
        <input type="file"  class="form-control required" id="bill" name="bill" placeholder="Password" />  <br> 
		
       
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
		var price = document.getElementById('price').value;
		var des = document.getElementById('des').value;
	    var bill = document.getElementById('bill').value;
	   
	    if(name == ''){
            alert("Please enter Yor Product Name");
            document.getElementById('name').focus();
            
            return false;
        }
		
		   else if(price == ''){
            alert("Please enter your Product Price");
            document.getElementById('price').focus();
            return false;
        }
	       else if(isNaN(price)){
            
            alert("Enter valid number format");
            document.getElementById('price').focus();
            return false;
      }
	  /* else if(number.length !=10 ){
            
            alert("Enter 10 characters length");
            document.getElementById('number').focus();
            return false;
        } */
		
		
		
           /* else if(email == ''){
            alert("Please enter your Email");
            document.getElementById('email').focus();
            return false;

        } else if(!filter.test(email)){
            
            alert("Enter valid email format");
            document.getElementById('email').focus();
            return false;
        } 		
	        */
		 
		
		 else if(des == ''){
           alert("Please enter Product Description");
            document.getElementById('des').focus();
            return false;
        } 
		
         else if(bill == ''){
           alert("Please choose Your file");
            document.getElementById('bill').focus();
            return false;
        } 
		
      }
    </script>

  </body>
</html>
