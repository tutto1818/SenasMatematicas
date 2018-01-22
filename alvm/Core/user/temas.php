<?php for($i=0;$i<count($datos);$i++){ ?>
<div class="col  s6 m6 l6">
	<div class="card-panel colorBase center">
		<span class="white-text parrafo">
			<a title=" Contenidos de <?php echo $datos[$i]['tema']; ?>" href="<?php echo Link::deruta(); ?>contenidos/<?php  Link::clean_Url($datos[$i]['tema']); ?>" class="white-text"><?php echo $datos[$i]['tema']; ?></a>
		</span>
	</div>
	<div class="card-panel center">
		<p class="parrafo">
			<?php echo $datos[$i]['descripcion']; ?>
		</p>
	</div>
</div>
<?php } ?>