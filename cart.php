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
                            <li><a href="Contact.php">About</a></li>
                            <li><a href="shop.php">Shop</a></li>
                            <li><a href="customer/my_account.php">My Account</a></li>

                            <li class="active"><a href="Cart.php">Shopping Cart</a></li>

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

        <div id="content"><!-- #content Begin -->
            <div class="container"><!-- container Begin -->
                <div class="col-md-12"><!-- col-md-12 Begin -->
                    <ul class="breadcrumb"><!-- breadcrumb Begin -->
                        <li><a href="index.php">Home</a></li>
                        <li><a href="contact.php">about</a></li>
                        <li><a href="shop.php">Shop</a></li>
                        <li><a href="checkout.php">My Account</a></li>
                        <li>Shopping Cart</li>
                    </ul><!-- breadcrumb Finish -->
                </div><!-- col-md-12 Finish -->    
                <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
                    <div class="box"><!-- box Begin -->
                        <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                            <h1>Shopping Cart</h1>
                            <p class="text-muted">You currently have 0 item(s) in your cart</p>
                            <div class="table-responsive"><!-- table-responsive Begin -->
                                <table class="table"><!-- table Begin -->
                                    <thead><!-- thead Begin -->
                                        <tr><!-- tr Begin -->
                                            <th colspan="2">Product</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Size</th>
                                            <th colspan="1">Delete</th>
                                            <th colspan="2">Sub-Total</th>
                                        </tr><!-- tr Finish -->
                                    </thead><!-- thead Finish -->
                                    <tbody><!-- tbody Begin -->
                                        <tr><!-- tr Begin -->
                                            <td>
                                                <img class="img-responsive" src="https://via.placeholder.com/480x508.png" alt="Product 0">
                                            </td>
                                            <td>
                                                <a href="#">Product 0</a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                $50
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                $100
                                            </td>
                                        </tr><!-- tr Finish -->
                                    </tbody><!-- tbody Finish -->
                                    <tbody><!-- tbody Begin -->
                                        <tr><!-- tr Begin -->
                                            <td>
                                                <img class="img-responsive" src="https://via.placeholder.com/480x508.png" alt="Product 1">
                                            </td>
                                            <td>
                                                <a href="#">Product 1</a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                $50
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                $100
                                            </td>
                                        </tr><!-- tr Finish -->
                                    </tbody><!-- tbody Finish -->
                                    <tbody><!-- tbody Begin -->
                                        <tr><!-- tr Begin -->
                                            <td>
                                                <img class="img-responsive" src="https://via.placeholder.com/480x508.png" alt="Product 2">
                                            </td>
                                            <td>
                                                <a href="#">Product 2 </a>
                                            </td>
                                            <td>
                                                2
                                            </td>
                                            <td>
                                                $50
                                            </td>
                                            <td>
                                                Large
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remove[]">
                                            </td>
                                            <td>
                                                $100
                                            </td>
                                        </tr><!-- tr Finish -->
                                    </tbody><!-- tbody Finish -->
                                    <tfoot><!-- tfoot Begin -->
                                        <tr><!-- tr Begin -->
                                            <th colspan="5">Total</th>
                                            <th colspan="2">$100</th>
                                        </tr><!-- tr Finish -->
                                    </tfoot><!-- tfoot Finish -->
                                </table><!-- table Finish -->
                            </div><!-- table-responsive Finish -->
                            <div class="box-footer"><!-- box-footer Begin -->
                                <div class="pull-left"><!-- pull-left Begin -->
                                    <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                        <i class="fa fa-chevron-left"></i> Continue Shopping
                                    </a><!-- btn btn-default Finish -->
                                </div><!-- pull-left Finish -->

                                <div class="pull-right"><!-- pull-right Begin -->
                                    <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin --><i class="fa fa-refresh"></i> Update Cart
                                    </button><!-- btn btn-default Finish -->

                                    <a href="checkout.php" class="btn btn-primary">
                                        Proceed Checkout <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div><!-- pull-right Finish -->

                            </div><!-- box-footer Finish -->
                        </form><!-- form Finish -->
                    </div><!-- box Finish -->
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
                </div><!-- col-md-9 Finish -->
                <div class="col-md-3"><!-- col-md-3 Begin -->
                    <div id="order-summary" class="box"><!-- box Begin -->
                        <div class="box-header"><!-- box-header Begin -->
                            <h3>Order Summary</h3>
                        </div><!-- box-header Finish -->
                        <p class="text-muted"><!-- text-muted Begin -->
                            Shipping and additional costs are calculated based on value you have entered
                        </p><!-- text-muted Finish -->
                        <div class="table-responsive"><!-- table-responsive Begin -->
                            <table class="table"><!-- table Begin -->
                                <tbody><!-- tbody Begin -->
                                    <tr><!-- tr Begin -->
                                        <td> Order Sub-Total </td>
                                        <th> $100 </th>
                                    </tr><!-- tr Finish -->

                                    <tr><!-- tr Begin -->
                                        <td> Shipping and Handling </td>
                                        <td> $0 </td>
                                    </tr><!-- tr Finish -->

                                    <tr><!-- tr Begin -->
                                        <td> Tax </td>
                                        <th> $0 </th>
                                    </tr><!-- tr Finish -->

                                    <tr class="total"><!-- tr Begin -->
                                        <td> Total </td>
                                        <th> $100 </th>
                                    </tr><!-- tr Finish -->
                                </tbody><!-- tbody Finish -->
                            </table><!-- table Finish -->
                        </div><!-- table-responsive Finish -->
                    </div><!-- box Finish -->
                </div><!-- col-md-3 Finish -->
            </div><!-- container Finish -->
        </div><!-- #content Finish -->

        <?php 
        include("includes/footer.php");
        ?>

        <!--             ew3a te2arablaha yalla -->
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>