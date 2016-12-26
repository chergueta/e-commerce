 	<!--Form Open-->
  <br />
      <article class="card shadow-1">
        <?php echo $this->Form->create('User', array('action' => 'addUser')); ?>
          <fieldset>
            <legend style="text-align: center;"><h2>Registrar</h2></legend>
            <div class="margenesHorizontales">
                <div>
					<div class="col-md-6">
            			<div class="form-group">
							<label>Correo Electrónico</label>
			                <?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Correo Electrónico" ))?>
						</div>
            		</div>
                </div>
            	<div>
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Tipo</label>
			                <?php echo $this->Form->input("user_group_id" ,array('type' => 'select', 'label' => false,'div' => false,'class'=>"form-control" ))?>
			                </select>
						</div>
            		</div>

            	<div>
            		<div class="col-md-6">
            			<div class="form-group">
			                <label>Nombre</label>
			                <?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Nombre" ))?>
						</div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Apellido</label>
			                <?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Apellido" ))?>
						</div>
            		</div>
            		<div style="clear:both;"></div>
            	</div>
            	<div>
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Télefono</label>
			                <?php echo $this->Form->input("phone" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Télefono" ))?>
						</div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
			                <label>Móvil</label>
			                <?php echo $this->Form->input("movil" ,array('label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Móvil" ))?>
						</div>
            		</div>
            		<div style="clear:both;"></div>
            	</div>
            	<div>
            		<div class="col-md-6">
            			<div class="form-group">
			                <label>Contraseña</label>
			                <?php echo $this->Form->input("password" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Contraseña" ))?>
						</div>
            		</div>
            		<div class="col-md-6">
            			<div class="form-group">
							<label>Repetir contraseña</label>
			                <?php echo $this->Form->input("cpassword" ,array("type"=>"password",'label' => false,'div' => false,'class'=>"form-control","placeholder"=>"Repetir contraseña" ))?>
						</div>
            		</div>
            		<div style="clear:both;"></div>
            	</div>
				<div class="margenesVerticales" style="text-align:right;">
					<input type = "button" class="btn btn-primary" onclick="window.location.href = WEBROOT+'allUsers';" title="regresar" value = "Atr&aacute;s" style="width: 79px;">
					<button class="btn btn-primary">
						Guardar
					</button>
				</div>
			</div>
          </fieldset>
        <?php echo $this->Form->end(); ?>
      </article>
	<!--Form Close-->
