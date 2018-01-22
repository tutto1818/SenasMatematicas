<?php 


class Teoria extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function contenido()
	{
		$contenido = new Contenidos();
		$contenido->set('id_cc',$this->metodo());
		$metodo = $this->metodo();
		$datos = $contenido->contenidoEspecifico();
		function contenidos($parrafo)
		{
			$conte = str_replace('.', '</p><p>', $parrafo);
			echo $conte;
		}
		include('contenido.php');
	}
	public function comentarios()
	{
		$comentario = new Comentarios();
		$comentario->set('id_contenido',$this->metodo());
		if(empty($this->argumento)){$inicio = 0;}else{$inicio = $this->argumento();}
		$metodo = $this->metodo();
		$datos = $comentario->get_comentarios($inicio);
		include('comentarios.php');
	}



}

$usuario = new Teoria();

include('vista.php');
 ?>