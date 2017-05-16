<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Salon Crish</title>

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

      
      <section id="main-content">
          <section class="wrapper">
         <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          
                  <div class="panel-body">

     


           

              
                <div class="container">
                <div class="col lg-12">
                <div class="form" align="center">
                     <?php
                                $attributes = array("class" => "form-horizontal", "id" => "updateform", "name" => "updateform");
                                       echo form_open('admin/updateApplicant_controller',$attributes);?>
                    <?php for($i=0;$i<count($detailslist);++$i){?>

                      <div class="form-group">
                        <label class="control-label col-lg-2">ID: </label>
                        
                      <div class="col-lg-7">

                        <input class="form-control" type="text" name="id" value="<?php echo $detailslist[$i]->id; ?>" required>
                      </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-lg-2"> First Name: </label>
                        
                      <div class="col-lg-7">
                            <input  class="form-control"  type="text" name="firstname" value="<?php echo $detailslist[$i]->first_name; ?> ">
                      </div>
                      </div>

                      <div class="form-group">
                           <label class="control-label col-lg-2">Last Name:</label>
                        <div class="col-lg-7">
                         <input  class="form-control" type="text" name="lastname" value="<?php echo $detailslist[$i]->last_name; ?> ">
                        </div>
                      </div>

                      <div class="form-group">
                         <label class="control-label col-lg-2">Email: </label>
                        <div class="col-lg-7">
                          <input  class="form-control"  type="text" name="email" value="<?php echo $detailslist[$i]->email; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                          <label class="control-label col-lg-2">Contact: </label>
                        
                        <div class="col-lg-7">
                          <input  class="form-control"  type="text" name="contact" value="<?php echo $detailslist[$i]->telephone_no; ?>">
                        </div>
                      </div>

                      <div class="form-group">
                        <p>Please type "selected" if applicant got selected and "not selected" if he/she is not selected.</p>
                        <label class="control-label col-lg-2">Selected:</label>
                        <div class="col-lg-7">
                        <input  class="form-control"  type="text" name="selected" value="<?php echo $detailslist[$i]->selected?'selected':'not selected';?>" >
                        </div>
                      </div>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button class="btn btn-primary" type="submit">Save</button>
                              <button class="btn btn-default" type="button">Cancel</button>
                              <input class="btn btn-default" action="action" type="button" value="Back" onclick="history.go(-1);" />

                            </div>
                        </div>
                    </form>
                </div>
              </div>

            <?php

            }

            ?>




</div>
</div>

</section>

</div>
</div>
</section>
</section>


      
     
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url(); ?>assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url(); ?>js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?php echo base_url(); ?>js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url(); ?>js/calendar-custom.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url(); ?>js/jquery.customSelect.min.js" ></script>
	<script src="<?php echo base_url(); ?>assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url(); ?>js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url(); ?>js/sparkline-chart.js"></script>
    <script src="<?php echo base_url(); ?>js/easy-pie-chart.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url(); ?>js/xcharts.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.autosize.min.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.placeholder.min.js"></script>
	<script src="<?php echo base_url(); ?>js/gdp-data.js"></script>	
	<script src="<?php echo base_url(); ?>js/morris.min.js"></script>
	<script src="<?php echo base_url(); ?>js/sparklines.js"></script>	
	<script src="<?php echo base_url(); ?>js/charts.js"></script>
	<script src="<?php echo base_url(); ?>js/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});



  </script>

  </body>
</html>
