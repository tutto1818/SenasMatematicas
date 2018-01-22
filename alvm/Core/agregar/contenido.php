<form class="row" name="form" method="post">
	<div class="input-field col s6">
		<input type="text" name="titulo" placeholder="Titulo">
	</div>
	<div class="input-field col s6">
		<i class="material-icons prefix">people</i>
		<select name="tema" id="tema">
			<option>Tema</option>
			<?php for($i=0;$i<count($datos);$i++){ ?>
			<option value="<?php echo $datos[$i]['id_tt']; ?>"><?php echo $datos[$i]['tema']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="file-field input-field col s6">
	      <div class="btn colorBase">
	        <span class="parrafo white-text">Img 1</span>
	        <input type="file" multiple>
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text" name="img1" value="" id='img1'>
	      </div>
    </div>

    <div class="file-field input-field col s6">
	      <div class="btn colorBase">
	        <span class="parrafo white-text">Img 2</span>
	        <input type="file" multiple>
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text" name="img2" value="" id='img2'>
	      </div>
    </div>

    <div class="file-field input-field col s6">
      <div class="btn colorBase">
        <span class="parrafo white-text">Img 3</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="img3" value="" id='img3'>
      </div>
    </div>

    <div class="file-field input-field col s6">
      <div class="btn colorBase">
        <span class="parrafo white-text">Mapa</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="mapa" value="" id='mapa'>
     	</div>
    </div>

    <div class="file-field input-field col s12">
      <div class="btn colorBase">
        <span class="parrafo white-text">Video</span>
        <input type="file" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" name="video" value="" id='video'>
      </div>
    </div>
	<div class="input-field col s12">
		<i class="material-icons prefix">people</i>
		<textarea id="textarea1" name="contenido" placeholder="Contenido" class="materialize-textarea"></textarea>
	</div>
	<div class="input-field col s12 center"><br>
		<input type="hidden" name="grabar" value="si">
		<a title="Agrega un contenido nuevo" href="#" onclick="document.form.submit()" class="btn-floating pulse colorBase">
			<i class="material-icons">
				add
			</i>
		</a>
	</div>
</form>