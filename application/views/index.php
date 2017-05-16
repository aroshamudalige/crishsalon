<html>

    <head>
        <title>SalonCrish</title>
        <meta charset="UTF-8">
       <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" media="screen" type="text/css" />
       <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />


<link rel="stylesheet" href="<?php echo base_url("assets/css/normalize.css"); ?>" />
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo base_url("assets/css/style-portfolio.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/picto-foundry-food.css"); ?>" />
        <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.css"); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo base_url("assets/css/font-awesome.min.css"); ?>" rel="stylesheet">
		<style>
.img-section {
    opacity: 1;
    filter: alpha(opacity=50); /* For IE8 and earlier */
}

.slideshow1{
	margin-left:-50px;
}
.slideshow2{
	margin-left:390px;

}
.slideshow3{
	margin-left:800px;
}
.mymap{
	margin-left:50px;
	margin-top:0px;
	
}
.mapbackground{

    background-color: #333333;

}

</style>
    </head>

    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:120px">
            <div class="container">
                <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        
                        <a class="navbar-brand" href="#">SALON CRISH</a>
			<!--			<a class="navbar-brand" href="#">Quality is out identity</a>  -->
            			
                    </div>
                       

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav main-nav  clear navbar-right">
                            <li><a class="navactive color_animation" href="#top">WELCOME</a></li>
                            <li><a class="color_animation" href="#story">ABOUT</a></li>
                            <li><a class="color_animation" href="#pricing">OUR SERVICES</a></li>
                            <li><a class="color_animation" href="#beer">BOOK ONLINE</a></li>
                            <li><a class="color_animation" href='<?php echo base_url();?>index.php/welcome/storeHome' target="_blank">ORDER ONLINE</a></li>
                            <li><a class="color_animation" href="#join">JOIN US</a></li>
                            <li><a class="color_animation" href="#gallery">IMAGE GALLERY</a></li>
                            <li><a class="color_animation" href="#contact">CONTACT US</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </div><!-- /.container-fluid -->
        </nav>
         
        <div id="top" class="starter_container bg">
            <div class="follow_container">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="top-title"> Quality is Our Identity.</h2>
                </div>
            </div>
        </div>

        <!-- ============ About Us ============= -->

        <section id="story" class="description_content">
		
            <div class="text-content container">
                <div class="col-md-6">
                    <h1>About us</h1>
                <!--    <div class="fa fa-cutlery fa-2x"></div>   -->
                    <p class="desc-text">Ms. Krishanthi is an experienced beautician who has certified by......A diverse and multicultural country, Sri Lanka is home to many religions, ethnic groups, and languages.[12] In addition to the majority Sinhalese, it is home to large groups of Sri Lankan and Indian Tamils, Moors, Burghers, Malays, Kaffirs and the aboriginal Vedda.[13] Sri Lanka has a rich Buddhist heritage, and the first known Buddhist writings of Sri Lanka, the Pāli Canon, dates back to the Fourth Buddhist council in 29 BC.[14][15]

Sri Lanka is a republic and a unitary state governed by a semi-presidential system. The legislative capital, Sri Jayawardenepura Kotte, is a suburb of the commercial capital and largest city</p>
                </div>
                <div class="col-md-6">
                    <div class="img-section">
                       <img src="assets/images/owner.jpg" width="250" height="300">
                    </div>
                </div>
            </div>
			
        </section>


       <!-- ============ Pricing  ============= -->


        <section id ="pricing" class="description_content">
             <div class="pricing background_content">
                <h1>OUR SERVICES</h1>
             </div>
            <div class="text-content container"> 
                <div class="container">
                    <div class="row">
                        <div id="w">
                            <ul id="filter-list" class="clearfix">
                                <li class="filter" data-filter="all">All</li>
                                <li class="filter" data-filter="breakfast">Breakfast</li>
                                <li class="filter" data-filter="special">Special</li>
                                <li class="filter" data-filter="desert">Desert</li>
                                <li class="filter" data-filter="dinner">Dinner</li>
                            </ul><!-- @end #filter-list -->    
                            <ul id="portfolio">
                                <li class="item breakfast"><a class="popup"><img src="assets/images/1.jpg" alt="Food" width="200" height="150"><span><img src="images/pop1.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Hair Cut</h2>
                                </li>  

                                <li class="item dinner special"><a class="popup"><img src="assets/images/2.jpg" alt="Food" width="200" height="150"><span><img src="images/pop2.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Hair Style</h2>
                                </li>
                                <li class="item dinner breakfast"><a class="popup"><img src="assets/images/3.jpg" alt="Food" width="200" height="150" ><span><img src="images/pop3.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Massage</h2>
                                </li>
                                <li class="item special"><a class="popup"><img src="assets/images/4.jpg" alt="Food" width="200" height="150" ><span><img src="images/pop4.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Facials</h2>
                                </li>
                                <li class="item dinner"><a class="popup"><img src="assets/images/5.jpg" alt="Food" width="200" height="150"><span><img src="images/pop5.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Clean up</h2>
                                </li>
                                <li class="item special"><a class="popup"><img src="assets/images/6.jpg" alt="Food" width="200" height="150" ><span><img src="images/pop6.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Waxing</h2>
                                </li>
                               
                                <li class="item desert breakfast"><a class="popup"><img src="assets/images/7.jpg" alt="Food" width="200" height="150" ><span><img src="images/pop7.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Bleeching</h2>
                                </li>
								<li class="item desert breakfast"><a class="popup"><img src="assets/images/8.jpg" alt="Food" width="200" height="150" ><span><img src="images/pop8.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Dressing</h2>
                                </li>
								
								<li class="item desert breakfast"><a class="popup"><img src="assets/images/9.jpg" alt="Food" width="200" height="150"><span><img src="images/pop9.jpg" width="700" height="300" ></span></a>
                                    <h2 class="white">Coloring</h2>
                                </li>
								
								
                            </ul><!-- @end #portfolio -->
                        </div><!-- @end #w -->
                    </div>
                </div>
            </div>  
        </section>


       


        <section id ="beer" class="description_content">
            <div  class="beer background_content">
                <h1>We Care About Your Time!</h1>
            </div>
            <div class="contact-form">
                        <!-- Form -->
