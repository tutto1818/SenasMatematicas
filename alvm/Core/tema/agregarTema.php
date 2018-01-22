
<div class="col s12 m12 l12">
	<div class="card-panel colorBase center">
		<span class="white-text">Agrega un nuevo Tema aquí</span>
	</div>
	<div class="card-panel">
		<form class="form row" name="form" method="post">
			<div class="input-field col s6">	
				<label>Nombre del Tema</label>
				<input type="text" name="tema" required minlength="2">
			</div>
			<div class="file-field  input-field col s6">
		      <div class="btn">
		        <span class="parrafo white-text">Logo</span>
		        <input type="file">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text" name="logo">
		      </div>
		    </div>
			<div class="input-field col s12">	
				<label>Breve descripción del Tema</label>
				<textarea id="textarea1" name="descripcion" class="materialize-textarea"></textarea>
          
			</div>
			<div class="input-field col s12 center">	
				<input type="hidden" name="grabar" value="si">

				<a href="#" onclick="document.form.submit()" class="btn-floating pulse colorBarra"><i class="material-icons">add</i></a>
			</div>
		</form>
	</div>
</div>