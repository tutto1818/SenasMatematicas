<?php 


class Request
{
	private $controlador,$metodo,$argumento;
	public function __construct()
	{
		$url = array();
		if(isset($_REQUEST['accion'])){
			$url = explode("/", strtolower($_REQUEST['accion']));
		}
		$this->controlador = array_shift($url);
		$this->metodo = array_shift($url);
		$this->argumento = array_shift($url);
		
	}

	public function controlador()
	{
		return $this->controlador;
	}
		
	public function metodo()
	{
		return $this->metodo;
	}
		
	public function argumento()
	{
		return $this->argumento;
	}
	

}




 ?>