<table class="striped">
	<thead>
		<tr>
			<th>Programas Nacionales de Formación</th><th class="center">Editar</th><th class="center">Eliminar</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<tr>
			<td><?php echo $datos[$i]['pnf']; ?></td>
			<td class="center">
				<a href="<?php echo Link::deruta(); ?>pnf/editar/<?php echo $datos[$i]['id_p']; ?>">
					<i class="material-icons">
						edit
					</i>
				</a>
			</td>
			<td class="center">
				<a href="" onclick="eliminar('<?php echo Link::deruta(); ?>pnf/editar/<?php echo $datos[$i]['id_p']; ?>','<?php echo $datos[$i]['pnf']; ?>')">
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
	<div class="col	s12 center">
		<a href="<?php echo Link::deruta(); ?>pnf/agregar" class="btn-floating pulse colorBase">
			<i class="material-icons">
				add
			</i>
		</a>
	</div>
</div>

<script type="text/javascript">
	function eliminar(ruta,pnf){
		if(confirm('Usted va eliminar el PNF en ' + pnf + ', ¿está seguro de eso?')){
			window.location = ruta;
		}
	}
</script>