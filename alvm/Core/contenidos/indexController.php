<?php Link::deSeguridad();

class ContenidosC extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Controller()
	{
		if(empty($this->metodo()))
		{
			include('cont.php');
			echo $content['contenidos'];
		}else
		{
			$this->contenidos();
		}
	}
	public function contenidos()
	{
		$contenidos = new Contenidos();
		$contenidos->set('tema',$this->metodo());
		$argumento = $this->argumento();
		if(empty($argumento)){$inicio = 0;}else{$inicio = $argumento;}
		$metodo = $this->metodo();
		$datos = $contenidos->contenidoTema($inicio);
		include('contenidos.php');
	}

	public function titulo($cadena)
	{
		$x = array('precalculo','calculo');
		$y = array('Precálculo','Cálculo');
		$titulo = str_replace($x, $y, $cadena);
		echo $titulo;
	}

		public function temas()
	{
		$usuarios = new ConsultasBase();
		$datos = $usuarios->get_Registros('tema',0);

		include('temas.php');
	}
}

$contenidos = new ContenidosC();


include('vista.php');
 ?>