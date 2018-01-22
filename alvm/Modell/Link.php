<?php 

class Link
{
	public static function deConstruccion($accion)
	{
		if(!file_exists('Core/'.$accion)){
			mkdir('Core/'.$accion);
		}
		if(!is_file('Core/'.$accion.'/indexController.php')){
			fopen('Core/'.$accion.'/indexController.php','w+');
			fopen('Core/'.$accion.'/vista.php','w+');
		}
	}

	public static function clean_Url($string){
		$x = array(' ','á','é','í','ó','ú');
		$y = array('','a','e','i','o','u');
		$url = strtolower(str_replace($x, $y, $string));
		echo $url;
	} 

	public static function deruta()
	{
		return 'http://localhost/alvm/';
	}

	public static function deconexion()
	{
		try {
			$con = new PDO('mysql:host=localhost;dbname=senas','root','');
			$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$con->exec('SET CHARACTER SET UTF8');
		} catch (Exception $e) {
			die('ERROR EN LA CONEXION ' . $e->getMessage() . " " . $e->getLine());
		}
		return $con;
	}

	public static function consultaSimple($sql)
	{
		$consulta = self::deconexion()->prepare($sql);
		$consulta->execute(array());
		return $consulta;
	}
	public static function consultaEspecifica($sql,$condicion)
	{
		$consulta = self::deconexion()->prepare($sql);
		$consulta->execute(array(":x"=>$condicion));
		return $consulta;
	}

	public static function deSeguridad()
	{
		if(!isset($_SESSION['usuario'])){
			header('Location:' . Link::deruta() . '');
		}
	}

	
}





 ?>