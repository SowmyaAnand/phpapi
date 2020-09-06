<link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom_validation.js"></script>
<section id="main-content">
    <section class="wrapper" style="background-color: #fff">
        <div class="content-wrapper">
            <section class="content-header" align="center">
                <h2>
                    ADD QUESTION
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

                 <form method="post" enctype="multipart/form-data" name="add_question" action="">

                  <div class="form-group form-material floating " data-plugin="formMaterial">
                    <label class="floating-label" for="inputStatus">Questionnaire</label>
                    <select class="form-control" name="qrId">
                      <option value="">Select</option>
                      <?php if(!empty($questionnaire)){
                        foreach ($questionnaire as $value) {?>
                      <option value="<?php echo $value['qrId'];?>"><?php echo $value['questionnaire'];?></option>
                    <?php }}?>
                    </select>
                  </div>
                  <div class="form-group form-material floating " data-plugin="formMaterial">
                    <label class="floating-label" for="inputName">Question</label>
                    <input type="text" class="form-control empty"  id="question" name="question">
                  </div>                 
                  

                   <div class="form-group form-material floating " data-plugin="formMaterial">
                    <label class="floating-label" for="type">Type</label>
                      <select name="type" id="qtype" class="form-control" >
                        <option value="0">Text box</option>
                        <option value="1">Multiple choice- select one of the answer only</option>
                        <option value="2">Multiple choice- tick all answers that apply</option>
                      </select>

                  </div>
                  <div class="more hide">
                    <div class="col-sm-11" style="margin-bottom:10px">
                    <input type="text" class="form-control empty" placeholder="option"  id="option" name="option[]">
                  </div>
                  <div class="col-sm-1">
                    <button type="button" class="addButton">+</button>
                  </div>
    
                  
                  </div>

                  
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
<script>
$(document).ready(function(){
   // Append a div container on button click
    $(".addButton").click(function(){
       $(".more").append('<div class="col-sm-11" style="margin-bottom:10px"><input placeholder="option" type="text" class="form-control empty" name="option[]"></div>');
    });
});
$(document).on('change','#qtype',function(){
      var type = $("#qtype").val();
      if(type=="2" || type =='1')
        {         
          $(".more").addClass('show');
          $(".more").removeClass('hide');
        }
        else{
          $(".more").removeClass('show');
          $(".more").addClass('hide');
        }   
});
</script>