<table class="striped">
	<thead>
		<tr>
			<th>Nombre</th><th class="center">Usuario</th><th class="center">Status</th><th class="center">Editar</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i=0;$i<count($datos);$i++){  ?>
		<tr>
			<td><?php echo $datos[$i]['nombre'] . " " . $datos[$i]['apellido']; ?></td>
			<td class="center"><a href="<?php echo Link::deruta(); ?>usuarios/individual/<?php echo $datos[$i]['id_u']; ?>"><?php echo $datos[$i]['usuario']; ?></a></td>
			<td class="center">
				<a href="<?php echo Link::deruta(); ?>status/usuarios/<?php echo $datos[$i]['id_u']; ?>">
					<?php 
					if($datos[$i]['id_status'] == 1){$cambio = 'Activo';}else{$cambio = 'Inactivo';}
					echo $cambio; ?>
					</a>
				</td>
			<td class="center">
				<a href="<?php echo Link::deruta(); ?>usuarios/individual/<?php echo $datos[$i]['id_u']; ?>">
					<i class="material-icons">edit</i>
				</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<div class="row">
	<div class="col s4 m4 l4 center"><br>
		<?php 
		if($inicio == 0)
		{
		?>
<a class="btn-floating colorBase" title="Atrás">
			<i class="material-icons">keyboard_arrow_left</i>
</a>
		<?php
		}
		else
		{
			$atras = $inicio - 3;
		?>
<a href="<?php echo Link::deruta(); ?>usuarios/general/<?php echo $atras; ?>" class="btn-floating pulse colorAlterno" title="Atrás">
			<i class="material-icons">keyboard_arrow_left</i>
</a>
		<?php
		}

		 ?>
	</div>

	<div class="col s4 m4 l4"><br></div>

	<div class="col s4 m4 l4 center"><br>
				<?php 
		if(count($datos) == 3)
		{
			$siguiente = $inicio + 3;
		?>
<a href="<?php echo Link::deruta(); ?>usuarios/general/<?php echo $siguiente; ?>" class="btn-floating pulse colorAlterno" title="Siguiente">
			<i class="material-icons">keyboard_arrow_right</i>
</a>
		<?php
		}
		else
		{
		?>
<a class="btn-floating colorBase" title="Siguiente">
			<i class="material-icons">keyboard_arrow_right</i>
</a>
		<?php
		}

		 ?>
	</div>

</div>