<table class="striped">
	<thead>
		<tr>
			<th>Programas Nacionales de Formación</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<tr>
			<td><?php echo $datos[$i]['pnf']; ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<div class="row">
	<div class="col s12 center"><br>
		<a title='Ingresa aqui y visualiza las opciones de los Programas Nacionales de Formación' href="<?php echo Link::deruta(); ?>pnf" class="btn-floating pulse colorBase">
			<i class="material-icons">
				menu
			</i>
		</a>
	</div>
</div>