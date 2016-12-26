<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
	<div class="main-container container">
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Login or create new account
		</h2>
	<!-- Main Heading Ends -->
	<!-- Login Form Section Starts -->
		<section class="login-area">
			<div class="row">
				<div class="col-sm-6">
				<!-- Login Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">Login</h3>
						</div>
						<div class="panel-body">
							<p>
								Please login using your existing account
							</p>
						<!-- Login Form Starts -->
              <?php echo $this->Form->create('User', array('action' => 'login')); ?>
								<div class="form-group">
									<label class="sr-only" for="exampleInputEmail2">Username</label>
                  <?php echo $this->Form->input("email" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "User"))?>
								</div>
								<div class="form-group">
									<label class="sr-only" for="exampleInputPassword2">Password</label>
                  <?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div'=>false,'class'=>"form-control", 'placeholder' => "Password" ))?>
								</div>
								<button type="submit" class="btn btn-black">
									Login
								</button>
              <?php echo $this->Form->end();?>
						<!-- Login Form Ends -->
						</div>
					</div>
				<!-- Login Panel Ends -->
				</div>
				<div class="col-sm-6">
				<!-- Account Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Create new account
							</h3>
						</div>
						<div class="panel-body">
							<p>
								Registration allows you to avoid filling in billing and shipping forms every time you checkout on this website
							</p>
							<a href="register.html" class="btn btn-black">
								Register
							</a>
						</div>
					</div>
				<!-- Account Panel Ends -->
				<!-- Guest Checkout Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Checkout as Guest
							</h3>
						</div>
						<div class="panel-body">
							<p>
								Checkout as a guest instead!
							</p>
							<button class="btn btn-black">As Guest</button>
						</div>
					</div>
				<!-- Guest Checkout Panel Ends -->
				</div>
			</div>
		</section>
	<!-- Login Form Section Ends -->
	</div>
<!-- Main Container Ends -->
