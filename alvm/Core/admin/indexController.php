<?php Link::deSeguridad();

class Administrador extends Request 
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function Controller()
	{
		$metodo = $this->metodo();

		if($metodo == 'salir')
		{
			Logueo::deSalida();
		}
	}

	public function administradores()
	{
		$usuarios = new Usuarios();
		$usuarios->set('id_rol',1);
		$datos = $usuarios->get_Usuario('id_rol');

		include('administradores.php');
	}

	public function pnf()
	{
		$usuarios = new ConsultasBase();
		$datos = $usuarios->get_Registros('pnf',0);

		include('pnf.php');
	}

	public function temas()
	{
		$usuarios = new ConsultasBase();
		$datos = $usuarios->get_Registros('tema',0);

		include('temas.php');
	}

}


$admin = new Administrador();
$admin->Controller();

include('vista.php');
 ?>