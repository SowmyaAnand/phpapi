<!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <h5 class="centered"><?php echo $this->session->userdata('userFirstName'); ?></h5>
          <li class="mt">
            <a class="<?php if($page_name=='dashboard'){ echo 'active'; } ?>" href="<?php echo base_url();?>admin">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          
        
      
      <li class="active">
        <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false"><i class="fa fa-tasks"></i> Manage<i class="pull-right mr fa fa-chevron-right"></i></a>
        <ul class="collapse list-unstyled" id="homeSubmenu1">
          <li>
              <a class="<?php if($page_name=='list_questionnaire'){ echo 'active'; } ?>" href="<?php echo base_url();?>admin/list_questionnaire">
              <span class="ml-5">View Questionnaire</span>
              </a>
          </li>
          <li>
              <a class="<?php if($page_name=='add_questionnaire'){ echo 'active'; } ?>" href="<?php echo base_url();?>admin/add_questionnaire">
              <span class="ml-5">Add Questionnaire</span>
              </a>
          </li>
          <li>
              <a class="<?php if($page_name=='list_questions'){ echo 'active'; } ?>" href="<?php echo base_url();?>admin/list_questions">
              <span class="ml-5">View Questions</span>
              </a>
          </li>
          <li>
              <a class="<?php if($page_name=='add_question'){ echo 'active'; } ?>" href="<?php echo base_url();?>admin/add_question">
              <span class="ml-5">Add Questions</span>
              </a>
          </li>
          <li>
              <a class="<?php if($page_name=='view_polls'){ echo 'active'; } ?>" href="<?php echo base_url();?>admin/view_polls">
              <span class="ml-5">View Polls</span>
              </a>
          </li>
          
             
        </ul>
      </li>


          <li class="sub-menu">
           <a class="<?php if($page_name=='profile'){ echo 'active'; } ?>" href="<?php echo base_url();?>admin/profile">
              <i class="fa fa-cog fa-lg"></i>
              <span>My Account</span>
              </a>
          </li>
          
      
      
    



        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    
    <style>
        .mr{
            margin-right:5px;
        }
        .ml-5{
            margin-left:50px;
        }
    </style>
    <script>
        $(document).ready(function() {
  $("#sidebarCollapse").on("click", function() {
    $("#sidebar").toggleClass("active");
    $(this).toggleClass("active");
    
    $(".fa-chevron-right").toggleClass("fa-chevron-down");
  });
});

    </script>
