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
    <link href="css/dropzone.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <script type="text/javascript">
        var WEBROOT = "<?php echo $this->webroot; ?>";
    </script>

    <?php
	    echo $this->Html->meta('icon');
  	  echo $this->fetch('meta');
  	  echo $this->fetch('css');
      echo $this->fetch('script');
    ?>

  </head>
  <body>
        <?php if($this->Session->read('UserAuth.User.User_group_id') == 1){?>
            <?php echo $this->Element('menu-admin'); ?>
        <?php } else{?>
            <?php echo $this->Element('menu'); ?>
        <?php } ?>
       

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
        echo $this->Html->script('dropzone.js');
        echo $this->Html->script('owl.carousel.min');
        echo $this->Html->script('custom');
  ?>
  </body>
</html>
