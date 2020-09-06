<!DOCTYPE html>
<html>
<head>
	<title>iPoll :: Login</title>

	<!-- Latest compiled and minified CSS -->
<link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo base_url();?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/lib/jquery/jquery.min.js"></script>
<link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom_validation.js"></script>
<link rel="stylesheet" href="<?php echo base_url('');?>/assets/css/custom_style.css" >
<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/ipoll.css" >
<noscript>Your browser does not support JavaScript!</noscript>

</head>
<body>
  <body>
    <header>
      <h1><span class="i">i</span><span class="b">P</span><span class="u">o</span><span class="y">l</span><span class="i">l</span></h1>
      <span><a href="<?php echo base_url();?>" class="btn btn-info pull-right" style="color: white"><< Back</a></span>      
    </header>

    <img src="<?php echo base_url();?>assets/img/3.jpg" alt="Banner" />



      <div class="col-md-6 col-md-offset-3">
        <div style="padding-left: 50px;padding-top: 20px;padding-right: 50px;">
          <div class="div-m">

            
          <h4 class="text-center" style="color: #2363c3"><strong>Please Login Here</strong></h4><br>



         <form method="post" role="form" autocomplete="off" name="login" action="<?php echo base_url('admin/login');?>">

 

            <?php if($this->session->flashdata('flash_message') == 'error')
              {
                echo '<div class="row">';
                  echo '<div class="col-md-12"> <div class="alert alert-danger"><strong>';
                  echo '</strong>&nbsp; Invalid Username or Password..!<a class="close" data-dismiss="alert">×</a>';
                echo '</div></div></div>';
              }
            ?>

          <div class="form-group form-material floating " data-plugin="formMaterial">
             <label class="floating-label" for="inputEmail">Username</label>
             <input type="text" class="form-control" id="inputEmail" name="email">
           </div>
          <div class="form-group form-material floating" data-plugin="formMaterial">
             <label class="floating-label" for="inputPassword">Password</label>
             <input type="password" class="form-control" id="inputPassword" name="password">
          </div>

                <br>

            <div align="center">
          		<input type="submit" class="btn btn-sm" style="width:45%; background-color:#2363c3;color:white;margin-right: 10px;" value="Login" />
            </div>

            </form>




      </div>
  </div>
</div>
   
</body>
</html>