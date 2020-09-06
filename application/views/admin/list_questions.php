
<?php

    $CI =& get_instance();

    $CI->load->model('admin_model');

?>

<section id="main-content">
    <section class="wrapper" style="background-color: #fff">
        <div class="content-wrapper">
            <section class="content-header" align="center">
                <h2>
                    QUESTIONS LIST
                </h2><br>

            </section>
                
                <div class="col-md-12" >
                     <?php 
  if($this->session->flashdata('flash_message')){
        
  
    if($this->session->flashdata('flash_message') == 'success')
        {
          echo '<div class="row">';
            echo '<div class="col-md-12"> <div class="alert alert-success"><strong>';
            echo '</strong>&nbsp; Added Succesfully!<a class="close" data-dismiss="alert">×</a>';
          echo '</div></div></div>';       
        }
        elseif($this->session->flashdata('flash_message') == 'delete')
        {
          echo '<div class="row">';
            echo '<div class="col-md-12"> <div class="alert alert-success"><strong>';
            echo '</strong>&nbsp; Deleted Succesfully!<a class="close" data-dismiss="alert">×</a>';
          echo '</div></div></div>';       
        }
        elseif($this->session->flashdata('flash_message') == 'update')
        {
          echo '<div class="row">';
            echo '<div class="col-md-12"> <div class="alert alert-success"><strong>';
            echo '</strong>&nbsp; Updated Succesfully!<a class="close" data-dismiss="alert">×</a>';
          echo '</div></div></div>';       
        }
        elseif($this->session->flashdata('flash_message') == 'error')
        {
          echo '<div class="row">';
            echo '<div class="col-md-12"> <div class="alert alert-danger"><strong>';
            echo '</strong>&nbsp;Something went Wrong!<a class="close" data-dismiss="alert">×</a>';
          echo '</div></div></div>'; 
        }
         }
         ?>
                    <div>
                        <a class="btn btn-success" href="add_question"><i class="fa fa-plus "></i>&nbsp;Add Questions</a>
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
                                    <th>Action</th> 

                                </tr>
                            </thead>
                            <tbody class="">
                                <?php $cnt=0;
		

                                foreach($questions as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo ++$cnt;?>
                                    </td>
                                    
                                     <td>
                                        <?php $qr=$this->db->get_where("questionnaire",array('qrId' =>$row['qrId']))->row_array();
                                        echo $qr['questionnaire'];?>
                                    </td>
                                    <td>
                                        <?php echo $row['question'];?>
                                    </td>
                                    <td>
                                        <?php if($row['type']=='1' || $row['type']=='2'){
                                         $option = $this->db->get("options")->result_array();?>
                                        
                                        <?php $cnts=0;      
                                        foreach($option as $key=>$rows) {
                                            if($option[$key]['qId'] == $row['qId'])
                                            { echo ++$cnts.'. '.$option[$key]['options'].'<br>';}
                                            
                                            } }?>
                                    </td>
                                    
                                    <td>
                                        <a href="<?php echo base_url();?>admin/edit_question/<?php echo $row['qId'];?>"><i class="fa fa-edit fa-lg"></i>&nbsp;&nbsp;Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="<?php echo base_url();?>admin/delete_question/<?php echo $row['qId'];?>"><i class="fa fa-trash fa-lg"></i>&nbsp;&nbsp;Delete</a>

                                    </td> 
                                </tr>
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
