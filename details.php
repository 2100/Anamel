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
                            <li><a href="index.php">Home</a></li>
                            <li><a href="Contact.php">About </a></li>
                            <li class="active"><a href="shop.php">Shop</a></li>
                            <li><a href="../customer/my_account.php">My Account</a></li>
                            <li><a href="Cart.php">Shopping Cart</a></li>

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

        <!-- el l3b koloo fl heta dih -->
        <div id="content"> <!-- content start -->
            <div class="container"> <!-- container start -->
                <div class="col-md-12"> <!-- col-md-12 start -->
                    <ul class="breadcrumb"> <!-- breadcrumb start -->
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">about</a></li>
                        <li>Shop</li>
                    </ul> <!-- breadcrumb end -->
                </div> <!-- col-md-12 end -->
                <div class="col-md-3"> <!-- col-md-3 begin -->
                    <?php
                    include("includes/sidebar.php");
                    ?>
                </div> <!-- col-md-3 end -->
                <div class="col-md-9"> <!-- col-md-9 begin -->
                    <div id="productMain" class="row"> <!-- row begin -->
                        <div class="col-sm-6"> <!-- col-sm-6 begin -->
                            <div id="mainImage"> <!-- mainImage begin -->
                                <div id="myCarousel" class="carousel slide" data-ride="Carousel"> <!-- carousel slide begin -->
                                    <ol class="carousel-indicators"><!-- carousel-indicators begin -->
                                        <li data-target="myCarousel" data-slide-to="0" class="active" ></li>
                                        <li data-target="myCarousel" data-slide-to="1"></li>
                                        <li data-target="myCarousel" data-slide-to="2"></li>
                                    </ol> <!-- carousel-indicators end -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <center><img class="img-responsive" src="https://via.placeholder.com/480x508.png?text=photos+slider+0" alt="product 0"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="https://via.placeholder.com/480x508.png?text=photos+slider+1" alt="product 1"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="https://via.placeholder.com/480x508.png?text=photos+slider+2" alt="product 2"></center>
                                        </div>
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a>

                                </div> <!-- carousel slide end-->
                            </div> <!-- mainImage end -->
                        </div> <!-- col-sm-6 end -->
                        <div class="col-sm-6"> <!-- col-sm-6 begin -->
                            <div class="box"> <!-- box begin -->
                                <h1 class="text-center">you are now viewing product 1 details</h1>
                                <form action="details.php" class="form-horizontal" method="post"> <!-- form-horizontal begin -->
                                    <div class="form-group"> <!-- form-group begin -->
                                        <label for="" class="col-md-5 control-label">Products Quantity:</label>
                                        <div class="col-md-7"> <!-- col-md-7 begin -->
                                            <select name="product_qty" class="form-control"> <!-- form-control begin -->
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select> <!-- form-control finish -->
                                        </div> <!-- col-md-7 finish -->
                                    </div> <!-- form-group finish -->

                                    <div class="form-group"> <!-- form-group begin -->
                                        <label for="" class="col-md-5 control-label">Products Size:</label>
                                        <div class="col-md-7"> <!-- col-md-7 begin -->
                                            <select name="product_size" class="form-control"> <!-- form-control begin -->
                                                <option>Select Product Size</option>
                                                <option>Size 1</option>
                                                <option>Size 2</option>
                                                <option>Size 3</option>
                                            </select> <!-- form-control finish -->
                                        </div> <!-- col-md-7 finish -->
                                    </div> <!-- form-group finish -->
                                    <p class="price">$50</p>
                                    <p class="text-center buttons">
                                        <button class="btn btn-primary i fa fa-shopping-cart">Add to Cart</button>
                                    </p>
                                </form> <!-- form-horizontal finish -->

                            </div> <!-- box end -->
                            <div class="row" id="thumbs"> <!-- row begin -->
                                <div class="col-xs-4"> <!-- col-xs-4 begin -->
                                    <a href="#" class="thumb"> <!-- thumb begin -->
                                        <img src="https://via.placeholder.com/480x508.png?text=details+products+0" alt="product 0" class="img-responsive">
                                    </a> <!-- thumb finish -->
                                </div> <!-- col-xs-4 finish -->
                                <div class="col-xs-4"> <!-- col-xs-4 begin -->
                                    <a href="#" class="thumb"> <!-- thumb begin -->
                                        <img src="https://via.placeholder.com/480x508.png?text=details+products+1" alt="product 1" class="img-responsive">
                                    </a> <!-- thumb finish -->
                                </div> <!-- col-xs-4 finish -->
                                <div class="col-xs-4"> <!-- col-xs-4 begin -->
                                    <a href="#" class="thumb"> <!-- thumb begin -->
                                        <img src="https://via.placeholder.com/480x508.png?text=details+products+2" alt="product 2" class="img-responsive">
                                    </a> <!-- thumb finish -->
                                </div> <!-- col-xs-4 finish -->
                            </div> <!-- row finish -->
                        </div> <!-- col-sm-6 end -->
                    </div> <!-- row end -->            
                    <div class="box" id="details"> <!-- box begin -->
                        <h4>Products Details</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maiores dicta, quam sed ut neque nulla commodi. Iure accusamus, illum debitis quis, aperiam quod, mollitia eligendi velit non facilis minus.
                        </p>
                        <h4>Size</h4>
                        <ul>
                            <li>Size 1</li>
                            <li>Size 2</li>
                            <li>Size 3</li>
                        </ul>
                        <hr>
                    </div> <!-- box finish -->
                    <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                        <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                            <div class="box same-height headline"><!-- box same-height headline Begin -->
                                <h3 class="text-center">Products You Maybe Like</h3>
                            </div><!-- box same-height headline Finish -->
                        </div><!-- col-md-3 col-sm-6 Finish -->
                        <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                            <div class="product same-height"><!-- product same-height Begin -->
                                <a href="details.php">
                                    <img class="img-responsive" src="https://via.placeholder.com/480x508.png" alt="Product 6">
                                </a>
                                <div class="text"><!-- text Begin -->
                                    <h3><a href="details.php">Product 0</a></h3>
                                    <p class="price">$40</p>
                                </div><!-- text Finish -->
                            </div><!-- product same-height Finish -->
                        </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                        <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                            <div class="product same-height"><!-- product same-height Begin -->
                                <a href="details.php">
                                    <img class="img-responsive" src="https://via.placeholder.com/480x508.png" alt="Product 6">
                                </a>
                                <div class="text"><!-- text Begin -->
                                    <h3><a href="details.php">Product 1</a></h3>
                                    <p class="price">$45</p>
                                </div><!-- text Finish -->
                            </div><!-- product same-height Finish -->
                        </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                        <div class="col-md-3 col-sm-6 center-responsive"><!-- col-md-3 col-sm-6 center-responsive Begin -->
                            <div class="product same-height"><!-- product same-height Begin -->
                                <a href="details.php">
                                    <img class="img-responsive" src="https://via.placeholder.com/480x508.png" alt="Product 6">
                                </a>
                                <div class="text"><!-- text Begin -->
                                    <h3><a href="details.php">Product 2</a></h3>
                                    <p class="price">$50</p>
                                </div><!-- text Finish -->
                            </div><!-- product same-height Finish -->
                        </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                    </div><!-- #row same-heigh-row Finish -->
                </div> <!-- col-md-9 end -->
            </div> <!-- container end -->
        </div> <!-- content end -->

        <!-- l3b finished el7l -->

        <?php
        include("includes/footer.php");
        ?>
        <!-- ew3a te2arablaha yalla - hanfo5ak sada2ni! -->
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>