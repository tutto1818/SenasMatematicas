
	<legend><h5>Cambio de Clave</h5></legend><br>
	<form class="form row" name="form" method="post">
		<div class="input-field col s6">
			<label>Clave</label>
			<input type="password" name="clave" minlength="5" required id="c1">
		</div>
		<div class="input-field col s6">
			<label>Confirmaciòn</label>
			<input type="password" name="clave2" minlength="5" required id="c2">
		</div>
		<div id="msj" class="input-field col s12 center"></div>
		<div class="input-field col s12">

			<input type="hidden" name="grabar" value="si">
			<a href="#" onclick="validar()" class="btn-floating pulse colorBarra"><i class="material-icons">vpn_key</i></a>
		</div>
	</form>


<script type="text/javascript">
	function validar(){
		clave = document.getElementById('c1');
		clave2 = document.getElementById('c2');
		if(clave.value != clave2.value){
			$(document).ready(function(){
				$('#msj').html('<p class="center">Las claves no coinciden</p>');
			});
			return false;
		}else if(clave.value == '' || clave2.value == '' ){
			$(document).ready(function(){
				$('#msj').html('<p class="center">El campo clave debe estar completado.</p>');
			});
			return false;
		}else{
			document.form.submit();
		}

	}
</script>