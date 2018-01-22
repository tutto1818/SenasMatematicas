<div class="card-panel colorBase center">
	<span class="parrafo white-text">
		Comentarios
	</span>
</div>

<div class="card-panel">
<table class="striped">
	<tbody>
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<tr>
			<th >Usuario: <?php echo $datos[$i]['usuario'] ?></th>
		</tr>
		<tr>
			<td><?php echo $datos[$i]['comentario']; ?><br><input type="date" disabled value="<?php echo $datos[$i]['fecha_publicacion']; ?>"></td>
		</tr>
		<?php } ?>
	</tbody>
</table>	
</div>
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
			$atras = $inicio - 2;
		?>
<a href="<?php echo Link::deruta(); ?>teoria/<?php echo $metodo; ?>/<?php echo $atras; ?>" class="btn-floating pulse colorAlterno" title="Atrás">
			<i class="material-icons">keyboard_arrow_left</i>
</a>
		<?php
		}

		 ?>
	</div>

	<div class="col s4 m4 l4 center"><br>
		<a title="Agrega un nuevo comentario" class="btn-floating green">
			<i class="material-icons">add</i>
		</a>
	</div>

	<div class="col s4 m4 l4 center"><br>
				<?php 
		if(count($datos) == 2)
		{
			$siguiente = $inicio + 2;
		?>
<a href="<?php echo Link::deruta(); ?>teoria/<?php echo $metodo; ?>/<?php echo $siguiente; ?>" class="btn-floating pulse colorAlterno" title="Siguiente">
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
	</div>
</div>
<?php echo $inicio; ?>

