<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
	<div class="main-container container">
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Crear Item
		</h2>
	<!-- Main Heading Ends -->
	<!-- Login Form Section Starts -->
		<section class="login-area">
      <?php echo $this->Form->create('Item'); ?>
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
                <label>Departamento</label>
                <?php echo $this->Form->input("deparment" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Departamento"))?>
              </div>


              <div class="col-sm-6">
                <div class="form-group">
                  <label>Marca</label>
                  <?php echo $this->Form->input("brand" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Marca"))?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Modelo</label>
                  <?php echo $this->Form->input("model" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Modelo"))?>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="form-group">
                  <label>Disponible</label>
                  <?php echo $this->Form->input("availability" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Disponible"))?>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Precio</label>
                  <?php echo $this->Form->input("price" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Precio"))?>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Ex-precio</label>
                  <?php echo $this->Form->input("exprice" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Ex-precio"))?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Sexo</label>
                  <?php echo $this->Form->input("sex" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Sexo"))?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Sale</label>
                  <?php echo $this->Form->input("sales" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Sale"))?>
                </div>
              </div>
              <div class="form-group">
                <label>Descripcion</label>
                <?php echo $this->Form->input("description" ,array('type'=> 'textarea', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Descripcion"))?>
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
								Imagenes
							</h3>
						</div>
						<div class="panel-body">

              <div class="col-md-6 zone-dropzone" style="">
                <label>Imagen 1</label>
                <div style="text-align: center;" class="dropzone"  id ="itemImg1"  name="mainFileUploader">
                  <div  class="fallback">
                    <input  name="file"  type="file" />
                  </div>
                </div>
              </div>
              <div id="content_imgs1"></div>

              <div class="col-md-6 zone-dropzone" style="">
                <label>Imagen 2</label>
                <div style="text-align: center;" class="dropzone"  id ="itemImg2"  name="mainFileUploader">
                  <div  class="fallback">
                    <input  name="file"  type="file" />
                  </div>
                </div>
              </div>
              <div id="content_imgs2"></div>

              <div class="col-md-6 zone-dropzone" style="">
                <label>Imagen 3</label>
                <div style="text-align: center;" class="dropzone"  id ="itemImg3"  name="mainFileUploader">
                  <div  class="fallback">
                    <input  name="file"  type="file" />
                  </div>
                </div>
              </div>
              <div id="content_imgs3"></div>

              <div class="col-md-6 zone-dropzone" style="">
                <label>Imagen 4</label>
                <div style="text-align: center;" class="dropzone"  id ="itemImg4"  name="mainFileUploader">
                  <div  class="fallback">
                    <input  name="file"  type="file" />
                  </div>
                </div>
              </div>
              <div id="content_imgs4"></div>


						</div>
					</div>
				<!-- Account Panel Ends -->
				</div>
			</div>
      <div class="col-sm-12">
        <div class="panel panel-smart">
          <div class="panel-heading" style="text-align: center;">
            <button type="submit" class="btn btn-success">Guardar Item</button>
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

  var urlUploadFile = WEBROOT+"items/upload/1";

  $("#itemImg1").dropzone({ url:urlUploadFile, maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
    success:function(data){
      console.log(data);
      $('#content_imgs1').append('<input type="hidden" class="form-control" value='+data.xhr.response+' name="data[Item][image_1]">');
    },
    removedfile: function(file) {
      $('#content_imgs1').html('');
      var _ref;
      return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
    }
  });


  $("#itemImg2").dropzone({ url:urlUploadFile, maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
    success:function(data){
      $('#content_imgs2').append('<input type="hidden" class="form-control" value='+data.xhr.response+' name="data[Item][image_2]">');
    },
    removedfile: function(file) {
      $('#content_imgs2').html('');
      var _ref;
      return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
    }
  });


  $("#itemImg3").dropzone({ url:urlUploadFile, maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
    success:function(data){
      $('#content_imgs3').append('<input type="hidden" class="form-control" value='+data.xhr.response+' name="data[Item][image_3]">');
    },
    removedfile: function(file) {
      $('#content_imgs3').html('');
      var _ref;
      return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
    }
  });


  $("#itemImg4").dropzone({ url:urlUploadFile, maxFilesize: 10, dictDefaultMessage: '<div class="col-xs-12 text-center" style="padding-bottom:20px"><img src="<?php echo $this->webroot; ?>img/file.png" alt="" /></div><p class="dropzone-add-message">Drag and drop the files you want to upload or <a  class="add-files">click here to browse</a></p>',
    success:function(data){
      $('#content_imgs4').append('<input type="hidden" class="form-control" value='+data.xhr.response+' name="data[Item][image_4]">');
    },
    removedfile: function(file) {
      $('#content_imgs4').html('');
      var _ref;
      return (_ref = file.previewElement) != null ? _ref.parentNode.removeChild(file.previewElement) : void 0;
    }
  });

  
   

</script>
<style type="text/css">
  .dropzone .dz-preview{
    margin: 1px !important;
  }

</style>