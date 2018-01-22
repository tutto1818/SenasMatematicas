<div class="row">
	<!--<div class="col s12 m12 l12">
		<nav>
			<div class="nav-wrapper colorBase">
				<div class="col s12">
					<a title="En Señas Matemática" href="<?php echo Link::deruta(); ?>esm" class="breadcrumb">ESM</a>
					<a title="Misión de En Señas Matemática" href="" class="breadcrumb">Misión</a>
					<a title="Visión de En Señas Matemática" href="" class="breadcrumb">Visión</a>
					<a title="Objetivo de En Señas Matemática" href="" class="breadcrumb">Objetivo</a>
				</div>
			</div>
		</nav>
	</div>-->
</div>
<div class="row">

	<div class="col s10 offset-s1">
		<div class="card-panel colorFoot">
			<center>
				<div class="slider">
					<ul class="slides">
					   <?php for($i=0;$i<4;$i++){ ?>
					    <li>
					      <img src="<?php echo Link::deruta(); ?>themes/mat/<?php echo $i+1; ?>.png"> <!-- random image -->
					    </li>
					  <?php } ?>
					</ul>
				</div>
			</center>
		</div>
	</div>
	<div class="col s10 offset-s1">
		<div class="row">
			<?php echo $usuario->temas(); ?>
		</div>
	</div>
</div>