<?php Link::deSeguridad();

class Eliminar extends Request
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Controller()
	{
		$metodo = $this->metodo();
		switch ($metodo) {
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
		$delete = new Contenidos();
		$delete->set('id_cc',$this->argumento());
		$delete->delete_contenido();
	}

}

$eliminar = new Eliminar();
$eliminar->Controller();


 ?>