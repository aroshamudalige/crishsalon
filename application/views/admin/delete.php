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
      echo "<script>
            alert('Are you sure you want to delete?');
            window.location.href='form_component.php';
            </script>";


         if(isset($_POST['delete'])) {
            
            $conn = mysqli_connect("localhost", "root", "" ,"saloncrish");
            
            if(! $conn ) {
               die('Could not connect: ' . mysqli_error());
            }
				
            $id = $_POST['id'];
		
            
            $sql = "DELETE FROM newjoiners WHERE id = $id" ;
            
            $retval = mysqli_query( $conn,$sql );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysqli_error());
            }
            
            echo "Deleted data successfully\n";
            
            mysqli_close($conn);
         }
      ?>
      

   </div>
</div>
</div>
</div>

</section>

</div>
</div>
</section>
</section>
</section> 
     
  <!-- container section end -->
   </body>
</html>

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


