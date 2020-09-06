<link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom_validation.js"></script>
<section id="main-content">
    <section class="wrapper" style="background-color: #fff">
        <div class="content-wrapper">
            <section class="content-header" align="center">
                <h2>
                    ADD QUESTIONNAIRE
                </h2><br>

            </section>
            <div class="col-md-8 col-md-offset-2 content-header">

                <?php 
                if(validation_errors())
                {
                ?>
                    <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
                <?php
                }
                ?>

                 <form method="post" enctype="multipart/form-data" name="add_questionnaire" action="<?php echo base_url().'admin/edit_questionnaire';?>">

                  <div class="form-group form-material floating " data-plugin="formMaterial">
                    <label class="floating-label" for="inputTitle">Title</label>
                    <input type="text" class="form-control"  id="questionnaire" name="questionnaire" value="<?php echo $details['questionnaire'];?>">
                  </div>  
                  <div class="form-group form-material floating " data-plugin="formMaterial">
                    <label class="floating-label" for="inputStatus">Status</label>
                    <select class="form-control" name="status">
                      <option value="0" <?php if($details['status']=='0'){echo "Selected";}?>>Inactive</option>
                      <option value="1" <?php if($details['status']=='1'){echo "Selected";}?>>Active</option>
                    </select>
                  </div>                 
                  
                    <input type="hidden" value="<?php echo $qrId;?>"  id="qrId" name="qrId">
                  
                   

                  
                 <div class="form-group">
                    <div class="col-sm-7 " style="text-align:center">

                        <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> &nbsp;Save</button>

                    </div>
                 </div>
                    <!-- /.box-footer -->
                </form>

            </div><br>
        </div>
    </section>

</section>
