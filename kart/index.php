<?php

session_start();

include("includes/db.php");

include("functions/functions.php");

?>
<!DOCTYPE html>
<html>

<head>

<title> Sastokart - Place where sasto shopping begins </title>

<link href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100" rel="stylesheet" >

<link href="styles/bootstrap.min.css" rel="stylesheet">

<link href="styles/style.css" rel="stylesheet">

<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

<div id="top"><!-- top Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-6 offer"><!-- col-md-6 offer Starts -->

<a href="#" class="btn btn-success btn-sm" >
<?php

if(!isset($_SESSION['customer_email'])){

echo "Welcome :Guest";


}else{

echo "Welcome : " . $_SESSION['customer_email'] . "";

}


?>
</a>

<!-- <a href="#">
Shopping Cart Total Price: <?php total_price(); ?>, Total Items <?php items(); ?>
</a> -->

</div><!-- col-md-6 offer Ends -->

<div class="col-md-6"><!-- col-md-6 Starts -->
<ul class="menu"><!-- menu Starts -->

<li>
<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php' >My Account</a>";

}
else{

echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

}


?>
</li>

<li>

<a href="customer_register.php">
Register
</a>
</li>

<li>
    <?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php'> Login </a>";

}else {

echo "<a href='logout.php'> Logout </a>";

}

?>

</li>

<li>

<a href="cart.php">
Go to Cart
</a>
</li>
<li>
<a href="vendor-registration.php">
Sell with us
</a>
</li>

</ul><!-- menu Ends -->

</div><!-- col-md-6 Ends -->

</div><!-- container Ends -->
</div><!-- top Ends -->

<div class="navbar navbar-default" id="navbar"><!-- navbar navbar-default Starts -->
<div class="container" ><!-- container Starts -->

<div class="navbar-header"><!-- navbar-header Starts -->

<a class="navbar-brand home" href="index.php" ><!--- navbar navbar-brand home Starts -->

<img src="images/logo.png" alt="" class="hidden-xs" >
<img src="images/logo-small.png" alt="" class="visible-xs" >

</a><!--- navbar navbar-brand home Ends -->

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation"  >

<span class="sr-only" >Toggle Navigation </span>

<i class="fa fa-align-justify"></i>

</button>

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search" >

<span class="sr-only" >Toggle Search</span>

<i class="fa fa-search" ></i>

</button>


</div><!-- navbar-header Ends -->

<div class="navbar-collapse collapse" id="navigation" ><!-- navbar-collapse collapse Starts -->

<div class="padding-nav" ><!-- padding-nav Starts -->

<ul class="nav navbar-nav navbar-left"><!-- nav navbar-nav navbar-left Starts -->

<li class="active">
<a href="index.php"> Home </a>
</li>

<li>
<a href="shop.php"> Shop </a>
</li>

<!-- <li>
<?php

if(!isset($_SESSION['customer_email'])){

echo "<a href='checkout.php' >My Account</a>";

}
else{

echo "<a href='customer/my_account.php?my_orders'>My Account</a>";

}


?>
</li>

<li>
<a href="cart.php"> Shopping Cart </a>
</li>

<li>
<a href="about.php"> About Us </a>
</li>

<li>

<a href="services.php"> Services </a>

</li>

<li>
<a href="contact.php"> Contact Us </a>
</li> -->

</ul><!-- nav navbar-nav navbar-left Ends -->

</div><!-- padding-nav Ends -->

<a class="btn btn-primary navbar-btn right" href="cart.php"><!-- btn btn-primary navbar-btn right Starts -->

<i class="fa fa-shopping-cart"></i>

<span> <?php items(); ?> items in cart </span>

</a><!-- btn btn-primary navbar-btn right Ends -->

<div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Starts -->

<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>

</div><!-- navbar-collapse collapse right Ends -->

<div class="collapse clearfix" id="search"><!-- collapse clearfix Starts -->

<form class="navbar-form" method="get" action="results.php"><!-- navbar-form Starts -->

<div class="input-group"><!-- input-group Starts -->

<input class="form-control" type="text" placeholder="Search" name="user_query" required>

<span class="input-group-btn"><!-- input-group-btn Starts -->

<button type="submit" value="Search" name="search" class="btn btn-primary">

<i class="fa fa-search"></i>

</button>

</span><!-- input-group-btn Ends -->

</div><!-- input-group Ends -->

</form><!-- navbar-form Ends -->

</div><!-- collapse clearfix Ends -->

</div><!-- navbar-collapse collapse Ends -->

</div><!-- container Ends -->
</div><!-- navbar navbar-default Ends -->

<div class="container" id="slider"><!-- container Starts -->

