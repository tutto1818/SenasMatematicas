<?php Link::deSeguridad();


class Agregar extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Controller()
	{
		switch ($this->metodo()) {
			case 'contenido':
				$this->contenido();
				break;
			
			default:
				# code...
				break;
		}
	}

	public function contenido()
	{	
		$tema = new Temas();
		$datos = $tema->get_Registros('tema',0);

		if(isset($_POST['grabar']) and $_POST['grabar'] == 'si')
		{
			$add = new Contenidos();
			$add->add_contenidos();
			exit;
		}

		include('contenido.php');
	}

} 

$add = new Agregar();


include('vista.php');
 ?>