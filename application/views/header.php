<?php if($this->session->userdata('id') !=''){?>
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
 

 <a href="<?php echo base_url();?>logout"><button type="button" class="btn btn-primary btn-sm">Signout</button></a>
 

</div>
		
      </div>
    </nav>
<?php }else{?>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php echo base_url();?>view_message">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>view_message"">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>view_message"">Link</a>
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
      
		
		<div class="btn-group">

 <a href="login"> <button type="button" class="btn btn-primary btn-sm">login</button></a>&nbsp;
 <a href="register"> <button type="button" class="btn btn-warning btn-sm">Register</button></a>

</div>
		
      </div>
    </nav>
<?php }?>