<?php $this->log($myItems); ?>
<div class="main-container container">
<!-- Main Heading Starts -->
  <h2 class="main-heading text-center">
    Mis Items
  </h2>
  <div class="table-responsive compare-table" style="background: transparent;">
  	<a href="items/create" style="float:right;" class="btn btn-success">Crear nuevo</a>
		<table class="table table-bordered" style="background-color: white;">
			<thead>
				<tr>
					<td>Imagen</td>
					<td>Nombre</td>
					<td>Precio</td>
					<td>Modelo</td>
					<td>Marca</td>
					<td>Cantidad</td>
					<td>Valoracion</td>
          			<td>Opciones</td>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($myItems as $key => $value) { ?>
				<tr>
					<td>
						<img src="images/product-images/thumb1.jpg" alt="image" title="image" class="img-thumbnail">
					</td>
					<td class="name">
						<a href="product.html"><?php echo $value['Item']['name']; ?></a>
					</td>
					<td>
						<?php echo $value['Item']['price']; ?>$
					</td>
					<td>
						<?php echo $value['Item']['model_id']; ?>
					</td>
					<td>
					<?php echo $value['Item']['brand_id']; ?>
					</td>
					<td>
						<?php
							if($value['Item']['availability'] > 0){
								echo "<span class='label label-success'>Disponible: ".$value['Item']['availability']."</span>";
							}
							else{
								echo "<span class='label label-danger'>Disponible: 0</span>";
							}
						?>
					</td>
					<td class="rating">
						<?php
							for ($i=1; $i < 6; $i++) { 
								if($value['Item']['stars'] >= $i){
									echo '<i class="fa fa-star"></i>';
								}
								else{
									echo '<i class="fa fa-star-o"></i>';
								}
							}
						?>
					</td>
					<td>
						<i class="fa fa-pencil"></i>
						<i class="fa fa-eye"></i>
						<i class="fa fa-trash"></i>
						<i class="fa fa-toggle-off"></i>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</div>
