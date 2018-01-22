<?php 



class Acceso extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Controller()
	{
		$metodo = $this->metodo();
		switch ($metodo) {
			case 'ingreso':
				$this->ingreso();
				break;
			case 'registro':
				$this->registro();
				break;
			case 'recuperacion':
				$this->recuperar();
				break;
			
			default:
				# code...
				break;
		}
	}

	public function titulo()
	{
		$x = array('ingreso','registro','recuperacion');
		$y = array('Formulario de Ingreso','Formulario de Registro','Formulario de Recuperación de cuenta');
		$titulo = str_replace($x, $y, $this->metodo());
		echo $titulo;
	}

	public function ingreso()
	{
		$ingreso = new Logueo();
		if(isset($_POST['grabar']) and $_POST['grabar']=='si')
		{
			$ingreso->log();
			exit;
		}
		include('ingreso.php');
	}

	public function registro()
	{
		$newUser = new Usuarios();
		if(isset($_POST['grabar']) and $_POST['grabar']=='si')
		{
			$newUser->add_usuario();
			exit;
		}
		include 'registro.php';
	}

	public function recuperar()
	{
		if(isset($_POST['grabar']) and $_POST['grabar']=='si')
		{
			Logueo::deRecuperacion();
			exit;
		}

		include 'recuperar.php';
	}
}

$acceso = new Acceso();




include('vista.php');
 ?>