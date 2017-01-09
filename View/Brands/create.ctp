<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
	<div class="main-container container">
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Crear Marca
		</h2>
	<!-- Main Heading Ends -->
	<!-- Login Form Section Starts -->
		<section class="login-area">
      <?php echo $this->Form->create('Brand'); ?>
			<div class="row">
				<div class="col-sm-6">
				<!-- Login Panel Starts -->
					<div class="panel panel-smart">
            <div class="panel-heading">
              <h3 class="panel-title">
                Caracteristicas
              </h3>
            </div>
						<div class="panel-body">

              <div class="form-group">
                <label>Nombre</label>
                <?php echo $this->Form->input("name" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Nombre"))?>
              </div>
              <div class="form-group">
                <label>Descripción</label>
                <?php echo $this->Form->input("description" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Nombre"))?>
              </div>

						</div>
					</div>
				<!-- Login Panel Ends -->
				</div>
				<div class="col-sm-6">

				<!-- Account Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Imagen
							</h3>
						</div>
						<div class="panel-body">

              <div class="col-md-12 zone-dropzone" style="margin:30px 0;">
                <label>Agregue una Imagen</label>
                <div  class="dropzone"  id ="itemImg1"  name="mainFileUploader">
                  <div  class="fallback">
                    <input  name="file"  type="file" />
                  </div>
                </div>
              </div>
              <div id="content_imgs"></div>

						</div>
					</div>
				<!-- Account Panel Ends -->
				</div>
			</div>
      <div class="col-sm-12">
        <div class="panel panel-smart">
          <div class="panel-heading" style="text-align: center;">
            <button type="submit" class="btn btn-success">Guardar Marca</button>
            <button type="button" class="btn btn-warning">Borrar Cambios</button>
            <button type="button" class="btn btn-danger">Cancelar</button>
          </div>
        </div>
      </div>
      <?php echo $this->Form->end(); ?>  
		</section>
	<!-- Login Form Section Ends -->
	</div>
<!-- Main Container Ends -->
<script type="text/javascript">

  var urlUploadFile = WEBROOT+"brands/upload/1";

  $("#itemImg1").dropzone({ url:urlUploadFile, maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
    success:function(data){
      $('#content_imgs').append('<input type="hidden" value='+data.xhr.response+' name="data[Brand][image]">');
      console.log(data.xhr.response);
    }
  });

</script>