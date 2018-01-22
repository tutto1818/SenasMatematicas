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
	<div class="col s4 center"><br>
		<a title="Editar los datos de la cuenta del usuarios <?php echo $datos[0]['usuario']; ?>" href="<?php echo Link::deruta(); ?>perfil/others/<?php echo $datos[0]['id_u']; ?>" class="btn-floating pulse colorAlterno"><i class="material-icons">edit</i></a>
	</div>
	<div class="col s4 center"><br>
<?php if($_SESSION['id'] == $datos[0]['id_u']){ ?>
		<a title="Activar/Desactivar cuenta del usuario <?php echo $datos[0]['usuario']; ?>" href="<?php echo Link::deruta(); ?>status/usuarios-e/<?php echo $datos[0]['id_u']; ?>" class="btn-floating pulse red"><i class="material-icons">power_settings_new</i></a>
<?php } ?>
	</div>
	<div class="col s4 center"><br>
		<a title="Eliminar cuenta del usuario <?php echo $datos[0]['usuario']; ?>" href="<?php echO Link::deruta(); ?>usuarios/eliminar/<?php echo $datos[0]['id_u']; ?>" class="btn-floating pulse colorAlterno"><i class="material-icons">delete</i></a>
	</div>
</div>