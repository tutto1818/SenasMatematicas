<form name="form" method="post" class="form row" id="form">
	<div class="input-field col s12 center">
		<span id="msj"></span>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
		
		<input type="text" name="nombre" id="nombre" placeholder="Nombre">
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">account_circle</i>
		<input type="text" name="apellido" id="apellido" placeholder="Apellido">
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">mail</i>
		<label for="correo">Correo electronico</label>
		<input type="email" name="correo" id="correo">
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">assignment_ind</i>
		<label for="carnet">Carnet</label>
		<input type="text" name="carnet" id="carnet">
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">wc</i>
		<select name="genero" id="genero">
			<option>Genero</option>
			<option value="1">Femenino</option>
			<option value="2">Masculino</option>
		</select>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">timer</i>
		<select name="turno" id="turno">
			<option>Turno</option>
			<option value="1">Mañana</option>
			<option value="2">Tarde</option>
			<option value="3">Noche</option>
		</select>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">school</i>
		<select name="pnf" id="pnf">
			<option>Programa Nacional de Formacion</option>
			<option value="1">Administracion</option>
			<option value="2">Contaduria Publica</option>
			<option value="3">Distribucion y Logistica</option>
			<option value="4">Informatica</option>
		</select>
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">people</i>
		<select name="rol" id="rol">
			<option>Tipo de usuario</option>
			<option value="2">Docente</option>
			<option value="3">Estudiante</option>
		</select>
	</div>
	<fieldset>
		<legend><h5>Seguridad</h5></legend>
	<div class="input-field col s4">
		<i class="material-icons prefix">question_answer</i>
		<label for="preg1">Lugar de nacimiento de la Madre</label>
		<input type="text" name="preg1" id="preg1">
	</div>
	<div class="input-field col s4">
		<i class="material-icons prefix">question_answer</i>
		<label for="preg2">Nombre de su primer colegio</label>
		<input type="text" name="preg2" id="preg2">
	</div>
	<div class="input-field col s4">
		<i class="material-icons prefix">question_answer</i>
		<label for="preg3">Nombre de su mascota</label>
		<input type="text" name="preg3" id="preg3">
	</div>

	<div class="input-field col s6">
		<i class="material-icons prefix">person_pin</i>
		<label for="usuario">Usuario</label>
		<input type="text" name="usuario" id="usuario">
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">vpn_key</i>
		<label for="clave">Clave</label>
		<input type="password" name="clave" id="clave">
	</div>
	</fieldset>
	<div class="input-field col s12 center">
		<input type="hidden" name="grabar" value="si">
		<a class="btn-floating btn-large waves-effect waves-light colorBase" href="#" onclick="validar()" class="btn"><i class="material-icons">send</i></a>
	</div>
	
</form>

<script type="text/javascript">
	
function validar()
{
	$(document).ready(function(){
	var nombre = document.getElementById('nombre');
	var apellido = document.getElementById('apellido');
	var correo = document.getElementById('correo');
	var carnet = document.getElementById('carnet');
	var genero = document.getElementById('genero');
	var turno = document.getElementById('turno');
	var pnf = document.getElementById('pnf');
	var rol = document.getElementById('rol');
	var preg1 = document.getElementById('preg1');
	var preg2 = document.getElementById('preg2');
	var preg3 = document.getElementById('preg3');
	var usuario = document.getElementById('usuario');
	var clave = document.getElementById('clave');

		if(nombre.value==''){
		$('#msj').html('<h5 class="red-text center">Falta completar el campo nombre.</h5>');
		
		return false;
		}else if(apellido.value == ''){
		$('#msj').html('<h5 class="red-text center">Falta completar el campo apellido.</h5>');
		$('#apellido').focus();	
		}else if(correo.value == ''){
		$('#msj').html('<h5 class="red-text center">Falta completar el campo correo.</h5>');
		$('#correo').focus();	
		}else if(carnet.value == ''){
		$('#msj').html('<h5 class="red-text center">Falta completar el campo carnet.</h5>');
		$('#carnet').focus();	
		}else if(preg1.value == ''){
		$('#msj').html('<h5 class="red-text center">Debe darle respuesta a esta interrogante de seguridad.</h5>');
		$('#preg1').focus();
		}else if(preg2.value == ''){
		$('#msj').html('<h5 class="red-text center">Debe darle respuesta a esta interrogante de seguridad.</h5>');
		$('#preg2').focus();
		}else if(preg3.value == ''){
		$('#msj').html('<h5 class="red-text center">Debe darle respuesta a esta interrogante de seguridad.</h5>');
		$('#preg3').focus();
		}else if(usuario.value == ''){
		$('#msj').html('<h5 class="red-text center">El campo usuario es obligatorio.</h5>');
		$('#usuario').focus();
		}else if(clave.value == ''){
		$('#msj').html('<h5 class="red-text center">El campo clave es obligatorio.</h5>');
		$('#clave').focus();
		}else{
			document.getElementById('form').submit();
		}

	});

}




</script>