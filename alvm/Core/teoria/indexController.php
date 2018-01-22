<?php Link::deSeguridad();



class Teoria extends Request
{

	public function __construct()
	{
		parent::__construct();
		
	}

	public function titulo()
	{
		$lista = new Contenidos();
		$lista->set("id_cc",$this->metodo());
		$datos = $lista->contenidoEspecifico();

		include 'titulo.php';

	}

	public function Controller(){
		$this->contenido();
	}


	public function contenido()
	{
		$lista = new Contenidos();
		$lista->set("id_cc",$this->metodo());
		$datos = $lista->contenidoEspecifico();

		$i = $this->argumento();
		if(!isset($i)){
			$inicio = 0;
		}else{
			$inicio = $i;
		}


		$lista2 = new Comentarios();
		$lista2->set('id_contenido',$this->metodo());
		$metodo = $this->metodo();
		$comentarios = $lista2->get_comentarios($inicio);
			
		include("contenido2.php");
	}

	public static function cont($contenido){
		return str_replace('.', '.</p><p>', $contenido);
	}


}

$teoria = new Teoria();


include('vista.php');
 ?>