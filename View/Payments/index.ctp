
<body>
<?php echo $this->Form->create('Payment'); ?>
<?php echo $this->Form->input('user_id',array('div'=>false,'label'=>false,'type'=>'hidden','value'=>$this->UserAuth->getUserId())); ?>

<div type="hidden" id="pago">
	<?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'type'=>'hidden','class'=>'form-control')); ?>
</div>
<!-- Header Wrap Ends -->
<!-- Breadcrumb Starts -->
	<div class="breadcrumb-wrap">
		<div class="container">
		<!-- Breadcrumb Starts -->
			<ol class="breadcrumb">
				<li><a href="index.html">Home</a></li>
				<li class="active">Shopping Cart</li>
			</ol>
		<!-- Breadcrumb Ends -->		
		</div>
	</div>
<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
	<div class="main-container container">
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Shopping Cart
		</h2>
	<!-- Main Heading Ends -->
	<!-- Shopping Cart Table Starts -->
		<div class="table-responsive shopping-cart-table">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td class="text-center">
							Plan
						</td>
						<td class="text-center">
							Detalles del Plan
						</td>							
						<td class="text-center">
							Duración
						</td>
						<td class="text-center">
							Costo
						</td>
						<td class="text-center">
							Total
						</td>
						<td class="text-center">
							Selección
						</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text-center">
							<a href="product.html">
								<img src="images/product-images/cart-thumb-img1.jpg" alt="Product Name" title="Product Name" class="img-thumbnail" />
							</a>
						</td>
						<td class="text-center">
							<a href="product-full.html">Subscripción quincenal</a>
						</td>							
						<td class="text-center">
							<a href="">15 días</a>						
						</td>
						<td class="text-center">
							$15.00
						</td>
						<td class="text-center">
							$15.00
						</td>
						<td class="text-center">
							<input type="button" title="Update" class="btn btn-default tool-tip" onClick="setPlanPayment('15.00')"></input>
						</td>
					</tr>
					<tr>
						<td class="text-center">
							<a href="product.html">
								<img src="images/product-images/cart-thumb-img2.jpg" alt="Product Name" title="Product Name" class="img-thumbnail" />
							</a>
						</td>
						<td class="text-center">
							<a href="product-full.html">Subscripción mensual</a>
						</td>							
						<td class="text-center">
							<a href="">30 días</a>							
						</td>
						<td class="text-center">
							$27.00
						</td>
						<td class="text-center">
							$27.00
						</td>
						<td class="text-center">
							<input type="button" title="Update" class="btn btn-default tool-tip glyphicon glyphicon-ok" onClick="setPlanPayment('27.00')"></input>
						</td>
					</tr>
					<tr>
						<td class="text-center">
							<a href="product.html">
								<img src="images/product-images/cart-thumb-img2.jpg" alt="Product Name" title="Product Name" class="img-thumbnail" />
							</a>
						</td>
						<td class="text-center">
							<a href="product-full.html">Subscripción anual</a>
						</td>							
						<td class="text-center">
							<a href="">365 días / 1 año</a>							
						</td>
						<td class="text-center">
							$200.00
						</td>
						<td class="text-center">
							$200.00
						</td>
						<td class="text-center">
							<input type="button" title="Update" class="btn btn-default tool-tip" onClick="setPlanPayment('200.00')"></input>
						</td>
					</tr>									
				</tbody>
			</table>				
		</div>
	<!-- Shopping Cart Table Ends -->
	<!-- Shipping Section Starts -->
		<section class="registration-area">
			<div class="row">
			<!-- Shipping & Shipment Block Starts -->
				<div class="col-sm-6">
				<!-- Taxes Block Starts -->
				<!-- Taxes Block Ends -->
				<!-- Shipment Information Block Starts -->
				
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Terms &amp; Conditions
							</h3>
						</div>
						<div class="panel-body">
							<p>
								HTML Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. 
							</p>
							<p>
								Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. 
							</p>
							<p>
								Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat.
							</p>								
						</div>
					</div>
					
				<!-- Shipment Information Block Ends -->
				</div>
			<!-- Shipping & Shipment Block Ends -->
			<!-- Discount & Conditions Blocks Starts -->
				<div class="col-sm-6">
				<!-- Discount Coupon Block Starts -->


