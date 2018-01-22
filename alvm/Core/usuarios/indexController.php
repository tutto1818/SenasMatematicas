<?php Link::deSeguridad();

class Users extends Request 
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function Controller()
	{
		$metodo = $this->metodo();

		switch ($metodo) {
			case 'individual':
				$this->UsuarioUnico();
				break;
			case 'general':
				$this->general();
				break;
			case 'pnf':
				$this->pnf();
				break;
			case 'genero':
				$this->genero();
				break;
			case 'administracion':
				$this->pnfEspecifico();
				break;
			case 'contaduria':
				$this->pnfEspecifico();
				break;
			case 'distribucion':
				$this->pnfEspecifico();
				break;
			case 'informatica':
				$this->pnfEspecifico();
				break;
			case 'masculino':
				$this->generoEspecifico();
				break;
			case 'femenino':
				$this->generoEspecifico();
				break;
			case 'eliminar':
				$this->deleteU();
				break;
			
			default:
				$this->general();
				break;
		}
	}

	public function deleteU()
	{
		$delete = new Usuarios();
		$delete->set('id_u',$this->argumento());
		$delete->delete_usuario();
	}

	public function UsuarioUnico()
	{
		$usuario = new Usuarios();
		$usuario->set('id_u',$this->argumento());
		$datos = $usuario->get_Usuario('id_u');
		include 'usuarioUnico.php';
	}

	public function general()
	{
		$usuarios = new Usuarios();
		$argumento = $this->argumento();
		if(empty($argumento)){$inicio = 0;}else{$inicio = $argumento;}
		$datos = $usuarios->get_Registros('usuarios',$inicio);
		include('listado.php');
	}

	public function pnf()
	{
		$pnf = new ConsultasBase();
		$datos = $pnf->get_Registros('pnf',0);

		$metodo = $this->metodo();

		include 'pnf.php';
	}

	public function genero()
	{
		$pnf = new ConsultasBase();
		$datos = $pnf->get_Registros('genero',0);

		$metodo = $this->metodo();

		include 'genero.php';
	}

	public function pnfEspecifico()
	{
		$user_pnf = new Pnf();
		$y = array('administracion','contaduria','distribucion','informatica');
		$x = array('Administración','Contaduría Pública','Distribución y Logística','Informática');
		$url = str_replace($y, $x, $this->metodo());
		$user_pnf->set('pnf',$url);
		$argumento = $this->argumento();
		if(empty($argumento)){$inicio = 0;}else{$inicio = $argumento;}
		$datos = $user_pnf->get_Usuarios_pnf($inicio);

		include('listado.php');
	}

	public function generoEspecifico()
	{
		$user_pnf = new Genero();
		$x = array('Administración','Contaduría Pública','Distribución y Logística','Informática','Masculino','Femenino');
		$y = array('administracion','contaduria','distribucion','informatica','masculino','femenino');
		$url = str_replace($y, $x, $this->metodo());
		$user_pnf->set('genero',$url);
		$argumento = $this->argumento();
		if(empty($argumento)){$inicio = 0;}else{$inicio = $argumento;}
		$datos = $user_pnf->get_Usuarios_genero($inicio);

		include('listado.php');
	}

	public static function nom_url($dir)
	{
		$x = array('Administración','Contaduría Pública','Distribución y Logística','Informática','Masculino','Femenino');
		$y = array('administracion','contaduria','distribucion','informatica','masculino','femenino');
		$url = str_replace($x, $y, $dir);
		echo $url;

	}

}

$usuario = new Users();

include 'vista.php';
 ?>