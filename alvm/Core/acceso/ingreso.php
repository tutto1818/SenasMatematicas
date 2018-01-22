<fieldset>
<form name="form" method="post" class="form row" id="form">
	<div class="input-field col s6">
		<i class="material-icons prefix">people_account</i>
		<label>Usuario</label>
		<input type="text" name="usuario" id="usuario" placeholder="Usuario">
		<span id="msjn"></span>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">vpn_key</i>
		<label>Clave</label>
		<input type="password" name="clave" id="clave" placeholder="Clave o Contaseña">
		<span id="msjc"></span>
	</div>
</fieldset>
	<div class="input-field col s6 offset-s3 center"><br>
		<input type="hidden" name="grabar" value="si">
		<a href="#" onclick="javascript:validar()" class="btn-floating pulse colorBase">
			<i class="material-icons">
				send
			</i>
		</a><br><br>
		<a href="<?php echo Link::deruta(); ?>acceso/recuperacion">¿Olvidaste la contraseña?, ingresa aquí</a>
	</div>
</form>

<script type="text/javascript">
	function validar(){
		$(document).ready(function(){

		var usuario = document.getElementById('usuario');
		var clave = document.getElementById('clave');
		var form = document.getElementById('form');

		if(usuario.value == '')
		{
			$('#msjn').text('Falta completar el campo usuario');
			usuario.focus();
			form.reset();
		}
		else if(clave.value == '')
		{
			$('#msjc').text('Falta completar el campo clave');
			clave.focus();
			form.reset();
		}
		else
		{
			form.submit();
		}

	});
	}
</script>