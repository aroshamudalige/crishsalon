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
    <!-- full calendar css-->
    <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="<?php echo base_url(); ?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url(); ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="<?php echo base_url(); ?>stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="<?php echo base_url(); ?>css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
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
     
      <?php $this->load->view('admin/navbar');?>     
      <!--header end-->

      <!--sidebar start-->
      <?php $this->load->view('admin/sideBar');?>  
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
        <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
          <ol class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="<?php echo base_url(); ?>index.php/welcome/admin">Home</a></li>
            <li><i class="fa fa-laptop"></i>Dashboard</li>                
          </ol>
        </div>
      </div>
              
            <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box blue-bg">
            <i class="fa fa-cloud-download"></i>
            <div class="count">6.674</div>
            <div class="title">Download</div>           
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box brown-bg">
            <i class="fa fa-shopping-cart"></i>
            <div class="count">7.538</div>
            <div class="title">Purchased</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->  
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box dark-bg">
            <i class="fa fa-thumbs-o-up"></i>
            <div class="count">4.362</div>
            <div class="title">Order</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
            <i class="fa fa-cubes"></i>
            <div class="count">1.426</div>
            <div class="title">Stock</div>            
          </div><!--/.info-box-->     
        </div><!--/.col-->
        
      </div><!--/.row-->
    
        
                  

                <!--calender-->
                <div class="row">
            <div class="col-md-6 portlets">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h2><strong>Calendar</strong></h2>
                <div class="panel-actions">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                </div>  
                 
                </div><br><br><br>
                <div class="panel-body">
                  <!-- Widget content -->
                  
                    <!-- Below line produces calendar. I am using FullCalendar plugin. -->
                    <div id="calendar"></div>
                  
                </div>
              </div> 
               
            </div>
            
                 <div class="col-md-6 portlets">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="pull-left">Quick Post</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <div class="padd">
                    
                      <div class="form quick-post">
                                      <!-- Edit profile form (not working)-->
                                      <form class="form-horizontal">
                                          <!-- Title -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="title">Title</label>
                                            <div class="col-lg-10"> 
                                              <input type="text" class="form-control" id="title">
                                            </div>
                                          </div>   
                                          <!-- Content -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="content">Content</label>
                                            <div class="col-lg-10">
                                              <textarea class="form-control" id="content"></textarea>
                                            </div>
                                          </div>                           
                                          <!-- Cateogry -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2">Category</label>
                                            <div class="col-lg-10">                               
                                                <select class="form-control">
                                                  <option value="">- Choose Cateogry -</option>
                                                  <option value="1">General</option>
                                                  <option value="2">News</option>
                                                  <option value="3">Media</option>
                                                  <option value="4">Funny</option>
                                                </select>  
                                            </div>
                                          </div>              
                                          <!-- Tags -->
                                          <div class="form-group">
                                            <label class="control-label col-lg-2" for="tags">Tags</label>
                                            <div class="col-lg-10">
                                              <input type="text" class="form-control" id="tags">
                                            </div>
                                          </div>
                                          
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                                             <div class="col-lg-offset-2 col-lg-9">
                                                <button type="submit" class="btn btn-primary">Publish</button>
                                                <button type="submit" class="btn btn-danger">Save Draft</button>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                             </div>
                                          </div>
                                      </form>
                                    </div>
                  

                  </div>
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div>
              </div>
              
            </div>
                        
          </div>
          <!--end of calender-->
              
            
        

             
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
  <script src="<?php echo base_url(); ?>js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-1.8.3.min.js"></script>
    <script type="<?php echo base_url(); ?>text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
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
