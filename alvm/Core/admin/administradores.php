<table class="striped">
	<thead>
		<tr>
			<th>Nombre</th><th>Apellido</th><th>Usuario</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<tr>
			<td><?php echo $datos[$i]['nombre']; ?></td>
			<td><?php echo $datos[$i]['apellido']; ?></td>
			<td><a href="<?php echo Link::deruta(); ?>usuarios/individual/<?php echo $datos[$i]['id_u']; ?>"><?php echo $datos[$i]['usuario']; ?></a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<div class="row">
	<div class="col s12 center"><br>
		<a title='Ingresa aqui y visualiza el listado completo de usuarios' href="<?php echo Link::deruta(); ?>usuarios" class="btn-floating pulse colorBase">
			<i class="material-icons">
				menu
			</i>
		</a>
	</div>
</div>