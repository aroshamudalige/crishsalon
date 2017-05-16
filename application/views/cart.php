<html>
<head>
    <title>Your Cart</title>
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
</head>

<body style="background-image: url('store.jpg'); background-repeat:no-repeat;">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="height:90px">
    <div class="container">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <div style="position:fixed; top:20px;">
                    <a class="navbar-brand" href="#">YOUR CART</a></div>
                <div style="position:fixed; top:20px; left:25px">
                    <img src="<?php echo base_url("assets/images/cart.jpg"); ?>" width="50"></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
<div class="container" style="background-color:#f2f2f2; max-width:900px; min-height:577px;">
    <div style="z-index: 100000000; position:fixed; top:105px;">
        <div><form method="post" action="<?php ?>">
                Delete Item No: <input type='text' name='record_no' size="1"> <input class="btn btn-danger" type="submit" name="delete" value="X">
            </form></div>
        <div><form method="post" action="<?php ?>">
                Change Quantity: Item No <input type='text' name='record_no_to_mod' size="1"> Quantity <input type='text' name='newQua' size="1"> <input type="submit" name="modify" class="btn btn-primary" value="Go">
            </form></div>

    </div></div>
<div style="position:fixed; top:30; right:50; z-index:1000000; font-family: Arial,Helvetica,sans-serif;color: rgb(255,255,255); font-size: 20px;">
    <?php
    echo "Total: "; ?>
</div>
<footer class="sub_footer">
    <div class="container">
        <div class="col-md-4"><p class="sub-footer-text text-center">&copy; Salon Crish 2016, All rights reserved.</p></div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Back to <a href="#top">TOP</a></p>
        </div>
        <div class="col-md-4"><p class="sub-footer-text text-center">Go to our <a href="https:\\localhost/SALONCRISH/index.html" target="_blank">Website</a></p></div>
    </div>
</footer>
</body>

</html>
