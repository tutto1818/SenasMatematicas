<table class="striped">
	<thead>
		<tr>
			<th>Temas</th>
		</tr>
	</thead>
	<tbody>
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<tr>
			<td><a title="Ingresa a los contenidos del tema <?php echo $datos[$i]['tema']; ?>" href="<?php echo Link::deruta(); ?>contenidos/<?php echo Link::clean_Url($datos[$i]['tema']); ?>"><?php echo $datos[$i]['tema']; ?></a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
