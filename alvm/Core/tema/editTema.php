<div class="col s12">
	<div class="card-panel colorBase center">
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<span class="parrafo white-text">
			Edición del tema <?php echo $datos[$i]['tema']; ?>
		</span>
	</div>
	<div class="card-panel">
		<form class="row" name="form" method="post" id="form">
	<div class="input-field cols12 center" id="msj"></div>
	<div class="input-field col s6">
		<label>Tema</label>
		<input type="text" name="tema" value="<?php echo $datos[$i]['tema']; ?>" id="tema">
	</div>
	<div class="file-field input-field col s6">
      <div class="btn">
        <span class="parrafo white-text">Logo</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="logo" value="<?php echo $datos[$i]['logo']; ?>" id='logo'>
      </div>
    </div>
	<div class="input-field col s12">
		<label>Breve descripción del Tema</label>
		<textarea name="descripcion" id="textarea1" class="materialize-textarea"><?php echo $datos[$i]['descripcion']; ?></textarea>
	</div>
	<div class="input-field col s6 offset-s3 center">
		<input type="hidden" name="grabar" value="si">
		<a title="Editar" href="#" onclick="validar()" class="btn-floating pulse colorBase">
			<i class="material-icons">
				edit
			</i>
		</a>
	</div>
</form>
<?php } ?>
	</div>
</div>

<script type="text/javascript">
	function validar()
	{
		$(document).ready(function(){
		var tema = $('#tema').val();
		var logo = $('#logo').val();
		var tex = $('#textarea1').val();

		if(tema == ''){
			$('#msj').text('Falta completar el campo nombre.');
		}else if(logo == ''){
			$('#msj').text('Se debe cargar una imagen, para destacar el tema.');
		}else if(tex == ''){
			$('#msj').text('Cargue una descripción del tema.');
		}else{
			$('#form').submit();
		}
	});
	}
</script>