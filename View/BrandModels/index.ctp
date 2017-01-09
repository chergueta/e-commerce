<div class="main-container container">
<!-- Main Heading Starts -->
  <h2 class="main-heading text-center">
    Modelos
  </h2>
  <div class="table-responsive compare-table" style="background: transparent;">
  	<a href="BrandModels/create" style="float:right;" class="btn btn-success">Crear nuevo</a>
		<table class="table table-bordered" style="background-color: white;">
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
					<tr class="tr<?php echo $value['BrandModel']['id'];?>">
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
				            <!-- <i class="fa fa-eye"></i> -->
			            	<a href="#"><i class="fa fa-trash delete" data-todelete="<?php echo $value['BrandModel']['id'];?>"></i></a>
				        </td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	
	$(document).on("click", ".delete", function() {
    	if (confirm('Are you sure?')) {
    		var ele = $('.tr'+$(this).data('todelete'));
    		$.ajax({
    			url:WEBROOT+'BrandModels/delete/'+$(this).data('todelete'),
    			type: 'GET',
    			success: function(ans){
    				ele.css('display', 'none') ;
    			},
    			error: function(){
    				alert('Error')
    			}
    		})
    	}
	});

</script>