<div class="col-md-12">
                <h1 class="text-highlight">Save upto Rs1500 a week on what you do every day !</h1></div>
        </div>
        <div class="row">
            <div class="col-md-7 left_pane">
                <div class="row">
                    <div class="col-md-6 img-product"><img src="images/spaghetti.jpg"></div>
                    <div class="col-md-6">
                        <h2>Spaghetti Special</h2>
                        <p>Spaghetti is a long, thin, solid, cylindrical pasta. Spaghettoni is a thicker form of spaghetti, while capellini is a very thin spaghetti. It is a staple food of traditional Italian cuisine.Spaghetti is a long, thin, solid, cylindrical pasta. Spaghettoni is a thicker form of spaghetti, while capellini is a very thin spaghetti. It is a staple food of traditional Italian cuisine.Spaghetti is a long, thin, solid, cylindrical pasta. Spaghettoni is a thicker form of spaghetti, while capellini is a very thin spaghetti.</p>
                        <p>Total Bought - 50</p><span class="price-before">Rs 59.96 </span><span class="price-main">Rs 50.00 </span><span class="label label-default label-discount">62 % off</span>
                        <button class="btn btn-default btn-deal" type="button">View Deal</button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 right_pane">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-left  l1">Top Selling Deals<a href="#" class="link-product">See More</a></h3></div>
                </div>
                <div class="row right_pane_co1ntent">
                    <div class="col-sm-5"><img src="images/cake.jpg" class="img-product"></div>
                    <div class="col-sm-5">
                        <h3 class="text-left">Book Safes with Key</h3>
                        <p class="text-left">Total Bought-100</p><span class="price-before">Rs 59.96 </span><span class="price-main1">Rs 50.00 </span><span class="label label-default label-discount1">62 % off</span></div>
                </div>
                <div class="row right_pane_co2ntent">
                    <div class="col-sm-5"><img src="images/pizza.png" class="img-product"></div>
                    <div class="col-sm-5">
                        <h3 class="text-left">Book Safes with Key</h3>
                        <p class="text-left">Total Bought-100</p><span class="price-before">Rs 59.96 </span><span class="price-main1">Rs 50.00 </span><span class="label label-default label-discount1">62 % off</span></div>
                </div>
            </div>

</div><!-- container Ends -->
<div id="categories_icon"><!--categories menu with icon start-->
<div class="row">
        <div class="col-md-12" id="categories_title">
            <h3 class="text-center">Browse Popular Categories</h3></div>
    </div>
    <div class="row">
        <div class="col-sm-2 product-cat"><img class="img-responsive cat-img" src="images/food (1).png">
            <h4 class="text-center">Restaurants </h4></div>
        <div class="col-sm-2"><img class="img-responsive cat-img" src="images/hiker.png">
            <h4 class="text-center">Things to Do</h4></div>
        <div class="col-sm-2"><img class="img-responsive cat-img" src="images/curl.png">
            <h4 class="text-center">Beauty &amp; Spa</h4></div>
        <div class="col-sm-2"><img class="img-responsive cat-img" src="images/laptop.png">
            <h4 class="text-center">Electronics </h4></div>
        <div class="col-sm-2"><img class="img-responsive cat-img" src="images/blackboard.png">
            <h4 class="text-center">Classes </h4></div>
    </div>
</div><!--categories menu with icon ends-->


<div id="hot"><!-- hot Starts -->

<div class="box"><!-- box Starts -->

<div class="container"><!-- container Starts -->

<div class="col-md-12"><!-- col-md-12 Starts -->

<h2>Latest this week</h2>

</div><!-- col-md-12 Ends -->

</div><!-- container Ends -->

</div><!-- box Ends -->

</div><!-- hot Ends -->


<div id="content" class="container"><!-- container Starts -->

<div class="row"><!-- row Starts -->

<?php

getPro();

?>

</div><!-- row Ends -->

</div><!-- container Ends -->
<div id="advantages"><!-- advantages Starts -->
<div class="container"><!-- container Starts -->

<div class="same-height-row"><!-- same-height-row Starts -->

<?php

$get_boxes = "select * from boxes_section";

$run_boxes = mysqli_query($con,$get_boxes);

while($run_boxes_section=mysqli_fetch_array($run_boxes)){

$box_id = $run_boxes_section['box_id'];

$box_title = $run_boxes_section['box_title'];

$box_desc = $run_boxes_section['box_desc'];


?>

<div class="col-sm-4"><!-- col-sm-4 Starts -->

<div class="box same-height"><!-- box same-height Starts -->

<div class="icon">

<i class="fa fa-heart" ></i>

</div>

<h3><a href="#"> <?php echo $box_title; ?> </a></h3>

<p>
<?php echo $box_desc; ?>
</p>


</div><!-- box same-height Ends -->

</div><!-- col-sm-4 Ends -->

<?php } ?>

</div><!-- same-height-row Ends -->

</div><!-- container Ends -->
</div><!-- advantages Ends -->


<?php

include("includes/footer.php");

?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

</body>
</html>