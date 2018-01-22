<?php for($i=0;$i<count($datos);$i++){ ?>
<div class="col s12 m12 l12">
	<div class="card-panel colorBase center">
			<span class="white-text parrafo">
				Agrega un comentario sobre <?php echo $datos[$i]['titulo']; ?>
			</span>
	</div>
</div>
<?php } ?>
<div class="col s8 offset-s2"><br><br>
	<form class="form row" name="form" method="post">
	<div class="input-field col s12">
		<i class="material-icons prefix">people</i>
		<textarea id="textarea1" name="comentario" placeholder="Comentario" class="materialize-textarea"></textarea>
	</div>
	<div class="input-field col s12 center">
		<input type="hidden" name="grabar" value="si">
		<a title="Comenta" href="#" onclick="document.form.submit()" class="btn-floating pulse colorBase">
			<i class="material-icons">
				send
			</i>
		</a>
	</div>
</form>
</div>