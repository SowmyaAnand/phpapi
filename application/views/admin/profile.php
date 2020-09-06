<link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom_validation.js"></script>
<section id="main-content">
    <section class="wrapper" style="background-color: #fff">
        <div class="content-wrapper">
      
            <section class="content-header" align="center">
                <h2>
                    MY PROFILE
                </h2><br>

            </section>

            <?php 
                if(validation_errors())
                {
                ?>
                    <div class="row"><div class="alert alert-danger"><a class="close" data-dismiss="alert">×</a><?php echo validation_errors(); ?></div></div>
                <?php
                }
                ?>
            <div class="col-md-8 col-md-offset-2 content-header">

                 <?php 
                 if($this->session->flashdata('flash_message')){
        
                 if($this->session->flashdata('flash_message') == 'updated')
                 {
                     echo '<div class="row">';
                     echo '<div class="col-md-12"> <div class="alert alert-success"><strong>';
                     echo '</strong>&nbsp;Updated Succesfully <a class="close" data-dismiss="alert">×</a>';
                     echo '</div></div></div>'; 
                 }
                 if($this->session->flashdata('flash_message') == 'not_match')
                 {
                     echo '<div class="row">';
                     echo '<div class="col-md-12"> <div class="alert alert-success"><strong>';
                     echo '</strong>&nbsp;Password is not match <a class="close" data-dismiss="alert">×</a>';
                     echo '</div></div></div>'; 
                 }
                }
               ?> 

                <form class="form-horizontal" name="update_profile" action="<?php echo base_url().'admin/update_profile';?>" method="post" >
                    

                    <br><div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Username</label>

                        <div class="col-sm-9">
                            <input type="text"  name="email" class="form-control" id="email" placeholder="Email" value="<?php echo $admin_data['email'];?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label"> Password</label>

                        <div class="col-sm-9">


                            <input type="text"  name="password" class="form-control" placeholder="Password" value="<?php echo $admin_data['password'];?>">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Confirm Password</label>

                        <div class="col-sm-9">
                            <input type="password"  name="con_password" class="form-control" placeholder="Confirm Password" value="">

                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="form-group">
                        <div class="col-sm-7 " style="text-align:center">

                            <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> &nbsp;Update Profile</button>

                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>

            </div><br>
        </div>
    </section>

</section>








