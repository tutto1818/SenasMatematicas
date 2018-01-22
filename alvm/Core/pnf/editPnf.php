<form class="form row" name="form" id="form">
	<div class="input-field col s6 offset-s3">
		<i class="material-icons prefix">local_library</i>
		<label>PNF</label>
		<?php for($i=0;$i<count($datos);$i++){ ?>
		<input type="text" name="pnf" value="<?php echo $datos[$i]['pnf']; ?>">
		<?php } ?>
	</div>
	<div class="input-field col s12 center">
		<br>
		<input type="hidden" name="grabar" value="si">
		<a href="" class="btn-floating pulse colorBase">
			<i class="material-icons">
				send
			</i>
		</a>
	</div>
</form>