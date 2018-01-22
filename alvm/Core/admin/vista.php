<div class="container">
	<div class="row">
		<div class="col s12 m12 l12 center">
			<h5>Bienvenido <?php echo $_SESSION['usuario']; ?></h5>
		</div>
		<div class="col s8 m8 l8">
			<div class="row">
				<div class="card-panel colorBase center">
					<span class="white-text">Administradores</span>
				</div>
				<div class="card-panel">
					<?php $admin->administradores(); ?>
				</div>

				<div class="card-panel colorBase">
					<span class="white-text">Temas</span>
				</div>
				<div class="card-panel">
					<?php $admin->temas(); ?>
				</div>
			</div>
		</div>
		<div class="col s4 m4 l4">
			<div class="row">
				<div class="card-panel colorAlterno center">
					<span class="white-text">PNF</span>
				</div>
				<div class="card-panel">
					<?php $admin->pnf(); ?>
				</div>
			</div>
		</div>
	</div>
</div>