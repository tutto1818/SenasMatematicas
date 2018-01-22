<table class="striped">
	<thead>
		<tr>
			<th>Tema</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<tr>
			<td><a title="Descripción del Tema <?php echo $datos[$i]['tema']; ?>" href="<?php echo Link::deruta(); ?>tema/<?php Link::clean_Url($datos[$i]['tema']) ?>"><?php echo $datos[$i]['tema']; ?></a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
