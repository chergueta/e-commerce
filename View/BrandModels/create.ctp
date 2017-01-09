<div class="main-container container">
	<h2 class="main-heading text-center">
		Agregar Modelo
	</h2>
	<section class="login-area">
    <?php echo $this->Form->create('BrandModel'); ?>
		<div class="row">
			<div class="col-sm-6" style="margin: 0 auto; float:none;">
				<div class="panel panel-smart">
					<div class="panel-body">

            <div class="form-group">
              <label>Nombre</label>
              <?php echo $this->Form->input("name" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Nombre"))?>
            </div>
            <div class="form-group">
              <label>Marca</label>
              <?php echo $this->Form->input("brand_id" ,array('type'=> 'select', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Nombre", 'options' => $brands))?>
            </div>
            <div class="form-group">
              <label>Descripción</label>
              <?php echo $this->Form->input("description" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Nombre"))?>
            </div>
              <div class="form-group">
                <label>Año</label>
                <?php echo $this->Form->input("year" ,array('type'=> 'text', 'label' => false,'div'=>false, 'class' => 'form-control', 'placeholder' => "Marca"))?>
              </div>
          </div>
				</div>
			</div>
			<div class="col-sm-6">
			</div>
		</div>
    <div class="col-sm-12">
      <div class="panel panel-smart">
        <div class="panel-heading" style="text-align: center;">
          <button type="submit" class="btn btn-success">Guardar Modelo</button>
          <button type="button" class="btn btn-warning">Borrar Cambios</button>
          <button type="button" class="btn btn-danger">Cancelar</button>
        </div>
      </div>
    </div>
    <?php echo $this->Form->end(); ?>  
	</section>
</div>
<script type="text/javascript">

</script>