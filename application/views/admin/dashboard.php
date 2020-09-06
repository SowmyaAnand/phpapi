   <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-md-12 col-sm-12 mb">
            <a href="<?php echo base_url();?>admin/list_questionnaire">
              <div class="col-md-4 col-sm-4 mb">
              <div class="darkblue-panel p-20">
                <div class="darkblue-header">
                  <h3 style="color: white"><b>Total Questionnaires</b></h3>
                </div>
               <h1 class=""><i class='fa fa-list' style='font-size:65px;color: #4ECDC4'></i></h1>

                  <div class="centered" style="padding-top: 10px">
                    <h4><div class="row">
                      <div class="col-md-12 f-white" align="center">

                        <table>
                          <tr>
                            
                        <td><h2><?php print_r($total_questionnaire); ?></h2>
                            </td>
                          </tr>
                         
                        </table>

                      </div>
                    </div></h4>
                  </div>

              </div>
              <!--  /darkblue panel -->
            </div></a>

            <a href="<?php echo base_url();?>admin/list_questions">
              <div class="col-md-4 col-sm-4 mb">
              <div class="darkblue-panel p-20">
                <div class="darkblue-header">
                  <h3 style="color: white"><b>Total Questions</b></h3>
                </div>
               <h1 class=""><i class='fa fa-question-circle-o' style='font-size:65px;color: #4ECDC4'></i></h1>

                  <div class="centered" style="padding-top: 10px">
                    <h4><div class="row">
                      <div class="col-md-12 f-white" align="center">

                        <table>
                          <tr>
                            
                        <td><h2><?php print_r($total_questions); ?></h2>
                            </td>
                          </tr>
                         
                        </table>

                      </div>
                    </div></h4>
                  </div>

              </div>
              <!--  /darkblue panel -->
            </div></a>

            <a href="<?php echo base_url();?>admin/view_polls">
              <div class="col-md-4 col-sm-4 mb">
              <div class="darkblue-panel p-20">
                <div class="darkblue-header">
                  <h3 style="color: white"><b>Total Polls</b></h3>
                </div>
                <h1 class=""><i class='fa fa-check-square-o' style='font-size:65px;color: #4ECDC4'></i></h1>

                  <div class="centered" style="padding-top: 10px">
                    <h4><div class="row">
                      <div class="col-md-12 f-white" align="center" >

                        <table>
                          <tr>
                            
                        <td><h2><?php print_r($total_polls); ?></h2>
                            </td>
                          </tr>
                         
                        </table>

                      </div>
                    </div></h4>
                  </div>

              </div>
              <!--  /darkblue panel -->
            </div></a>

            
          </div>
        </div>
        <!-- /row -->
      </section>
    </section>
  </section>