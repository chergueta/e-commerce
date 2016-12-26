<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
	  <title>
	    E-Commerce Admin
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
	  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <?php
	    echo $this->Html->meta('icon');
  	  echo $this->fetch('meta');
  	  echo $this->fetch('css');
      echo $this->fetch('script');
    ?>

  </head>
  <body>

    <!-- Header Wrap Starts -->
    	<header class="header-wrap inner">
    	<!-- Header Top Starts -->
    		<div class="header-top">
    		<!-- Nested Container Starts -->
    			<div class="container">
    			<!-- Nested Row Starts -->
    				<div class="row">
    				<!-- Logo Starts -->
    					<div class="col-md-3 col-sm-4 col-xs-12">
    						<a href="index.html">
    							<img src="images/logo.png" alt="Digi Shoppe" class="img-responsive logo" />
    						</a>
    					</div>
    				<!-- Logo Ends -->
    				<!-- Header Top Links Starts -->
    					<div class="col-md-5 col-xs-12 hidden-sm hidden-xs">
    						<ul class="list-unstyled list-inline header-links text-center">
    							<li><a href="index.html">Home</a></li>
    							<li><a href="#">Wish List(0)</a></li>
    							<li><a href="cart.html">Shopping Cart</a></li>
    							<li><a href="login.html">Login</a></li>
    							<li><a href="register.html">Register</a></li>
    						</ul>
    					</div>
    				<!-- Header Top Links Ends -->
    				<!-- Currency & Languages Starts -->
    					<div class="col-md-2 col-sm-5 col-xs-12 text-center">
    					<!-- Languages Starts -->
    						<!-- <div class="btn-group">
    							<button class="btn btn-link dropdown-toggle text-uppercase" data-toggle="dropdown">
    								Eng
    								<i class="fa fa-caret-down"></i>
    							</button>
    							<ul class="pull-right dropdown-menu">
    								<li>
    									<a tabindex="-1" href="#">English</a>
    								</li>
    								<li>
    									<a tabindex="-1" href="#">French</a>
    								</li>
    							</ul>
    						</div> -->
    					<!-- Languages Ends -->
    					<!-- Currency Starts -->
    						<!-- <div class="btn-group">
    							<button class="btn btn-link dropdown-toggle text-uppercase" data-toggle="dropdown">
    								$
    								<i class="fa fa-caret-down"></i>
    							</button>
    							<ul class="pull-right dropdown-menu">
    								<li><a tabindex="-1" href="#">Pound </a></li>
    								<li><a tabindex="-1" href="#">US Dollar</a></li>
    								<li><a tabindex="-1" href="#">Euro</a></li>
    							</ul>
    						</div> -->
    					<!-- Currency Ends -->
    					</div>
    				<!-- Currency & Languages Ends -->
    				<!-- Shopping Cart Starts -->
    					<div class="col-md-2 col-sm-3 col-xs-12">
    						<div id="cart" class="btn-group pull-right">
    							<button type="button" data-toggle="dropdown" class="btn dropdown-toggle text-uppercase">
    								<i class="fa fa-shopping-cart"></i>
    								<span id="cart-total">0 item(s)</span>
    								<i class="fa fa-caret-down"></i>
    							</button>
    							<ul class="dropdown-menu">
    								<li>
    									<p class="text-center">Your shopping cart is empty!</p>
    								</li>
    							</ul>
    						</div>
    					</div>
    				<!-- Shopping Cart Ends -->
    				</div>
    			<!-- Nested Row Ends -->
    			</div>
    		<!-- Nested Container Ends -->
    		</div>
    	<!-- Header Top Ends -->
    	<!-- Main Menu Starts -->
    		<nav id="main-menu" class="navbar" role="navigation">
    		<!-- Nested Container Starts -->
    			<div class="container">
    			<!-- Nav Header Starts -->
    				<div class="navbar-header">
    					<button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
    						<span class="sr-only">Toggle Navigation</span>
    						<i class="fa fa-bars"></i>
    					</button>
    				</div>
    			<!-- Nav Header Ends -->
    			<!-- Navbar Cat collapse Starts -->
    				<div class="collapse navbar-collapse navbar-cat-collapse">
    				<!-- Nav Links Starts -->
    					<ul class="nav navbar-nav">
    						<li><a href="category-list.html">Digital Cameras</a></li>
    						<li class="dropdown">
    							<a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
    								Sound Devices
    							</a>
    							<ul class="dropdown-menu" role="menu">
    								<li><a tabindex="-1" href="#">Music System</a></li>
    								<li><a tabindex="-1" href="#">DTS</a></li>
    								<li><a tabindex="-1" href="#">Home Theater</a></li>
    							</ul>
    						</li>
    						<li class="dropdown">
    							<a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Televisions </a>
    							<div class="dropdown-menu">
    								<div class="dropdown-inner">
    									<ul class="list-unstyled">
    										<li class="dropdown-header">Sub Category</li>
    										<li><a tabindex="-1" href="#">item 1</a></li>
    										<li><a tabindex="-1" href="#">item 2</a></li>
    										<li><a tabindex="-1" href="#">item 3</a></li>
    									</ul>
    									<ul class="list-unstyled">
    										<li class="dropdown-header">Sub Category</li>
    										<li><a tabindex="-1" href="#">item 1</a></li>
    										<li><a tabindex="-1" href="#">item 2</a></li>
    										<li><a tabindex="-1" href="#">item 3</a></li>
    									</ul>
    									<ul class="list-unstyled">
    										<li class="dropdown-header">Sub Category</li>
    										<li><a tabindex="-1" href="#">item 1</a></li>
    										<li><a tabindex="-1" href="#">item 2</a></li>
    										<li><a tabindex="-1" href="#">item 3</a></li>
    									</ul>
    								</div>
    							</div>
    						</li>
    						<li><a href="category-list.html">Computers </a></li>
    						<li><a href="category-list.html">Washing Machines</a></li>
    						<li class="dropdown">
    							<a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
    								Pages
    							</a>
    							<ul class="dropdown-menu" role="menu">
    								<li><a tabindex="-1" href="index.html">Home</a></li>
    								<li><a tabindex="-1" href="about.html">About</a></li>
    								<li><a tabindex="-1" href="category-list.html">Category List</a></li>
    								<li><a tabindex="-1" href="category-grid.html">Category Grid</a></li>
    								<li><a tabindex="-1" href="product.html">Product</a></li>
    								<li><a tabindex="-1" href="product-full.html">Product Full Width</a></li>
    								<li><a tabindex="-1" href="cart.html">Cart</a></li>
    								<li><a tabindex="-1" href="login.html">Login</a></li>
    								<li><a tabindex="-1" href="compare.html">Compare Products</a></li>
    								<li><a tabindex="-1" href="typography.html">Typography</a></li>
    								<li><a tabindex="-1" href="register.html">Register</a></li>
    								<li><a tabindex="-1" href="contact.html">Contact</a></li>
    								<li><a tabindex="-1" href="404.html">404</a></li>
    							</ul>
    						</li>
    					</ul>
    				<!-- Nav Links Ends -->
    				<!-- Search Form Starts -->
    					<form class="navbar-form navbar-right hidden-sm hidden-xs" role="search">
    						<div class="input-group">
    						  <input type="text" class="form-control" placeholder="Search">
    						  <span class="input-group-btn">
    							<button class="btn btn-default" type="button">
    								<i class="fa fa-search"></i>
    							</button>
    						  </span>
    						</div>
    					</form>
    				<!-- Search Form Ends -->
    				</div>
    			<!-- Navbar Cat collapse Ends -->
    			</div>
    		<!-- Nested Container Ends -->
    		</nav>
    	<!-- Main Menu Ends -->
    	</header>
    <!-- Header Wrap Ends -->
    <?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

    <!-- Footer Top Ends -->
    <!-- Footer Section Starts -->
    <footer id="footer-area">
    	<!-- Footer Links Starts -->
    		<div class="footer-links">
    		<!-- Container Starts -->
    			<div class="container">
    				<!-- Information Links Starts -->
    					<div class="col-md-2 col-sm-3 col-xs-12">
    						<h5>Information</h5>
    						<ul>
    							<li><a href="about.html">About Us</a></li>
    							<li><a href="#">Delivery Information</a></li>
    							<li><a href="#">Privacy Policy</a></li>
    							<li><a href="#">Terms &amp; Conditions</a></li>
    						</ul>
    					</div>
    				<!-- Information Links Ends -->
    				<!-- My Account Links Starts -->
    					<div class="col-md-2 col-sm-3 col-xs-12">
    						<h5>My Account</h5>
    						<ul>
    							<li><a href="#">My orders</a></li>
    							<li><a href="#">My merchandise returns</a></li>
    							<li><a href="#">My credit slips</a></li>
    							<li><a href="#">My addresses</a></li>
    							<li><a href="#">My personal info</a></li>
    						</ul>
    					</div>
    				<!-- My Account Links Ends -->
    				<!-- Customer Service Links Starts -->
    					<div class="col-md-2 col-sm-3 col-xs-12">
    						<h5>Service</h5>
    						<ul>
    							<li><a href="contact.html">Contact Us</a></li>
    							<li><a href="#">Returns</a></li>
    							<li><a href="#">Site Map</a></li>
    							<li><a href="#">Affiliates</a></li>
    							<li><a href="#">Specials</a></li>
    						</ul>
    					</div>
    				<!-- Customer Service Links Ends -->
    				<!-- Follow Us Links Starts -->
    					<div class="col-md-2 col-sm-3 col-xs-12">
    						<h5>Follow Us</h5>
    						<ul>
    							<li><a href="#">Facebook</a></li>
    							<li><a href="#">Twitter</a></li>
    							<li><a href="#">RSS</a></li>
    							<li><a href="#">YouTube</a></li>
    						</ul>
    					</div>
    				<!-- Follow Us Links Ends -->
    				<!-- Contact Us Starts -->
    					<div class="col-md-4 col-xs-12 last">
    						<h5>Contact Us</h5>
    						<ul>
    							<li>My Company</li>
    							<li>
    								1247 LB Nagar Road, Hyderabad, Telangana - 35
    							</li>
    							<li>
    								Email: <a href="#">info@demolink.com</a>
    							</li>
    						</ul>
    						<h4 class="lead">
    							Tel: <span>1(234) 567-9842</span>
    						</h4>
    					</div>
    				<!-- Contact Us Ends -->
    			</div>
    		<!-- Container Ends -->
    		</div>
    	<!-- Footer Links Ends -->
    	<!-- Copyright Area Starts -->
    		<div class="copyright">
    		<!-- Container Starts -->
    			<div class="container">
    			<!-- Starts -->
    				<p class="pull-left">
    					&copy; 2017. Designed By <a href="#">César Hergueta</a>
    				</p>
    			<!-- Ends -->
    			<!-- Payment Gateway Links Starts -->
    				<ul class="pull-right list-inline">
    					<li>
    						<img src="images/payment-icon/cirrus.png" alt="PaymentGateway" />
    					</li>
    					<li>
    						<img src="images/payment-icon/paypal.png" alt="PaymentGateway" />
    					</li>
    					<li>
    						<img src="images/payment-icon/visa.png" alt="PaymentGateway" />
    					</li>
    					<li>
    						<img src="images/payment-icon/mastercard.png" alt="PaymentGateway" />
    					</li>
    					<li>
    						<img src="images/payment-icon/americanexpress.png" alt="PaymentGateway" />
    					</li>
    				</ul>
    			<!-- Payment Gateway Links Ends -->
    			</div>
    		<!-- Container Ends -->
    		</div>
    	<!-- Copyright Area Ends -->
    	</footer>
    <!-- Footer Section Ends -->
    <!-- JavaScript Files -->

  <?php echo $this->Html->script('jquery-1.11.1.min');
        echo $this->Html->script('jquery-migrate-1.2.1.min');
        echo $this->Html->script('bootstrap.min');
        echo $this->Html->script('bootstrap-hover-dropdown.min');
        echo $this->Html->script('jquery.magnific-popup.min');
        echo $this->Html->script('owl.carousel.min');
        echo $this->Html->script('custom');
  ?>
  </body>
</html>
