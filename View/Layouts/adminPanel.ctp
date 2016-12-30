<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
	  <title>
	    E-Commerce Admin
    </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">

    <?php
	    echo $this->Html->meta('icon');
      echo $this->Html->css('bootstrap.min');
      echo $this->Html->css('font-awesome.min');
      echo $this->Html->css('style');
      echo $this->Html->css('responsive');
      echo $this->Html->css('dropzone');
  	  echo $this->fetch('meta');
  	  echo $this->fetch('css');
      echo $this->fetch('script');
    ?>
    <script type="text/javascript">
        var WEBROOT = "<?php echo $this->webroot; ?>";
    </script>

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
    						<a href="<?php echo $this->webroot;?>">
    							<img src="<?php echo $this->webroot;?>images/logo.png" alt="Digi Shoppe" class="img-responsive logo" />
    						</a>
    					</div>
    				<!-- Logo Ends -->
    				</div>
    			<!-- Nested Row Ends -->
    			</div>
    		<!-- Nested Container Ends -->
    		</div>
    	</header>
    <!-- Header Wrap Ends -->
    <?php echo $this->Session->flash(); ?>

		<?php echo $this->fetch('content'); ?>

    <!-- Footer Top Ends -->
    <!-- Footer Section Starts -->
    <br />
    <footer id="footer-area">
    		<div class="copyright">
    		<!-- Container Starts -->
    			<div class="container">
    			<!-- Starts -->
    				<p class="pull-left">
    					&copy; 2017 E-Commerce. Designed By <a href="#">César Hergueta</a>
    				</p>
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
        echo $this->Html->script('dropzone');
        echo $this->Html->script('owl.carousel.min');
        echo $this->Html->script('custom');
  ?>
  </body>
</html>
