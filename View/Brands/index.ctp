<div class="main-container container">
<!-- Main Heading Starts -->
  	<h2 class="main-heading text-center">
    	Marcas
  	</h2>
  	<div class="table-responsive compare-table" style="background: transparent;">
  		<a href="brands/create" style="float:right;" class="btn btn-success">Crear nuevo</a>
		<table class="table table-bordered" style="background-color: white;">
			<thead>
				<tr>
					<td>Imagen</td>
					<td>Nombre</td>
					<td>Descripcion</td>
          			<td>Opciones</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($brands as $key => $value) { ?>
					<tr class="tr<?php echo $value['Brand']['id'];?>">
						<td>
							<img style="max-width: 100px;" src="<?php echo $this->webroot.'files/'.$value['Brand']['image']; ?>" alt="image" title="image" class="img-thumbnail">
						</td>
						<td class="name">
							<?php echo $value['Brand']['name']; ?>
						</td>
						<td>
							<?php echo $value['Brand']['description']; ?>
						</td>
			          	<td>
			            	<a href="<?php echo 'brands/edit/'.$value['Brand']['id']; ?>"><i class="fa fa-pencil"></i></a>
			            	<a href="#"><i class="fa fa-trash delete" data-todelete="<?php echo $value['Brand']['id'];?>"></i></a>
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
    			url:WEBROOT+'brands/delete/'+$(this).data('todelete'),
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