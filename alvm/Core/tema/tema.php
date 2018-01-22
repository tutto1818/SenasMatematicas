<div class="row">
	<div class="col s12 m12 l12">
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<div class="card-panel colorBase center">
			<span class="parrafo white-text"><?php echo $datos[$i]['tema']; ?></span>
		</div>
		<div class="card-panel">
			<center>
				<img class="responsive-img" src="<?php echo $datos[$i]['logo']; ?>">
			</center>
			<br>
			<p class="parrafo">
				<?php echo $datos[$i]['descripcion']; ?>
			</p>
			<p class="parrafo">
				Este tema fue subido por: <a href="<?php echo Link::deruta(); ?>usuarios/individual/<?php echo $datos[$i]['id_u']; ?>"><?php echo $datos[$i]['usuario']; ?></a>.
			</p>

			<p class="parrafo">
				Si deseas vizualizar los contenidos de este tema <a title="Ingresa a los contenidos del tema <?php echo $datos[$i]['tema']; ?>" href="<?php echo Link::deruta(); ?>contenidos/<?php echo Link::clean_Url($datos[$i]['tema']); ?>">ingresa aquí <i class="material-icons">
					local_library
				</i></a>.<br>
			</p>
			<?php } ?>
		</div>
	</div>
</div>