<!-- 					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Discount Coupon Code
							</h3>
						</div>
						<div class="panel-body">
 -->						<!-- Form Starts -->
<!-- 							<form class="form-horizontal" role="form">
								<div class="form-group">
									<label for="inputCouponCode" class="col-sm-3 control-label">Coupon Code :</label>
									<div class="col-sm-9">
										<input type="text" class="form-control" id="inputCouponCode" placeholder="Coupon Code">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-9">
										<button type="submit" class="btn btn-default">
											Apply Coupon
										</button>
									</div>
								</div>
							</form>
 -->						<!-- Form Ends -->
<!-- 						</div>
					</div> -->


				<!-- Discount Coupon Block Ends -->
				<!-- Conditions Panel Starts -->
				<!-- Conditions Panel Ends -->
				<!-- Total Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Total
							</h3>
						</div>
						<div class="panel-body">
							<dl class="dl-horizontal">
								<!-- <dt>Coupon Discount :</dt> -->
<!-- 								<dd>$-25.00</dd> -->
								<dt>Subtotal :</dt>
								<dd id="value-subtotal">$0.00</dd>
<!-- 								<dt>Payment Fee :</dt>
								<dd>$10.00</dd> -->
<!-- 								<dt>Shipment Fee :</dt>
								<dd>$15.00</dd> -->
<!-- 								<dt>Tax Total :</dt>
								<dd>$315.00</dd> -->
							</dl>
							<hr />
							<dl class="dl-horizontal total">
								<dt>Total :</dt>
								<dd id="value-total">$0.00</dd>
							</dl>
							<hr />
							<div class="text-uppercase clearfix">
									<input type="button" title="Update" class="btn btn-default pull-left" onClick="return limpiarCampo()" value="Limpiar">
									</input>
								<!-- 	<span class="visible-xs">Confirmar Transacción</span> -->
									<input type="submit" title="Update" class="btn btn-default pull-right" value="Confirmar Transaccion">
									<!-- <?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control','type'=>'hidden')); ?> -->
									</input>
							</div>
						</div>
					</div>
				<!-- Total Panel Ends -->
				</div>
			<!-- Discount & Conditions Blocks Ends -->
			</div>
		</section>
	<!-- Shipping Section Ends -->
	</div>
<!-- Main Container Ends -->
<!-- Footer Section Starts -->

<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>	
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-hover-dropdown.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">

var planComprado = 0;


function setPlanPayment(valueIn){
	parseFloat(valueIn);
	document.getElementById("value-total").innerHTML = "$"+valueIn;
	document.getElementById("value-subtotal").innerHTML = "$"+valueIn;
	$('#PaymentPrice').attr("value" , valueIn); 
	console.log(valueIn);
}
	
// function setTotalP1(){
// 	var ElTotal = "15.00";
// 	document.getElementById("value-total").innerHTML = "$"+ElTotal;
// 	document.getElementById("value-subtotal").innerHTML = "$"+ElTotal;
// //	var htmlString = '<?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control')); ?>';
// $('#PaymentPrice').attr("value" , "15"); 
// //	document.getElementById("pago").innerHTML = htmlString;
// 	planComprado = parseFloat(ElTotal);
// }

// function setTotalP2(){
// 	var ElTotal = "27.00";
// 	document.getElementById("value-total").innerHTML = "$"+ElTotal;
// 	document.getElementById("value-subtotal").innerHTML = "$"+ElTotal;
	
// 	planComprado = parseFloat(ElTotal);
// }
// function setTotalP3(){
// 	document.getElementById("pago").innerHTML = "";
// 	var ElTotal = "200.00";
// 	document.getElementById("value-total").innerHTML = "$"+ElTotal;
// 	document.getElementById("value-subtotal").innerHTML = "$"+ElTotal;
// 	var htmlString = '<?php echo $this->Form->input('price',array('div'=>false,'label'=>false,'class'=>'form-control')); ?>';
// 	document.getElementById("pago").innerHTML = htmlString;
// 	planComprado = parseFloat(ElTotal);
// 	console.log(htmlString);
// }

// function limpiarCampo(){
// 	document.getElementById("value-total").innerHTML = "$"+"0.00";
// 	document.getElementById("value-subtotal").innerHTML = "$"+"0.00";
// 	document.getElementById("pago").innerHTML = " ";
// 	planComprado = parseFloat(0);
// }

</script>

</body>
</html>