<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">


    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url(); ?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url(); ?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link rel="<?php echo base_url(); ?>stylesheet" href="css/fullcalendar.css">
  <link href="<?php echo base_url(); ?>css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>css/xcharts.min.css" rel=" stylesheet"> 
  <link href="<?php echo base_url(); ?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
            <?php $this->load->view('admin/navbar');?>     

      <!--header end-->

      <!--sidebar start-->
            <?php $this->load->view('admin/sideBar');?>  

      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header" align="center"><i class="fa fa-files-o"></i><strong>Insert Applicants</strong></h3>
                    <ol class="breadcrumb">
                        <li><i class="fa fa-home"></i><a href="index.php
                            ">Home</a></li>
                        <li><i class="icon_document_alt"></i>New Applicants</li>
                        <li><i class="fa fa-files-o"></i>Insert Data</li>
                    </ol>
                </div>
            </div>
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                          <div class="panel-body">
                              <div class="form">
                                <?php
                                $attributes = array("class" => "form-horizontal", "id" => "joinform", "name" => "joinform");
                                       echo form_open('admin/Insert_form',$attributes);?>
                                  <!--<form class="form-validate form-horizontal "  method="post" action="adding.php">-->
                                    <div class="form-group ">

                                          <label for="title" class="control-label col-lg-2 col-sm-3">Title <span class="required" >*</span></label>
                                          <div class="row">
                                              <label class="checkbox-inline"><input type="checkbox" name="title" style="width:50px" value="Miss">Miss</label>
                                              <label class="checkbox-inline"><input type="checkbox" name="title"style="width:50px" value="Mrs">Mrs</label>


                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="fullname" class="control-label col-lg-2">First name </label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="firstname" name="firstname" type="text" value="<?php echo set_value('firstname'); ?>" /><span class="text-danger"><?php echo form_error('firstname'); ?></span>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="lastname" class="control-label col-lg-2">Last name</label>
                                          <div class="col-lg-10">
                                              <input class=" form-control" id="lastname" name="lastname" type="text" value="<?php echo set_value('lastname'); ?>"/><span class="text-danger"><?php echo form_error('lastname'); ?></span>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="username" class="control-label col-lg-2">Contact No </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="telephone" name="telephone" type="text" value="<?php echo set_value('telephone'); ?>"/><span class="text-danger"><?php echo form_error('telephone'); ?></span>
                                          </div>
                                      </div>
                                     <div class="form-group ">
                                          <label for="email" class="control-label col-lg-2">E-mail</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="email" name="email" type="email" value="<?php echo set_value('email'); ?>"/><span class="text-danger"><?php echo form_error('email'); ?></span>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="confirm_password" class="control-label col-lg-2">Age </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="age" name="age" type="text" value="<?php echo set_value('age'); ?>" /><span class="text-danger"><?php echo form_error('age'); ?></span>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="agree" class="control-label col-lg-2 col-sm-3">Years of Experience <span class="required">*</span></label>
                                          <div class="col-lg-10 col-sm-9">
                                              <input  type="text" class="form-control" id="year" name="year" value="<?php echo set_value('year'); ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="agree" class="control-label col-lg-2 col-sm-3">Experience in Details</label>
                                          <div class="col-lg-10 col-sm-9">
                                              <textarea  type="text"  class="form-control" id="message" name="message" <?php echo set_value('message'); ?> ></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit" >Save</button>
                                              <button class="btn btn-default" type="button" >Cancel</button>
                                          </div>
                                      </div>
                                      <?php echo form_close(); ?>


                                  </form>
                              </div>
                          </div>
                      </section>
                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="<?php echo base_url(); ?>js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url(); ?>js/scripts.js"></script>    


  </body>
</html>
