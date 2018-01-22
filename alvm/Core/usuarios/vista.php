<div class="container">
	<div class="row">
		<div class="col s12 m12 l12"></div>
		<div class="col s4 m4 l4">
			<div class="card-panel colorBase center">
				<span class="white-text">
					Menu
				</span>
			</div>
			<div class="card-panel">
				<table class="striped">
					<thead>
						<tr>
							<th>Listado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><a href="<?php echo Link::deruta(); ?>usuarios/general">Listado general de usuarios</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo Link::deruta(); ?>usuarios/pnf">Listado por PNF</a></td>
						</tr>
						<tr>
							<td><a href="<?php echo Link::deruta(); ?>usuarios/genero">Lista de Genero</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="col s8 m8 l8">
			<div class="card-panel colorBase center">
				<span class="white-text">
					Información
				</span>
			</div>
			<div class="card-panel">
				<?php $usuario->Controller(); ?>
			</div>
		</div>
	</div>
</div>