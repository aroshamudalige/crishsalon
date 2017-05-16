<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Applicant Details</title>

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
                    <h3 class="page-header"><i class="fa fa-table"></i><strong>New Applicants' Details</strong></h3>
                    
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
                      <th>id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Telephone No</th>
                      <th>E mail</th>
                      <th>Age</th>
                      <th>Years of <br>Experirence</th>
                      <th>Experience <br>in Details</th>
                      <th>Selected/<br>Not selected</th>
                      <th>Update/<br>Delete</th>

                    </thead>
                    <tbody>
                    
                    <?php for($i=0;$i<count($applicantlist);++$i){?>
                        <tr>
                        <td><?php echo $applicantlist[$i]->id; ?></td>
                        <td><?php echo $applicantlist[$i]->first_name; ?></td>
                        <td><?php echo $applicantlist[$i]->last_name;?></td>
                        <td><?php echo $applicantlist[$i]->telephone_no;?></td>
                        <td><?php echo $applicantlist[$i]->email;?></td>
                        <td><?php echo $applicantlist[$i]->age;?></td>
                        <td><?php echo $applicantlist[$i]->years_experience;?></td>
                        <td><?php echo $applicantlist[$i]->experience;?></td>
                        <td><?php echo $applicantlist[$i]->selected?'selected':'not selected';?></td>



                     
                        <td>
                            <div class="btn-group">
                                  
                                   <a class="btn btn-success" name="update" href="<?php echo base_url()?>index.php/admin/updateApplicant_controller/update_applicants/<?php echo $applicantlist[$i]->id; ?>">

                                    <i class="icon_check_alt2"></i></a>
                                   <a class="btn btn-danger" name="delete" onClick="return doconfirm();" href="<?php echo base_url()?>index.php/admin/delete_controller/delete_applicants/<?php echo $applicantlist[$i]->id; ?>">
                                    <i class="icon_close_alt2"></i></a>
                                  </div>
                                  </td>
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


    <script>
    function doconfirm()
    {
        job=confirm("Are you sure to delete permanently?");
        if(job!=true)
        {
            return false;
        }
    }
    </script>
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
