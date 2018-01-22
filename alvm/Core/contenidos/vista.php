<div class="container">
	<div class="row">
		<div class="col s4 m4 l4">
			<div class="card-panel colorBase center">
				<a class="white-text" href="<?php echo Link::deruta(); ?>contenidos">
					<span class="white-text">Menu</span>
				</a>
			</div>
			<div class="card-panel">
				<?php $contenidos->temas(); ?>
			</div>
		</div>
		<div class="col s8 m8 l8">
			<div class="card-panel">
				<?php $contenidos->Controller(); ?>
			</div>
		</div>
	</div>
</div>