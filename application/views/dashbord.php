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
	
  </head><br>

 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
           
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
       <!-- <form class="form-inline my-2 my-lg-0">
        
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">login</button>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>-->
		
		
		<div class="btn-group">
  <button type="button" class="btn btn-warning btn-sm">  Hi: <?php echo $user_name; ?></button>&nbsp;

 <a href="<?php echo base_url();?>logout"><button type="button" class="btn btn-primary btn-sm">Signout</button></a>
 

</div>
		
      </div>
    </nav><br><br>
<h2 align="center">Buying a Property</h2>


<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>

<div class="row">
<div class="col-md-1"></div>
<div class="col-md-10">
  <div class="form-group" style="text-align:right;">
				<a href="addproprity"><button type="button"  class="btn btn-sm btn-primary">Add Property</button></a>
			  
			</div>
			
 <table id="tableData"class="table color-bordered-table success-bordered-table table-hover results" border="1">
						<thead>
							<tr>
								
								<th>S.No</th>
								<th>Product Name</th>
								<th>Product price</th>
								
								<th>Description</th>
								<th>Image</th>
						        <th align="center">Edit/Delet</th>
								
							</tr>
							
						</thead>
						<tbody>	
					<?php 	 
                       
					if(!empty($newsup)) {
						$i = 1;
					        foreach($newsup as $row){
								
								?>
							<tr>
							
								
								<td><?php echo $i?></td>
								<td><?php echo $row['pro_name']?></td>
								<td><?php echo $row['pro_price']?></td>
							
							
								<td><?php echo substr($row['pro_description'],0,15); ?></td>
								<!--td ><?php echo $row['bill']?></td-->
								<td class="center"><img src="upload/<?php echo $row['bill']; ?>" alt="" height="80" width="50"/></td>
								<td><a class="text-center btn-sm btn-warning" href="<?php echo base_url();?>proedit/<?php echo $row['id']; ?>">Edit</a> 
								<a Onclick="return ConfirmDelete();" class="text-center btn-sm btn-warning "  href="news_delet/<?php echo $row['id']?>" >Delet</td>
								</tr>
				                <?php $i++;  } } else { ?>
				                <tr >
							    <td colspan="6" style="text-align: center"> 
							    <div class="td-bg-first" style= "color:Green"> <b><?php echo "No result Found...!" ?></b></div>
							    </td>
							    </tr>
							    <?php } ?>
							
							
						</tbody>						

					</table>
					</div>
					<div class="col-md-1"></div>
					</div>

          
</body>
</html>
<script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to delete?");
      if (x)
          return true;
      else
        return false;
    }
</script>     

