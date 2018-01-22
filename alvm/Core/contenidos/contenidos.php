<!-- <div class="container"> -->
	<div class="row">
		<div class="col s12 m12 l12">
			<h5>Tabla de contenidos del tema: <?php echo $datos[0]['tema']; ?></h5>
		</div>
		<div class="col s12 m12 l12">
			<table class="striped">
				<thead>
					<tr>
						<th>Contenidos</th>
						<?php if($_SESSION['rol'] == 'Administrador'){; ?>
						<th>Status</th><th class="center">Editar</th><th class="center">Eliminar</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php for($i=0;$i<count($datos);$i++){ ?>
					<tr>
						<td><a href="<?php echo Link::deruta(); ?>teoria/<?php echo $datos[$i]['id_cc']; ?>">
							<?php echo $datos[$i]['titulo']; ?>
							</a>
						</td>
					<?php if($_SESSION['rol'] == 'Administrador'){; ?>
						<td>
							<a href="<?php echo Link::deruta(); ?>status/contenidos/<?php echo $datos[$i]['id_cc']; ?>">
								<?php echo $datos[$i]['status']; ?>
							</a>
						</td>
						<td class="center">
							<a href="<?php echo Link::deruta(); ?>editar/contenido/<?php echo $datos[$i]['id_cc']; ?>">
								<i class="material-icons">
									edit
								</i>
							</a>
						</td>
						<td class="center">
							<a href="<?php echo Link::deruta(); ?>eliminar/contenido/<?php echo $datos[$i]['id_cc']; ?>">
								<i class="material-icons">
									delete
								</i>
							</a>
						</td>
						<?php } ?>
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
			$atras = $inicio - 5;
		?>
<a href="<?php echo Link::deruta(); ?>contenidos/<?php echo $metodo; ?>/<?php echo $atras; ?>" class="btn-floating pulse colorAlterno" title="Atrás">
			<i class="material-icons">keyboard_arrow_left</i>
</a>
		<?php
		}

		 ?>
	</div>

	<div class="col s4 m4 l4 center"><br>
		<?php if($_SESSION['rol'] == 'Administrador'){ ?>
		<a title="Agrega un nuevo contenido" href="<?php echo Link::deruta(); ?>agregar/contenido" class="btn-floating green">
			<i class="material-icons">add</i>
		</a>
		<?php } ?>
	</div>

	<div class="col s4 m4 l4 center"><br>
				<?php 
		if(count($datos) == 5)
		{
			$siguiente = $inicio + 5;
		?>
<a href="<?php echo Link::deruta(); ?>contenidos/<?php echo $metodo; ?>/<?php echo $siguiente; ?>" class="btn-floating pulse colorAlterno" title="Siguiente">
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

