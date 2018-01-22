<?php for($i=0;$i<count($datos);$i++){ ?>

<div class="col s3 m3">
		<div class="card-panel colorBase">
			<span class="parrafo white-text">
				Imagenes Relacionadas
			</span>
		</div>
		<div class="card-panel">
			<center>
				<img class="responsive-img materialboxed" src="<?php echo $datos[$i]['img1']; ?>">
				<br>
				<img class="responsive-img materialboxed" src="<?php echo $datos[$i]['img2']; ?>">
				<br>
				<img class="responsive-img materialboxed" src="<?php echo $datos[$i]['img3']; ?>">
				<br>
			</center>
		</div>
</div>
	
<div class="col s6 m6">
		<div class="card-panel colorBase">
			<span class="parrafo white-text">
				<?php echo $datos[$i]['titulo']; ?>
			</span>
		</div>
		<div class="card-panel">
			<center>
				<video width="98%" height="98%" controls>
					<source src="<?php echo $datos[$i]['video']; ?>" type="video/mp4">
					<source src="<?php echo $datos[$i]['video']; ?>" type="video/ogg">
								<!--Your browser does not support the video tag.-->
				</video>
			</center>
		</div>
		<br>
		<div class="card-panel">
			<p class="parrafo">
				<?php contenidos($datos[$i]['contenido']); ?>
			</p>
		</div>
</div>

<div class="col s3 m3" >
		<div class="card-panel colorBase">
			<span class="white-text parrafo">
				Mapa Mental
			</span>
		</div>
		<div class="card-panel">
			<center>
				<img class="materialboxed responsive-img" src="<?php echo $datos[$i]['mapa']; ?>">
			</center>
		</div>
</div>


<?php } ?>