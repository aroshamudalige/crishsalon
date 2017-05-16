<?php 
if(!isset($username)){
    header('Location: '.base_url().'index.php/welcome/storeHome');
    
}
?>

<html>
<head>
    <title>WelcomeStore</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/main.css"); ?>" media="screen" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style2.css"); ?>" media="screen" type="text/css" />
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
                    <a class="navbar-brand" href="#">WELCOME TO OUR STORE</a></div>
                <div style="position:fixed; top:20px; left:25px">
                    <img src="<?php echo base_url("assets/images/shop.jpg"); ?>" width="50"></div>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container-fluid -->
</nav>
<br /><br /><br /><br />
<div class="container" style="background-color:#f2f2f2;  max-width:900px; min-height:498px" >
    
    <div style="z-index: 10000; position:fixed; left:1207px; top:25px;">
        <?php echo form_open('home/logout'); ?><input type="submit" name="logout" value="Logout" class="btn btn-primary"><?php echo form_close();?></div>
        
    <!--<div style="z-index: 10000; position:fixed; left:700px; top:25px;">
        <form method="post" action="" class="form-inline">
            <input type="text" class="form-control" name="storesearch" placeholder="Search Store" size="18"> <input type="submit" class="btn btn-warning" name="search" value="Go">
        </form></div> -->
    <div style="z-index: 10000; position:fixed; left:970px; top:20px; color: white; font-size: large;">
        <?php echo "Welcome"."<br>".$username."!"; ?>
    </div>
    <hr>
    <div align="center">
        <div style="text-align: center;font-size: 20px;font-family: Arial,Helvetica,sans-serif;margin-top: 10px;font-weight: 600;color: rgb(48, 71, 112);">
            Add items to your Cart</div><br/>
            <?php
            
            foreach ($products as $product) {
                
                $name = $product['name'];
                $description = $product['description'];
                $price = $product['price'];
                $itemid = $product['itemID'];
                
            ?>

                <div id='product_div' style="height:450; width: 213">  
                    <div id='image_div' style="height:160;">
                        <img height="150" width="80" src="<?php echo base_url() . $product['picture'] ?>"/>
                    </div>
                    <div id='info_product' style="height:200;">
                        <div id='name'><?php echo $name; ?></div>
                        <div id='desc'>  <?php echo $description; ?></div>
                        <div id='rs'><b>Price</b>:<big style="color:green">
                            Rs. <?php echo $price; ?></big></div>
                        <?php
                        
                      
                        echo form_open('cart/add');
                        echo form_hidden('name', $name);
                        echo form_hidden('price', $price);
                        echo form_hidden('itemid', $itemid);
                        echo form_hidden('username', $username);
                        ?>
                    </div> 
                    <div id='add_button'>
                        <?php
                        $btn = array(
                            'class' => 'fg-button teal',
                            'value' => 'Add to Cart',
                            'name' => 'atc'
                        );
                        echo form_submit($btn);
                        echo form_close();
                        ?>
                    </div>
                </div>
        
            
       
            
            
            <?php } ?>
            
            
            
            
            
            
            
            
            
        </div>
</div>
<br>
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
