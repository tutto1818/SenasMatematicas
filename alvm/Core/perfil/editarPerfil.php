<form class="form row" name="form" method="post">
	<?php for($i=0;$i<count($datos);$i++){ ?>
	<div class="input-field col s6">
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?php echo $datos[$i]['nombre']; ?>">
	</div>
	<div class="input-field col s6">
		<label>Apellido</label>
		<input type="text" name="apellido" value="<?php echo $datos[$i]['apellido']; ?>">
	</div>
	<div class="input-field col s6">
		<label>Correo</label>
		<input type="text" name="correo" value="<?php echo $datos[$i]['correo']; ?>">
	</div>
	<div class="input-field col s6">
		<label>Carnet</label>
		<input type="text" name="carnet" value="<?php echo $datos[$i]['carnet']; ?>">
	</div>
	<div class="input-field col s12">
		<label>Lugar del Nacimiento de la Madre</label>
		<input type="text" name="preg1" value="<?php echo $datos[$i]['preg1']; ?>">
	</div>
	<div class="input-field col s12">
		<label>Nombre del primer colegio</label>
		<input type="text" name="preg2" value="<?php echo $datos[$i]['preg2']; ?>">
	</div>
	<div class="input-field col s12">
		<label>Nombre de la mascota favorita</label>
		<input type="text" name="preg3" value="<?php echo $datos[$i]['preg3']; ?>">
	</div>
	
	<div class="input-field col s6">
		<select name="genero">
			<option>Genero</option>
			<?php for($i=0;$i<count($g);$i++){ ?>
			<option value="<?php echo $g[$i]['id_g']; ?>"><?php echo $g[$i]['genero']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="input-field col s6">
		<select name="turno">
			<option>Turnos</option>
			<?php for($i=0;$i<count($t);$i++){ ?>
			<option value="<?php echo $t[$i]['id_t']; ?>"><?php echo $t[$i]['turno']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="input-field col s6">
		<select name="pnf">
			<option>PNF</option>
			<?php for($i=0;$i<count($p);$i++){ ?>
			<option value="<?php echo $p[$i]['id_p']; ?>"><?php echo $p[$i]['pnf']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="input-field col s12 center">
		
		<input type="hidden" name="grabar" value="si">
		<a title="Salvar los cambios datos de <?php echo $_SESSION['usuario']; ?>" href="#" onclick='document.form.submit()' class="btn-floating pulse colorBarra"><i class="material-icons">send</i></a>
	</div>
	<?php } ?>
</form>