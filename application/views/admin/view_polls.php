
<?php

    $CI =& get_instance();

    $CI->load->model('admin_model');

?>

<section id="main-content">
    <section class="wrapper" style="background-color: #fff">
        <div class="content-wrapper">
            <section class="content-header" align="center">
                <h2>
                    ALL POLLS
                </h2><br>

            </section>
                
                <div class="col-md-12 text-center" >
                    <div class="col-md-6 col-md-offset-3">
                     
            <form class="form-horizontal" action="<?php echo base_url('admin/view_polls');?>" method="post">


            <table>

              <tbody>
                <tr>
                  
                   <td>
                     <div class="col-sm-12">
                      <select name="qrId" class="form-control">
                        <option value="">Select Questionnaire</option> 
                        <?php     
                            if(!empty($questionnaire)){
                            foreach($questionnaire as $value){ ?>
                            <option value="<?php echo $value['qrId'];?>" <?php if(!empty($qrId)){if($qrId==$value['qrId']){echo "selected";}}?>><?php echo $value['questionnaire'];?></option>  
                        <?php }}?>              
                      </select>
                    
                     </div>
                 </td>
                   
                    <td>

                  <div class="col-sm-12">

                  <input type="submit" required class="btn btn-primary" value="Search">&nbsp;&nbsp;
                  <a href="<?php echo base_url().'admin/view_polls';?>" class="btn btn-info" >Refresh</a>
                  </div>
                    </td>

                </tr>
              </tbody>
            </table>
            </form>
                   </div>
                </div>
             
            <div class="row mb">
                <!-- page start-->
                <div class="content-panel">
                    <div class="adv-table table-responsive" style="padding: 25px;">
                        <table class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Questionnaire</th>
                                    <th>Questions</th>
                                    <th>Options</th>
                                    <th>Created At</th>                                    
                                </tr>
                            </thead>
                            <tbody class="">
                                <?php $cnt=0;
        
                                if(!empty($polls) &&($polls!='')){
                                foreach($polls as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo ++$cnt;?>
                                    </td>
                                    
                                     <td>
                                        <?php echo $row['questionnaire'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['question'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['options'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['createdAt'];?>
                                    </td>
                                    
                                </tr>
                                <?php }}else{ ?>
                                    <td colspan="5">
                                        <p><center><?php echo 'No data found!';?></center></p>
                                    </td>
                                <?php } ?>
                              </tbody>
                        </table>
                    </div>
                    
                </div>
                <!-- page end-->
            </div>
            <!-- /row -->
        </div>
    </section>
</section>
