<?php Link::deSeguridad();

class Coment extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Controller()
	{
		switch ($this->metodo()) {
			case 'agregar':
				$this->comentario();
				break;
			case 'eliminar':
				$this->eliminar();
				break;
			
			default:
				# code...
				break;
		}
	}

	public function comentario()
	{	
		$contenido = new Contenidos();
		$contenido->set("id_cc",$this->argumento());
		$datos = $contenido->contenidoEspecifico();

		if(isset($_POST['grabar']) and $_POST['grabar']=='si'){
			$comentario = new Comentarios();
			$comentario->add_comentario($this->argumento());
			exit;
		}


		include('comentario.php');
	}

	public function eliminar()
	{	
		$ruta = $this->metodo();
		$comentario = new Comentarios();
		$comentario->set('id_c',$this->argumento());
		$comentario->delete_comentario();
	}

}


$comentario = new Coment();

include'vista.php';

 ?>