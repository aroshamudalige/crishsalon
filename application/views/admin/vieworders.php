<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Order Details</title>

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

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
            <br><br>
          <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header"><i class="fa fa-table"></i><strong>New Order Details</strong></h3>
                    
                </div>
            </div>
              <!-- page start-->
             
              
                 
                  
              <div class="row">
               
                  <div class="col-lg-12">
                      <section class="panel">
                          
                          <!--<table class="table table-striped table-advance table-hover">-->


               
                    <!-- output data of each row-->
                     <table class="table table-striped table-advance table-hover">
                      <thead>
                      <th>Order ID</th>
                      <th>Customer ID</th>
                      <th>Item Name</th>
                      <th>Order Date</th>
                     
                    </thead>
                    <tbody>
                    
                    <?php for($i=0;$i<count($orders);++$i){?>
                        <tr>
                        <td><?php echo $orders[$i]->orderID; ?></td>
                        <td><?php echo $orders[$i]->customer; ?></td>
                        <td><?php echo $orders[$i]->name; ?></td>
                        <td><?php echo $orders[$i]->OrderDate; ?></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                                   
                     </table>
               
                        
                        <!--</table>-->
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
    <!-- nicescroll -->
    <script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url(); ?>js/scripts.js"></script>


  </body>
</html>