<form id="contact-us" method="post" action="<?php echo base_url();?>index.php/Hellow/insert_to_db" >
         <?php echo validation_errors(); ?>  
         <?php echo form_open('form'); ?>
                            <!-- Left Inputs -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-xs-12">
                                        <div class="row">


<br></br>
	
									
<div class="form-group row">
 <div class="text_field_length">
    <input class="form-control" type="text" placeholder="Service type" name="service">
	
  </div>
</div>

<div class="form-group row">  
  <div class="text_field_length">
    <input class="form-control" type="text" placeholder="First Name"  name="fname">
	
  </div>
</div>


<div class="form-group row">
  <div class="text_field_length">
    <input class="form-control" type="text" placeholder="Last Name"  name="lname">
	
  </div>
</div>


<div class="form-group row">
  <div class="text_field_length">
    <input class="form-control" type="email" placeholder="Email"  name="email">
	
  </div>
</div>


<div class="form-group row">
  <div class="text_field_length">
    <input class="form-control" type="text" placeholder="Phone Number"  name="phone">
  </div>
</div>


<div class="form-group row">
  <div class="text_field_length">
    <input class="form-control" type="date" placeholder="Reservation Date"  name="date1">
	
  </div>
</div>


<div class="form-group row">
  <div class="text_field_length">
    <input class="form-control" type="time" placeholder="Reservation Time" name="time1">
	
  </div>
</div>


<div class="comment_box">
  <div class="text_field_length">    
	<textarea class="form-control" name="comment" rows="3" cols="80" placeholder="Special requirements" name="comment"></textarea>
  </div>
</div>

                                            

<div class="col-xs-6 ">
	<!-- Send Button -->
	<!--<button type="submit" id="submit" name="submit" class="btn">SUBMIT</button> -->
	<input class="btm" type="submit" name="submit" value="submit">
</div>
                                            
                                        </div>
                                    </div>
</form>
									<br></br>
									<br></br>
                                    
                                    <div class="col-lg-4 col-md-6 col-xs-12">
                                        <!-- Message -->
                                        <div class="right-text">
                                            <h2>Open Hours</h2><hr>
                                            <p>Monday to Friday: 7:30 AM - 06:00 PM</p>
                                            <p>Saturday & Sunday: 7:30 AM - 3:00 PM</p>
                                      
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Clear -->
                            <div class="clear"></div>
                        </form>
                    </div>
        </section>


       <!-- ============ Join Us  ============= -->


        <section id="join" class="description_content2">
            <div class="uk-article-title-wrapper">
                <h1 class="uk-article-title" style="color:#595959">Join Our Team</h1>
            </div>
		</section>





        <!-- ============ gallery  ============= -->
      <section id="gallery" class="description_content2">

      </section>

        <!-- ============ Contact Section  ============= -->
<section id="contact" class="contact-wall" style="height:510px">
		<div class="mapbackground">
            <div class="mymap">	
				<br><br>
				<iframe height="350px" width="700px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.maps.ie/create-google-map/map.php?width=100%&amp;height=300&amp;hl=en&amp;coord=6.9022553,79.8591263&amp;q=+(Royce%20Fernando)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=A&amp;output=embed&#10;"></iframe>
                <div style="margin-left:800px; margin-top:-250px;color: #6B6B6B; font-size: 20px;">
                	Phone: +94 77 4587923<br>
                    E-mail: info@saloncrish.com<br><br>
                    <a href="https://facebook.com/saloncrish"><i class="fa fa-facebook-official" style="font-size:36px; color:white;"></i></a>
                    <a href="https://plus.google.com"><i class="fa fa-google-plus" style="font-size:36px; color:white;"></i></a>
                    <a href="https://twitter.com"><i class="fa fa-twitter" style="font-size:36px; color:white;"></i></a>
                    
                </div>
                <div class="address"><br><br><br><br><br><address>Salon Crish<br>No: 32,<br>Rathdolugama,<br>Sri Lanka.</address></div>
			</div>				
		</div>
        
        </section>

        <!-- ============ Footer Section  ============= -->

        <footer class="sub_footer">
    <div class="container">
        <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Salon Crish 2017, All rights reserved.</p></div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
        </div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Go to our <a href='<?php echo base_url();?>index.php/welcome' target="_blank">Website</a></p></div>
    </div>
</footer>


       
        <script type="text/javascript" src="js/bootstrap.min.js" ></script>
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>     
        <script type="text/javascript" src="js/jquery.mixitup.min.js" ></script>
        <script type="text/javascript" src="js/main.js" ></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.10.2.min.js"); ?>"> </script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

    </body>
</html>