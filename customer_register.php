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
                            <li><a href="Contact.php">About </a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="customer/my_account.php">My Account</a></li>
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

        <div id="content"> <!-- content start -->
            <div class="container"> <!-- container start -->
                <div class="col-md-12"> <!-- col-md-12 start -->
                    <ul class="breadcrumb"> <!-- breadcrumb start -->
                        <li><a href="index.php">Home</a></li>
                        <li>Register</li>
                    </ul> <!-- breadcrumb end -->
                </div> <!-- col-md-12 end -->
                <div class="col-md-3">
                    <?php
                    include("includes/sidebar.php");
                    ?>
                </div>
                <div class="col-md-9"><!-- col-md-9 Begin -->
                    <div class="box"><!-- box Begin -->
                        <div class="box-header"><!-- box-header Begin -->
                            <center><!-- center Begin -->
                                <h2> Register a new account </h2>
                            </center><!-- center Finish -->
                            <form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                                <div class="form-group"><!-- form-group Begin -->
                                    <label>Your Name</label>
                                    <input type="text" class="form-control" name="c_name" required>
                                </div><!-- form-group Finish -->
                                <div class="form-group"><!-- form-group Begin -->
                                    <label>Your Email</label>
                                    <input type="text" class="form-control" name="c_email" required>
                                </div><!-- form-group Finish -->
                                <div class="form-group"><!-- form-group Begin -->
                                    <label>Your Password</label>
                                    <input type="password" class="form-control" name="c_pass" required>
                                </div><!-- form-group Finish -->
                                <div class="form-group"><!-- form-group Begin -->
                                    <label>Your Country</label>
                                    <input type="text" class="form-control" name="c_country" required>
                                </div><!-- form-group Finish -->
                                <div class="form-group"><!-- form-group Begin -->
                                    <label>Your City</label>
                                    <input type="text" class="form-control" name="c_city" required>
                                </div><!-- form-group Finish -->
                                <div class="form-group"><!-- form-group Begin -->
                                    <label>Your Contact</label>
                                    <input type="text" class="form-control" name="c_contact" required>
                                </div><!-- form-group Finish -->
                                <div class="form-group"><!-- form-group Begin -->
                                    <label>Your Address</label>
                                    <input type="text" class="form-control" name="c_address" required>
                                </div><!-- form-group Finish -->
                                <div class="form-group"><!-- form-group Begin -->
                                    <label>Your Profile Picture</label>
                                    <input type="file" class="form-control form-height-custom" name="c_image" required>
                                </div><!-- form-group Finish -->
                                <div class="text-center"><!-- text-center Begin -->
                                    <button type="submit" name="register" class="btn btn-primary">
                                        <i class="fa fa-user-md"></i> Register
                                    </button>
                                </div><!-- text-center Finish -->
                                <div class="signin">
                                    <p>Already have an account? <a href="checkout.php">Sign in</a>.</p>
                                </div>
                            </form><!-- form Finish -->
                        </div><!-- box-header Finish -->
                    </div><!-- box Finish -->
                </div><!-- col-md-9 Finish -->
            </div> <!-- container end -->
        </div> <!-- content end -->

        <?php
        include("includes/footer.php");
        ?>
        <!--             ew3a te2arablaha yalla -->
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>