<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anamel</title>
        <!-- link libraries -->
        <link rel="stylesheet" href="styles/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Anamel/styles/style.css">
    </head>
    <body>
        <div id="top"> <!--top begin-->
            <div class="container"> <!--container begin-->

                <div class="col-md-6 offer"> <!--col-md-6 offer begin-->
                    <a href="#" class="btn-success btn-sm">welcome</a>
                    <a href="checkout.php">0 items In Your Card | Total Price: $0</a>
                </div> <!--col-md-6 offer finish-->

                <div class="col-md-6"> <!--col-md-6 begin-->
                    <ul class="menu"> <!--menu begin-->
                        <li>
                            <a href="customer_register.php">Register</a>
                        </li>
                        <li>
                            <a href="customer/my_account.php">My Account</a>
                        </li>
                        <li>
                            <a href="Cart.php">Go to Cart</a>
                        </li>
                        <li>
                            <a href="checkout.php">Login</a>
                        </li>
                    </ul> <!--menu finish-->
                </div> <!--col-md-6 finish-->

            </div> <!--tcontainer finish-->
        </div> <!--top finish-->

        <!-- create navbar -->
        <div id="navbar" class="navbar navbar-default"> <!-- navbar navbar-default start -->
            <div class="container"> <!-- container begin-->
                <div class="navbar-header"> <!-- navbar-header for website title begin-->
                    <a href="index.php" class="navbar-brand home">
                        <img src="images/anamel%20logo.png" alt="Anamel Logo" class="hidden-xs" height=60px width="75px">
                        <img src="images/anamel%20logoedit.png" alt="Anamel Logo" class="visible-xs" height=60px width="75px" style="padding-bottom:15px">
                    </a>

                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle Search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div> <!-- navbar-header for website title end-->

                <div class="navbar-collapse collapse" id="navigation"> <!-- navbar-collapse collapse start-->
                    <div class="padding-nav"> <!-- padding-nav start -->
                        <ul class="nav navbar-nav left"> <!-- nav navbar-nav left start -->
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="Contact.php">About</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="customer/my_account.php">My Account</a></li>
                            <li><a href="Cart.php">Shopping Cart</a></li>
                            <li><a href="landpage.php">Land Page</a></li>

                        </ul> <!-- nav navbar-nav left end -->

                    </div> <!-- padding-nav end -->

                    <a href="cart.php" class="btn navbar-btn btn-primary right"> <!-- btn navbar-btn btn-primary Start -->
                        <i class="fa fa-shopping-cart"></i>
                        <span>0 items in your cart</span>
                    </a> <!-- btn navbar-btn btn-primary end -->


                    <div class="navbar-collapse collapse right"> <!-- navbar-collapse collapse start -->
                        <button class="btn btn-primary navbar-btn" data-toggle="collapse" data-target="#search"> <!-- btn btn-primary navbar-btn right start -->
                            <span class="sr-only">Toggle Search</span>
                            <i class="fa fa-search"></i>
                        </button> <!-- btn btn-primary navbar-btn end -->
                    </div> <!-- navbar-collapse collapse right end -->

                    <div class="collapse clearfix" id="search"> <!-- clearfix start -->
                        <form method="get" action="results.php" class="navbar-form"> <!-- navbar-form start -->
                            <div class="input-group"> <!-- input-group start -->
                                <input type="text" class="form-control" placeholder="search" name="user_query" required>
                                <span class="input-group-btn"> <!-- input-group-btn start -->
                                    <button type="submit" name="search" value="Search" class="btn btn-primary" > <!-- btn-primary start -->
                                        <i class="fa fa-search"></i>
                                    </button><!-- btn-primary end -->
                                </span> <!-- input-group-btn end -->
                            </div> <!-- input-group end -->
                        </form> <!-- navbar-form end -->
                    </div> <!-- clearfix end -->
                </div> <!-- navbar-collapse collapse end -->
            </div> <!-- container end-->
        </div> <!-- navbar navbar-default finish --> 
        <!-- Menu Bar[Navbar and top] Development End -->

        <!-- Start with Slide Carousell Development --> 
        <div class="container" id="slider"> <!-- Container Start -->
            <div class="col-md-12"> <!-- col-md-12 start -->
                <div id="myCarousel" class="carousel slide" data-ride="Carousel"> <!-- carousel slide Start -->
                    <ol class="carousel-indicators"> <!-- carousel-indicators Start -->
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol> <!-- carousel-indicators Start -->

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="https://via.placeholder.com/1100x490.png?text=JzoorSlider+0" alt="Anamel 0">
                        </div>

                        <div class="item">
                            <img src="https://via.placeholder.com/1100x490.png?text=JzoorSlider+1" alt="Jzoor 1">
                        </div>

                        <div class="item">
                            <img src="https://via.placeholder.com/1100x490.png?text=JzoorSlider+2" alt="Jzoor 2">
                        </div>

                        <div class="item">
                            <img src="https://via.placeholder.com/1100x490.png?text=JzoorSlider+3" alt="Jzoor 3">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div> <!-- carousel slide End -->
            </div> <!-- Col-md-12 End -->
        </div> <!-- Container End -->

        <div id="advantages"><!-- #advantages Begin -->
            <div class="container"><!-- container Begin -->
                <div class="same-height-row"><!-- same-height-row Begin -->

                    <div class="col-sm-4"><!-- col-sm-4 Begin -->
                        <div class="box same-height"><!-- box same-height Begin -->
                            <div class="icon"><!-- icon Begin -->
                                <i class="fa fa-heart"></i>
                            </div><!-- icon Finish -->
                            <h3><a href="#">Best Offer</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p>
                        </div><!-- box same-height Finish -->
                    </div><!-- col-sm-4 Finish -->

                    <div class="col-sm-4"><!-- col-sm-4 Begin -->
                        <div class="box same-height"><!-- box same-height Begin -->
                            <div class="icon"><!-- icon Begin -->
                                <i class="fa fa-tag"></i>
                            </div><!-- icon Finish -->
                            <h3><a href="#">Best Prices</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div><!-- box same-height Finish -->
                    </div><!-- col-sm-4 Finish -->

                    <div class="col-sm-4"><!-- col-sm-4 Begin -->
                        <div class="box same-height"><!-- box same-height Begin -->
                            <div class="icon"><!-- icon Begin -->
                                <i class="fa fa-thumbs-up"></i>
                            </div><!-- icon Finish -->
                            <h3><a href="#">100% Original</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div><!-- box same-height Finish -->
                    </div><!-- col-sm-4 Finish -->

                </div><!-- same-height-row Finish -->
            </div><!-- container Finish -->
        </div><!-- #advantages Finish -->

        <div id="hot"> <!-- hot begin -->
            <div class="box"> <!-- box begin -->
                <div class="container"> <!-- container begin -->
                    <div class="col-md-12"> <!-- col-md-12 begin -->
                        <h2>
                            Our Latest Products
                        </h2>
                    </div> <!-- container begin -->
                </div> <!-- container end -->
            </div> <!-- box finish -->
        </div>

        <div href="includes/shop.php" id="content" class="container"> <!-- container begin -->
            <div class="row"> <!-- row begin -->
                <div class="col-sm-4 div-col-sm6 single"> <!-- col-sm-4 div-col-sm6 begin -->
                    <div class="product"> <!-- product begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="https://via.placeholder.com/480x508.png?text=handmade+products+0" alt="Product 0">
                        </a>
                        <div class="text"> <!-- text begin -->
                            <h3>
                                <a href="details.php">
                                    Products 1 Name
                                </a>
                            </h3>
                            <p class="price">$30</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                        </div> <!-- text end -->

                    </div> <!-- product end -->
                </div> <!-- col-sm-4 div-col-sm6 finish -->
                <div class="col-sm-4 div-col-sm6 single"> <!-- col-sm-4 div-col-sm6 begin -->
                    <div class="product"> <!-- product begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="https://via.placeholder.com/480x508.jpg?text=handmade+products+1" alt="Product 1">
                        </a>
                        <div class="text"> <!-- text begin -->
                            <h3>
                                <a href="details.php">
                                    Products 2 Name
                                </a>
                            </h3>
                            <p class="price">$30</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                        </div> <!-- text end -->

                    </div> <!-- product end -->
                </div> <!-- col-sm-4 div-col-sm6 finish -->
                <div class="col-sm-4 div-col-sm6 single"> <!-- col-sm-4 div-col-sm6 begin -->
                    <div class="product"> <!-- product begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="https://via.placeholder.com/480x508.png?text=handmade+products+2" alt="Product 2">
                        </a>
                        <div class="text"> <!-- text begin -->
                            <h3>
                                <a href="details.php">
                                    Products 3 Name
                                </a>
                            </h3>
                            <p class="price">$30</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                        </div> <!-- text end -->

                    </div> <!-- product end -->
                </div> <!-- col-sm-4 div-col-sm6 finish -->
                <div class="col-sm-4 div-col-sm6 single"> <!-- col-sm-4 div-col-sm6 begin -->
                    <div class="product"> <!-- product begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="https://via.placeholder.com/480x508.png?text=handmade+products+3" alt="Product 3">
                        </a>
                        <div class="text"> <!-- text begin -->
                            <h3>
                                <a href="details.php">
                                    Products 4 Name
                                </a>
                            </h3>
                            <p class="price">$30</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                        </div> <!-- text end -->
                    </div> <!-- product end -->
                </div> <!-- col-sm-4 div-col-sm6 finish -->                
                <div class="col-sm-4 div-col-sm6 single"> <!-- col-sm-4 div-col-sm6 begin -->
                    <div class="product"> <!-- product begin -->
                        <a href="details.php">
                            <img class="img-responsive" src="https://via.placeholder.com/480x508.png?text=handmade+products+4" alt="Product 4">
                        </a>
                        <div class="text"> <!-- text begin -->
                            <h3>
                                <a href="details.php">
                                    Products 5 Name
                                </a>
                            </h3>
                            <p class="price">$30</p>
                            <p class="button">
                                <a href="details.php" class="btn btn-default">View Details</a>
                                <a href="details.php" class="btn btn-primary">
                                    <i class="fa fa-shopping-cart">
                                        Add To Cart
                                    </i>
                                </a>
                            </p>
                        </div> <!-- text end -->

                    </div> <!-- product end -->
                </div> <!-- col-sm-4 div-col-sm6 finish -->
            </div> <!-- row Finish -->
        </div> <!-- container Finish -->

        <?php
        include("includes/footer.php");
        ?>


        <!--             ew3a te2arablaha yalla -->
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>