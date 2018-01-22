<form class="form row" name="form" method="post" id="form">
	<fieldset>
		<div class="input-field col s12 center">
			<span id="msj"></span>
		</div>
	<div class="input-field col s4">
		<i class="material-icons prefix">question_answer</i>
		<label>Lugar de nacimiento de la madre</label>
		<input type="text" name="preg1" id="u">
	</div>
	<div class="input-field col s4">
		<i class="material-icons prefix">question_answer</i>
		<label>Nombre de su primer colegio</label>
		<input type="text" name="preg2" id="d">
	</div>
	<div class="input-field col s4">
		<i class="material-icons prefix">question_answer</i>
		<label>Nombre de su mascota</label>
		<input type="text" name="preg3" id="t">
	</div>
	
	<div class="input-field col s6 offset-s3">
		<i class="material-icons prefix">mail</i>
		<label>Correo Electronico</label>
		<input type="email" name="correo" id="correo">
	</div>

	</fieldset>
	<div class="input-field col s6 center offset-s3">
		
		<input type="hidden" name="grabar" value="si">
		<a href="#" onclick="validar()" class="btn-floating btn-large waves-effect waves-light colorBase"><i class="material-icons">send</i></a>
	</div>
</form>

<script type="text/javascript">
	function validar()
	{
		$(document).ready(function(){

			var preg1 = document.getElementById('u'); 
			var preg2 = document.getElementById('d');
			var preg3 = document.getElementById('t');
			var correo = document.getElementById('correo');

			if(preg1.value == ''){
				$('#msj').text('Debe completar la pregunta nro 1.');
				$('#u').reset();
				$('#u').focus();
				return false;
			}else if(preg2.value == ''){
				$('#msj').text('Debe completar la pregunta nro 2.');
				$('#d').reset();
				$('#d').focus();
				return false;
			}else if(preg3.value == ''){
				$('#msj').text('Debe completar la pregunta nro 3.');
				$('#t').reset();
				$('#t').focus();
				return false;
			}else if(correo.value == ''){
				$('#msj').text('Debe completar el correo.');
				$('#correo').reset();
				$('#correo').focus();
				return false;
			}else{
				$('#form').submit();
			}

		});
	}
</script>