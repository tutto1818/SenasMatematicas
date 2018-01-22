<?php session_start();


class Enrutador
{
	public static function declases()
	{
		spl_autoload_register(function($class){
			include('Modell/' . $class . '.php');
		});
	}

	public static function deArchivos(Request $request)
	{
		!empty($request->controlador()) ? $accion = $request->controlador() : $accion = 'index';
		
		is_file("Core/".$accion."/indexController.php") ? include("Core/".$accion."/indexController.php") : header('Location: ' . Link::deruta() . ''); //Link::deConstruccion($accion); //header('Location: ' . Link::deruta() . '');
	}
}





 ?>