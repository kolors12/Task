
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
      <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <?php $this->load->view('header.php');?>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="well">
        <div class="container">
          <h3 class="display-9"> SELLING PRODUCTS!</h3>
         
        
        </div>
      </div>

        <section class="sep-top-2x" style="margin-bottom:10px;">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
             
            </div>
          </div>
          <div class="row">
		  <?php 	 
                       
					
					        foreach($image as $row){
								?>
            <div class="col-md-3 sep-bottom-lg"><a href="#" class="product-image outline-outward"><img src="upload/<?php echo $row['bill']; ?>" style="width:70%; height:150px;" alt="" class="img-responsive"></a>
              <div class="product-title">
                <p><b>Product Title</b>: <?php echo $row['pro_name']?></p>
              </div>
              <div class="product-detail">
                <div class="pull-left price-shop text-left">
                
				  <ins><b>Price :</b> Rs.<?php echo $row['pro_price']?></ins>
				  <p><b>Description :</b><?php echo $row['pro_description']?></p>
                </div>
				<div class="pull-right">
				<a href="product_details/<?php echo $row['id']?>" class="btn btn-success" style="color:#fff">Buy Product</a>
			  </div>
               <br> 
              </div>
            </div>
					<?php }?>
          
           
         
           
           
         
        </div>
      </div></section>

    </main>

    <footer class="container">
      <p>&copy; Company 2017</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
       <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
