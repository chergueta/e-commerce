<!-- Breadcrumb Ends -->
<!-- Main Container Starts -->
	<div class="main-container container">
	<!-- Main Heading Starts -->
		<h2 class="main-heading text-center">
			Agregar Modelo
		</h2>
	<!-- Main Heading Ends -->
	<!-- Login Form Section Starts -->
		<section class="login-area">
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


              <div class="col-sm-6">
                <div class="form-group">
                  <label>Año</label>
                  <?php echo $this->Form->input("year" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Marca"))?>
                </div>
              </div>
            </div>
					</div>
				<!-- Login Panel Ends -->
				</div>
				<div class="col-sm-6">

				<!-- Account Panel Starts -->

				<!-- Account Panel Ends -->
				</div>
			</div>
      <div class="col-sm-12">
        <div class="panel panel-smart">
          <div class="panel-heading" style="text-align: center;">
            <button type="button" class="btn btn-success">Guardar Modelo</button>
            <button type="button" class="btn btn-warning">Borrar Cambios</button>
            <button type="button" class="btn btn-danger">Cancelar</button>
          </div>
        </div>
      </div>
		</section>
	<!-- Login Form Section Ends -->
	</div>
<!-- Main Container Ends -->
<script type="text/javascript">

</script>