<table class="striped">
	<thead>
		<tr>
			<th>Tema</th><th class="center">Editar</th><th class="center">Eliminar</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<tr>
			<td><a title="Descripción del Tema <?php echo $datos[$i]['tema']; ?>" href="<?php echo Link::deruta(); ?>tema/<?php Link::clean_Url($datos[$i]['tema']) ?>"><?php echo $datos[$i]['tema']; ?></a></td>
			<td class="center">
				<a  title="Pulse aquí para editar el tema <?php echo $datos[$i]['tema']; ?>" href="<?php echo Link::deruta(); ?>tema/editar/<?php echo $datos[$i]['id_tt']; ?>">
					<i class="material-icons">
						edit
					</i>
				</a>
			</td>
			<td class="center">
				<a title="Pulse aquí para eliminar el tema <?php echo $datos[$i]['tema']; ?>" href="<?php echo Link::deruta(); ?>tema/eliminar/<?php echo $datos[$i]['id_tt']; ?>">
					<i class="material-icons">
						delete
					</i>
				</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<div class="row">
	<div class="col s12 m12 l12 center"><br>
		<a title='Agrega un nuevo tema pulsando aquí' href="<?php echo Link::deruta(); ?>tema/agregar" class="btn-floating pulse colorBase">
			<i class="material-icons">
				add
			</i>
		</a>
	</div>
</div>
