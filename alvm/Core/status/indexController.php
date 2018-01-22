<?php 


class Estatus extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Controller()
	{
		$metodo = $this->metodo();
		switch ($metodo) {
			case 'contenidos':
				$this->contenidos();
				break;
			case 'usuarios':
				$this->usuarios();
				break;
			case 'usuarios-e':
				$this->usuariosE();
				break;
			
			default:
				# code...
				break;
		}
	}

	public function contenidos()
	{
		
		$ns = new ConsultasBase();
		$dir = 'contenidos';
		$ns->change_status('contenido','id_cc',$this->argumento(),$dir);
	}
	public function usuarios()
	{
		$dir = 'perfil';
		$ns = new ConsultasBase();
		$ns->change_status('usuarios','id_u',$this->argumento(),$dir);
	}

	public function usuariosE()
	{
		$dir = 'usuarios/individual/' . $this->argumento();
		$ns = new ConsultasBase();
		$ns->change_status('usuarios','id_u',$this->argumento(),$dir);
	}
}

$status = new Estatus();
$status->Controller();



 ?>