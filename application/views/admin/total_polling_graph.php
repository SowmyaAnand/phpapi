<link href="<?php echo base_url();?>assets/css/css.css" rel="stylesheet">

<link href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.css" rel="stylesheet">

<script src="<?php echo base_url();?>assets/js/moment.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js"></script>


<section id="main-content">
<section class="wrapper" style="background-color: #fff" >
<div class="content-wrapper">
<section class="content-header" align="center">
      <h2>
       TOTAL CREDIT GRAPH     
      </h2><br>
    
    </section>  
    <?php
    if(validation_errors())
    {
    ?>
        <div class="alert alert-danger"><?php echo validation_errors(); ?></div>
    <?php
    }

    ?>
        <div class="col-md-12  content-header">
      <form class="form-horizontal"  action="<?php echo base_url('admin/total_polling_graph_admin');?>" method="post" enctype="multipart/form-data">
            
           
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

              <!-- /.box-footer -->
            </form>
            </div><br>

             <div class="row mt">
            <div class="col-lg-12">
              <div class="content-panel">
                <div class="panel-body">
                  <?php echo pr($total_credit);?>
                  <div id="hero-area" class="graph"></div>
                </div>
              </div>
            </div>
           
          </div>
          </div>
        </section>
    
</section>

<script>
  
  $('#fcreditdatetimepicker').datetimepicker({
    format:'YYYY-MM-DD'
});

$('#tcreditdatetimepicker').datetimepicker({
    format:'YYYY-MM-DD'
});
</script>

<script class="include" type="text/javascript" src="<?php echo base_url(); ?>assets/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/morris/morris.min.js"></script>
<!--common script for all pages-->
<script src="<?php echo base_url(); ?>assets/lib/common-scripts.js"></script>
<!--script for this page-->

<script type="text/javascript">

<?php 
  $ykeys = "[";
  $i=0;
  foreach (json_decode($total_credit)[0] as $key=>$value) {
    
  //  if($i!=2)
   // {
      if($key!="createdAt")
      {
        if($i>0)
        {
           $ykeys .=",";
        }
        $ykeys .="'".$key."'";
      }
    //}

    $i++;

  }
   $ykeys .= "]";

  $vals = str_replace("[", "", $ykeys);
  $vals = str_replace("]", "", $vals);
  $cnt  = count(@explode(",", $vals)); 
  $color = "[";
   for($j=0;$j<$cnt;$j++) {

    //echo "J:".$j.",I:".$i;
       if($j>0)
       {
           $color .=",";
       }
       $color .="'".rand_color()."'";
   }

 $color .= "]";
   function rand_color() {
    return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
  }

?>

Morris.Line({
  element: 'hero-area',
  data: <?php echo $total_credit;?>,
  xkey: 'createdAt',
  ykeys: <?php echo $ykeys;?>,
  labels: <?php echo $ykeys;?>,
  xLabels: 'day',
  xLabelAngle: 45,
  fillOpacity: 0.6,
  hideHover: 'auto',
  behaveLikeLine: true,
  resize: true,
  pointFillColors:['#ffffff'],
  pointStrokeColors: ['black'],
  lineColors:<?php echo $color; ?>,
  trendLineColors: <?php echo $color; ?>,
  xLabelFormat: function (d) {
    var weekdays = new Array(12);
    weekdays[0] = "JAN";
    weekdays[1] = "FEB";
    weekdays[2] = "MAR";
    weekdays[3] = "APR";
    weekdays[4] = "MAY";
    weekdays[5] = "JUN";
    weekdays[6] = "JUL";
    weekdays[7] = "AUG";
    weekdays[8] = "SEP";
    weekdays[9] = "OCT";
    weekdays[10] = "NOV";
    weekdays[11] = "DEC";

    return d.getDate() + '-' + weekdays[d.getMonth()] + '-' + (d.getFullYear());
  },
  resize: true
});
</script>