<?php
if($this->session->flashdata()){

}
?>
<?php 
if(isset($username)){
    header('Location: '.base_url().'index.php/welcome/storeInside');
    
}
?>
<html>

<head>
    <title>Login Page</title>
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

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <style>
        background-image: '<?php echo base_url();?>assets/images/store.jpg';
        //background-repeat:no-repeat;
        
    </style>

</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:90px">
    <div class="container">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div style="position:fixed; top:20px;">
                    <a class="navbar-brand" href="#">ONLINE STORE</a></div>
                <div style="position:fixed; top:20px; left:25px">
                    <img src="<?php echo base_url("assets/images/login.jpg"); ?>" width="50"></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div class="container" style="background-color:#f2f2f2;  max-width:900px; min-height:577px" >

    <?php echo form_open('userlogin'); ?>
        <div style="z-index: 10000; position:fixed; left:780px; top:30px;">
            <input class="form-control" type="text" name="custmail" placeholder="E-mail"></div>
        <div style="z-index: 10000; position:fixed; left:980px; top:30px;">
            <input class="form-control" type="password" name="ID" placeholder="Password"></div>
        <div style="z-index: 10000; position:fixed; left:1180px; top:30px;">
            <input class="btn btn-warning" type="submit" value="Login" name="proceed">
    </form></div>
<div style="text-align: center;Arial,Helvetica,sans-serif;margin-top: 84px;">
<br>
<div align="center">
    <div align="left"  style="width: 600px; padding: 10px; border: 5px solid gray; margin: 0; position:relative;">
        <?php
                echo form_open('form');
                ?>
                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="username" id="name"  placeholder="Enter your Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email1" id="email"  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Confirm Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email2" id="email"  placeholder="Confirm your Email"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="pass1" id="password"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="pass2" id="confirm"  placeholder="Confirm your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender" class="cols-sm-2 control-label">Gender </label>
                    <input type="radio" name="gender" id="gender"  value="male"/> Male
                    <input type="radio" name="gender" id="gender"  value="female"/> Female *
                </div>

                <div class="form-group">
                    <label for="username" class="cols-sm-2 control-label">Address</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="address" id="username"  placeholder="Enter your Address"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" name="getID" class="btn btn-primary btn-lg btn-block login-button" value="Sign Up">
                </div>

        <?php

        echo validation_errors();
        if(isset($msg)) {
            echo $msg;
            
        }
        ?>
    </div><br></div></div></div>
<footer class="sub_footer">
    <div class="container">
        <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Salon Crish 2017, All rights reserved.</p></div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
        </div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Go to our <a href='<?php echo base_url();?>index.php/welcome' target="_blank">Website</a></p></div>
    </div>
</footer>
</body>

</html>
