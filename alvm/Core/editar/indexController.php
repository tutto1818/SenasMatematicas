<?php Link::deSeguridad();


class Editar extends Request 
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

		$contenidos = new Contenidos();
		$contenidos->set("id_cc",$this->argumento());
		$c = $contenidos->contenidoEspecifico();

		if(isset($_POST['grabar']) and $_POST['grabar']=='si')
		{	
			//print_r($_POST);
			$contenidos->set('id_cc',$this->argumento());
			$contenidos-> edit_contenidos();
			exit();
		}
		include('contenido.php');
	}

} 

$add = new Editar();


include('vista.php');
 ?>