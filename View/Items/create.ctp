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
                <?php echo $this->Form->input("name" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Nombre"))?>
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
                  <?php echo $this->Form->input("brand" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Marca"))?>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Precio</label>
                  <?php echo $this->Form->input("model" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Modelo"))?>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label>Ex-precio</label>
                  <?php echo $this->Form->input("brand" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Marca"))?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Sexo</label>
                  <?php echo $this->Form->input("model" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Modelo"))?>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Sale</label>
                  <?php echo $this->Form->input("brand" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Marca"))?>
                </div>
              </div>
              <div class="form-group">
                <label>Descripcion</label>
                <?php echo $this->Form->input("name" ,array('type'=> 'textarea', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Nombre"))?>
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

						</div>
					</div>
				<!-- Account Panel Ends -->
				</div>
			</div>
      <div class="col-sm-12">
        <div class="panel panel-smart">
          <div class="panel-heading" style="text-align: center;">
            <button type="button" class="btn btn-success">Guardar Item</button>
            <button type="button" class="btn btn-warning">Borrar Cambios</button>
            <button type="button" class="btn btn-danger">Cancelar</button>
          </div>
        </div>
      </div>
		</section>
	<!-- Login Form Section Ends -->
	</div>
<!-- Main Container Ends -->
