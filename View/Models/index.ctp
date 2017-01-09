<div class="main-container container">
<!-- Main Heading Starts -->
  <h2 class="main-heading text-center">
    Modelos
  </h2>
  <div class="table-responsive compare-table">
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>Nombre</td>
					<td>Marca</td>
					<td>Descripcion</td>
					<td>Año</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($brandModel as $key => $value) { ?>
					<tr>
						<td class="name">
							<?php echo $value['BrandModel']['name']; ?>
						</td>
						<td>
							<?php echo $value['Brand']['name']; ?>
						</td>
						<td>
							<?php echo $value['BrandModel']['description']; ?>
						</td>
				        <td>
				            <i class="fa fa-pencil"></i>
				            <i class="fa fa-eye"></i>
				        	<i class="fa fa-trash"></i>
				        </td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>