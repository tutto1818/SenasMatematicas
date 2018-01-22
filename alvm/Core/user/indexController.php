<?php 


class U extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function temas()
	{
		$temas = new Temas();
		$datos = $temas->get_Registros('tema',0);
		include('temas.php');
	}
}

$usuario = new U();





include('vista.php');
 ?>