<table class="striped">
	<?php for($i=0;$i<count($datos);$i++){  ?>
		<tr>
			<th>Nombre</th><td><?php echo $datos[$i]['nombre']; ?></td>
		</tr>
		<tr>
			<th>Apellido</th><td><?php echo $datos[$i]['apellido']; ?></td>
		</tr>
		<tr>
			<th>Correo</th><td><?php echo $datos[$i]['correo']; ?></td>
		</tr>
		<tr>
			<th>Carnet</th><td><?php echo $datos[$i]['carnet']; ?></td>
		</tr>
		<tr>
			<th>Usuario</th><td><?php echo $datos[$i]['usuario']; ?></td>
		</tr>
		<tr>
			<th>Status</th><td><?php echo $datos[$i]['status']; ?></td>
		</tr>
		<tr>
			<th>Genero</th><td><?php echo $datos[$i]['genero']; ?></td>
		</tr>
		<tr>
			<th>PNF</th><td><?php echo $datos[$i]['pnf']; ?></td>
		</tr>
		<tr>
			<th>Turno</th><td><?php echo $datos[$i]['turno']; ?></td>
		</tr>
	<?php } ?>
</table>
<div class="row">
	<div class="col s3 center"><br>
		<a title="Editar los datos de mi cuenta" href="<?php echo Link::deruta(); ?>perfil/editar" class="btn-floating pulse colorAlterno"><i class="material-icons">edit</i></a>
	</div>
	<div class="col s3 center"><br>
		<a title="Cambiar la seguridad de mi cuenta de usuario" href="<?php echo Link::deruta(); ?>perfil/editclave" class="btn-floating pulse red"><i class="material-icons">vpn_key</i></a>
	</div>
	<div class="col s3 center"><br>
		<a title="Activar/Desactivar mi cuenta de usuario" href="<?php echo Link::deruta(); ?>status/usuarios/<?php echo $_SESSION['id']; ?>" class="btn-floating pulse red"><i class="material-icons">power_settings_new</i></a>
	</div>
	<div class="col s3 center"><br>
		<a title="Eliminar mi cuenta de usuario" href="#" onclick="eliminar('<?php echo Link::deruta(); ?>perfil/delete ?>','<?php echo $datos[0]['nombre'] ?>')" class="btn-floating pulse colorAlterno"><i class="material-icons">delete</i></a>
	</div>
</div>

<script type="text/javascript">
	function eliminar(ruta,nombre){
		if(confirm('¿Realmente vas a eliminar tu cuenta ' + nombre + '?')){
			window.location = ruta;
		}
	}
</script>