<?php 

class Pagina extends Link
{
	public function __construct()
	{
		?>
<!DOCTYPE html>
<html>
<head>
	<title>..::ESM::..</title>
	<link rel="stylesheet" href="<?php echo Link::deruta(); ?>themes/css/materialize.min.css">
	<link rel="stylesheet" href="<?php echo Link::deruta(); ?>themes/css/iconosU.css">
	<link rel="stylesheet" href="<?php echo Link::deruta(); ?>themes/css/style.css">
	<link rel="stylesheet" href="<?php echo Link::deruta(); ?>themes/css/letrapg.css">
	<link rel="stylesheet" href="<?php echo Link::deruta(); ?>themes/css/kaushan.css">
</head>
<body>
	<?php
	if(isset($_SESSION['usuario']) and $_SESSION['rol'] == 'Administrador'){
		include('Templates/Admin/barra.php');
	}else if(isset($_SESSION['usuario']) and $_SESSION['rol'] == 'Estudiante'){
		include('Templates/User/barra.php');
	}else if(isset($_SESSION['usuario']) and $_SESSION['rol'] == 'Docente'){
		include('Templates/User/barra.php');
	}
	?>
	<div class="row"><br>
		<div class="card-panel col s10 offset-s1 z-depth-4">
			<div class="row">
				<div class="col s2 m2"><br>
					<center>
						<img class="responsive-img" src="<?php echo Link::deruta(); ?>themes/img/esm3.png">
					</center>
				</div>
				<div class="col s8 m8">
					<h2>En Señas Matemática</h2>
					<h5>Aprende Matemática en Lengua de Señas Venezolana</h5>
				</div>
				<div class="col s2 m2"><br>
					<center>
						<img class="responsive-img" src="<?php echo Link::deruta(); ?>themes/img/esm3.png">
					</center>
				</div>
			</div>
		</div>
	</div>
		<?php
		if(!isset($_SESSION['usuario']))
		{
			include('Templates/Inicio/barra.php');
		}
	}


	public function __destruct()
	{
		?>
		<br><br><br>
		        <footer class="page-footer colorFoot ">
          <div class="container">
            <div class="row">
            	<div class="col s2 l2 m2">
            		<center>
            			
            		</center>
            	</div>
              <div class="col s8 l8 m8 center">
              	
                <h5 class=" white-text">Colegio Universitario Francisco de Miranda <br>Oficina de Atención a la Persona con Discapacidad</h5>
              <span class="parrafo white-text">
              	Esquina de Mijares, Parroquia Altagracia, Municipio Libertador <br> Caracas - República Bolivariana de Venezuela
              </span>
              </div>
              <div class="col s2 l2 m2">
              	<center>
              		
              	</center>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container white-text">
            © 2017-2018 ESM
            </div>
          </div>
        </footer>
<script src="<?php echo Link::deruta(); ?>themes/js/jquery.js"></script>
<script src="<?php echo Link::deruta(); ?>themes/js/materialize.min.js"></script>
<script type="text/javascript" src="<?php echo Link::deruta(); ?>themes/js/mainJ.js"></script>
</body>
</html>
		<?php
	}
}





 ?>