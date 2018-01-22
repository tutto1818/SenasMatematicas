<?php for($i=0;$i<count($datos);$i++){ ?>
<div class="col s12 m12 l12">
	<div class="col s3 l3 m3">
		<div class="card-panel colorBase center">
			<span class="white-text">
				<h6>Publicaciones Relacionadas</h6>
			</span>
		</div>
		<div class="card-panel">
			<center>
				<img class="responsive-img materialboxed" src="<?php echo $datos[$i]['img1'] ?>"><br>
				<img class="responsive-img materialboxed" src="<?php echo $datos[$i]['img2'] ?>"><br>
				<img class="responsive-img materialboxed" src="<?php echo $datos[$i]['img3'] ?>"><br>
			</center>
		</div>
	</div>
	<div class="col s6 l6 m6">
		
		<div class="card-panel">
			<center>
				<video width="98%" height="98%" controls>
					<source src="<?php echo $datos[$i]['video']; ?>" type="video/mp4">
					<source src="<?php echo $datos[$i]['video']; ?>" type="video/ogg">
								<!--Your browser does not support the video tag.-->
				</video>
			</center>
		</div>

		<div class="card-panel colorBase center">
			<span class="white-text"><h6>Contenido</h6></span>
		</div>
		<div class="card-panel">
			<p class="parrafo">
				<?php echo Teoria::cont($datos[$i]['contenido']); ?>
			</p>
		</div>
	</div>
	<div class="col s3 l3 m3">
		<div class="card-panel colorBase center">
			<span class="white-text"><h6>Mapa Mental</h6></span>
		</div>
		<div class="card-panel">
			<center>
				<img class="responsive-img materialboxed" src="<?php echo $datos[$i]['mapa'] ?>">
			</center>
		</div>

		<div class="card-panel colorBase center">
			<span class="white-text"><h6>Comentarios</h6></span>
		</div>
		<div class="card-panel">
			<table class="striped">
				
			<?php for($i=0;$i<count($comentarios);$i++){ ?>
				<tr>	
					<td><?php echo $comentarios[$i]['usuario']; ?></td>
					<td><?php echo $comentarios[$i]['fecha_publicacion']; ?></td>
					<?php if($comentarios[$i]['usuario'] == $_SESSION['usuario']){

					?>
					<td><a title="Eliminar este comentario" href="<?php echo Link::deruta(); ?>comentario/eliminar/<?php echo $comentarios[$i]['id_c']; ?>">
						<i class="material-icons">delete</i>
					</a></td>
					<?php } ?>
				</tr>
				<tr>
					<td colspan="3"><?php echo $comentarios[$i]['comentario']; ?></td>
				</tr>
				<div class="divider"></div>
			<?php } ?>	
			</table><br>
			<center><a href="<?php echo Link::deruta(); ?>comentario/agregar/<?php echo $metodo; ?>">Agregar comentarios</a></center>
			<div class="row"><br>
				<div class="col s6 m6 l6">
					<center>
						<?php 
						if($inicio == 0)
						{
						?>
						<a title="Anterior" class="btn-floating colorBarra"><i class="material-icons">keyboard_arrow_left</i></a>
						<?php
						}else{
							$anterior = $inicio - 2;
						?>
						<a title="Anterior" class="btn-floating pulse colorBarra" href="<?php echo Link::deruta(); ?>teoria/<?php echo $metodo; ?>/<?php echo $anterior; ?>"><i class="material-icons">keyboard_arrow_left</i></a>
						<?php
						}

						 ?>
					</center>
				</div>

				<div class="col s6 m6 l6">
					<center>
						<?php 
						if(count($comentarios) == 2)
						{
							$siguiente = $inicio + 2;
						?>
						<a title="Siguiente" href="<?php echo Link::deruta(); ?>teoria/<?php echo $metodo; ?>/<?php echo $siguiente; ?>" class="btn-floating colorBarra"><i class="material-icons">keyboard_arrow_right</i></a>
						<?php

						}else{

						?>
						<a title="Siguiente" class="btn-floating pulse colorBarra"><i class="material-icons">keyboard_arrow_right</i></a>
						<?php
						}

						 ?>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>

<script type="text/javascript">
	function paginacion(ruta){
		window.location = ruta;
	}
</script>