<?php Link::deSeguridad();


class Temario extends Request 
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function Controller()
	{
		switch ($this->metodo()) {
			case 'agregar':
				$this->new_Tema();
				break;
			case 'eliminar':
				$this->delete_T();
				break;
			case 'editar':
				$this->edit_t();
				break;
				
			default:
				$this->tema();
				break;
		}
		
		
	}

	public function edit_t()
	{
		$tema = new Temas();
		$tema->set('id_tt',$this->argumento());
		$datos = $tema->temaUnico('id_tt');
		if(isset($_POST['grabar']) and $_POST['grabar'] == 'si'){
		$tema->edit_tema();
		exit();
		}	
		include('editTema.php');
	}

	public function tema()
	{
		$tema = new Temas();
		$tema->set('tema',$this->metodo());
		$datos = $tema->temaUnico('tema');
		include 'tema.php';
	}

	public function new_Tema()
	{	
		$nt = new Temas();
		if(isset($_POST['grabar']) and $_POST['grabar']=='si')
		{
			//print_r($_POST);
			$nt->add_tema();
			exit();
		}

		include('agregarTema.php');
	}

	public function menu_temas()
	{
		$usuarios = new ConsultasBase();
		$datos = $usuarios->get_Registros('tema',0);

		include('menuTemas.php');
	}

	public static function editor($parrafo)
	{
		$x = array('.');
		$y = array('</p><p>');
		$format = str_replace($x, $y, $parrafo);
		return $format;
	}

	public function delete_T()
	{
		$out = new Temas();
		$out->set('id_tt',$this->argumento());
		$out->delete_tema();
	}
}

$temario = new Temario();


include('vista.php');

 ?>