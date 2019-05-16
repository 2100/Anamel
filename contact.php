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
                            <li class="active"><a href="Contact.php">About</a></li>
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

        <div id="about" class="container"> <!-- content start -->
            <div class="col-md-12"> <!-- col-md-12 start -->
                <ul class="breadcrumb"> <!-- breadcrumb start -->
                    <li><a href="index.php">Home</a></li>
                    <li>about</li>
                </ul> <!-- breadcrumb end -->
            </div> <!-- col-md-12 end -->
            <div class="col-md-12"> <!--col-md-12 begin-->
                <div class="box"> <!-- box begin -->
                    <h3>About</h3>
                    <div class="abt"> <!-- abt begin -->
                        &#x2010; Jzoor is an oasis of opportunities for Egyptian aspiring producers from the smallest to the biggest products, handmade or otherwise. It was created with one thought in mind – to make it possible for everyone in Egypt to reach a MARKET and to sustain and grow.<br>

                        &#x2010; Jzoor works through a dynamic team to open or create doors to be crossed by anyone with a product that has quality, ability to standardize, a tenacious will to produce unique products, ready to get branded and competitive prices so that it can enter and stay in any upscale market in the world.<br>

                        &#x2010; The main aim of Jzoor is to support unemployment and create income opportunities for many
                        individuals and families, which will in turn contribute to the country's economic development by decreasing unemployment, increasing tourism, promoting Egyptian culture and heritage, empowering women and young struggling artisans, as well as increasing export opportunities.
                        We target low income/unemployed artisans, unemployed women, artisans with disabilities, and many other clusters in Egyptian governorates.<br>

                        &#x2010; Jzoor was created to complete the dream started by AWTAD an NGO in Egypt since 2008 working to economically empower producers all over Egypt.  Today Jzoor and AWTAD are the wind beneath the wings of many Egyptian producers.<br>

                        &#x2010; Jzoor also encourages local production as opposed to importation as it uses local natural resources, therefore creating income opportunities for others. We aim at leveraging culture as an asset for economic growth and contribute to the dynamism of arts and crafts in the world.  Original and authentic beading, embroidery and handmade fabrics, calligraphy, glass blowing,
                        brass, wood and silver work, and much more will be linked with today's modernity through design to create unique products for artisans. Jzoor supports creating new economic opportunities and empowering individuals, especially women, on a social and economic level.
                        We reach out to markets through big fairs, retail distribution, export and any other viable opportunity.<br>

                        &#x2010; Jzoor also works with store owners, e-commerce sites, bulk buyers to be your one stop shop offering a variety of services from visual merchandising, stock and logistics management for any online or offline store and retail buyer. We offer you all those at competitive prices because we work in bulk services, which makes it affordable even for those at the start line.<br>
                        <strong>Jzoor..... your gateway to Egyptian Authentic Art</strong>
                    </div> <!-- abt end -->
                </div> <!-- box end -->
                <div class="box row"> <!-- box row begin -->
                    <div class="col-md-6"> <!-- col-md-6 begin -->
                        <div class="block"> <!-- block begin -->
                            <h3>Contact Me</h3>
                            <p>
                                If you have any questions, feel free to ask, our customer support are happily to respond you within 24/7<br>
                            </p>
                            <div class="contact-form"> <!-- contact-form begin -->
                                <form id="contact-form" method="#" action="#" role="form">
                                    <div class="form-group wow fadeInDown">
                                        <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group wow fadeInDown">
                                        <input type="email" placeholder="Your Email" class="form-control" name="email" id="email" >
                                    </div>
                                    <div class="form-group wow fadeInDown">
                                        <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
                                    </div>
                                    <div class="form-group wow fadeInDown">
                                        <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>
                                    </div>
                                    <div id="submit">
                                        <input type="submit" id="contact-submit" class="btn btn-default btn-send" value="Send Message">
                                    </div>                      
                                </form>
                            </div> <!-- contact-form end -->
                        </div> <!-- block end -->
                    </div> <!-- col-md-6 end -->
                    <div class="col-md-6">
                        <div class="map-responsive"> 
                            <h3>Find Us</h3>
                            <p>
                                Find us here on the map
                            </p>
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6913.354551333375!2d31.25724777443552!3d29.9599601276524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145847f195c135af%3A0xd495a031bc7b458b!2z2KfZiNiq2KfYryAtINin2YTZhdik2LPYs9ipINin2YTYqtmG2YXZiNmK2Kkg2YTZhNiz2YrYr9in2Kog2KfZhNmF2LXYsdmK2KfYqiDZhNmE2LnZhdmEINin2YTYrdix!5e0!3m2!1sar!2seg!4v1550062597597" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div> <!-- col-md-6 end -->
                </div> <!-- box row end -->
            </div> <!-- col-md-12 end -->
        </div> <!-- content end -->

        <?php
        include("includes/footer.php");
        ?>
        <!--             ew3a te2arablaha yalla -->
        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>
</html>