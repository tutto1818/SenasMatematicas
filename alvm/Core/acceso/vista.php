<div class="container">
	<div class="row">
		<div class="col s12 m12 l12 center">
			<h5>
				<?php $acceso->titulo(); ?>
			</h5>
		</div>
		<div class="col s12 m12 l12"><br><br>
			<?php $acceso->Controller(); ?>
		</div>
	</div>
</div>



<?php 
$argumento = $acceso->argumento();
if(isset($argumento))
{
	switch ($argumento) {
		case 'empty':
			?>
<script type="text/javascript">
	alert('Campos Vacios, verifique que sus datos esten completos');
</script>
			<?php 
			break;
		case 'msj':
			?>
<script type="text/javascript">
	alert('No existen usuarios registrados con esos datos.');
</script>
			<?php 
			break;
		case 'ur':
			?>
<script type="text/javascript">
	alert('Usuario no disponible, existe alguien más con ese nombre de usuario.');
</script>
			<?php 
			break;
		case 'cr':
			?>
<script type="text/javascript">
	alert('Alguno de sus datos coinciden con los de un usuario que ya se encuentra registrado.');
</script>
			<?php 
			break;
		case 'ad':
			?>
<script type="text/javascript">
	alert('Acceso denegado, sus datos no coinciden con alguno existente en nuestra base de datos, verifique los mismos e intentelo nuevamente.');
</script>
			<?php 
			break;
		
		default:
			# code...
			break;
	}
}
 ?>