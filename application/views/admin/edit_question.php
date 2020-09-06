<link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>assets/js/custom_validation.js"></script>
<section id="main-content">
    <section class="wrapper" style="background-color: #fff">
        <div class="content-wrapper">
            <section class="content-header" align="center">
                <h2>
                    EDIT QUESTION 
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

                 <form method="post" enctype="multipart/form-data" name="edit_question" action="<?php echo base_url().'admin/edit_question'?>">

                  <input type="hidden" name="qId" value="<?php echo $qId;?>">

                  <div class="form-group form-material floating " data-plugin="formMaterial">
                    <label class="floating-label" for="inputStatus">Questionnaire</label>
                    <select class="form-control" name="qrId">
                      <?php if(!empty($questionnaire)){
                        foreach ($questionnaire as $value) {?>
                      <option value="<?php echo $value['qrId'];?>" <?php if($value['qrId']==$data['qrId']){echo 'selected';}?>><?php echo $value['questionnaire'];?></option>
                    <?php }}?>
                    </select>
                  </div>

                  <div class="form-group form-material floating " data-plugin="formMaterial">
                    <label class="floating-label" for="inputName">Question</label>
                    <input type="text" class="form-control empty"  id="question" name="question" value="<?php echo $data['question'];?>">
                  </div>                 
                  

                   <div class="form-group form-material floating " data-plugin="formMaterial">
                    <label class="floating-label" for="type">Type</label>
                      <select name="type" id="qtype" class="form-control" >
                        <option value="0" <?php if($data['type'] == '0') echo 'selected="selected"';?>>Text box</option>
                        <option value="1" <?php if($data['type'] == '1') echo 'selected="selected"';?>>Multiple choice- select one of the answer only</option>
                        <option value="2" <?php if($data['type'] == '2') echo 'selected="selected"';?>>Multiple choice- tick all answers that apply</option>
                      </select>

                  </div>
                  <?php if((($data['type'] == '1')||($data['type'] == '2'))&& !empty($options)){?>
                    <?php $cnts=0;      
                          foreach($options as $row) {  ?>
                    <div class="col-md-12" id="div<?php echo $row['id'];?>">
                      <div class="col-sm-5" style="margin-bottom:10px"><?php echo ++$cnts;?>.&nbsp;&nbsp;<?php echo $row['options'];?></div>
                      <div class="col-sm-1">
                          <i class="fa fa-trash fa-lg optClass" style="cursor: pointer;" id="<?php echo $row['id'];?>"></i>
                      </div> 
                    </div>
                  <?php }}?>


                  <div class="more hide">
                    <div class="col-sm-11" style="margin-bottom:15px">
                    <input type="text" class="form-control empty" placeholder="option"  id="option" name="option[]">
                  </div>
                  <div class="col-sm-1">
                    <button type="button" class="addButton">+</button>
                  </div>
    
                  
                  </div>


                  
                  <div class="form-group">
                    <div class="col-sm-7 " style="text-align:center">
                        <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> &nbsp;Save</button>
                        <a href="<?php echo base_url('admin/list_questions');?>" class="btn btn-danger pull-right" style="margin-right: 20px"><i class="fa fa-close"></i> &nbsp;Cancel</a>   
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

      var type1 = '<?php echo $data['type'];?>';
      console.log(type1);console.log('type1');
      if(type1 == '1' || type1 == '2')
        {         
          $(".more").addClass('show');
          $(".more").removeClass('hide');
        }
        else{
          $(".more").removeClass('show');
          $(".more").addClass('hide');
        }   
});
$(document).on('change','#qtype',function(){
      var type = $("#qtype").val();
      if(type=="2" || type =='1' )
        {         
          $(".more").addClass('show');
          $(".more").removeClass('hide');
        }
        else{
          $(".more").removeClass('show');
          $(".more").addClass('hide');
        }   
});
$(document).ready(function(){


$('.optClass').on('click',function(){

      var id = $(this).attr("id");
      
     $.ajax({
                type:"POST",
                url:"<?php echo base_url()."admin/delete_opton_ajax/";?>",
                data:'id='+id,
                cache:false,
                success:function (data){
                  console.log(data);
                   if(data== '1')
                   {
                     $("#div"+id).remove();
                   }

                  else
                   {
                     alert('Something went wrong!');
                     
                   }
                }
            });


    });

});

</script>