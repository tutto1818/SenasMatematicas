<?php Link::deSeguridad();

class Perfil extends Request 
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function Controller()
	{
		if(empty($this->metodo()))
		{
			$this->mi_perfil("perfil.php");
		}
		else
		{
			//echo $this->metodo();
			switch ($this->metodo()) {
				case 'editar':
					$this->mi_perfil("editarPerfil.php");
					break;
				case 'editclave':
					$this->cambio_clave();
					break;
				case 'delete':
					$this->deleteP();
					break;
				case 'others':
					$this->perfil_O("editarPerfil.php");
					break;
				
				default:
					# code...
					break;
			}
		}
	}

	public function mi_perfil($dir)
	{
		$perfil = new Usuarios();
		$perfil->set("id_u",$_SESSION['id']);
		$datos = $perfil->get_Usuario("id_u");

		$genero = new ConsultasBase();
		$g = $genero->get_Registros('genero',0);

		$turno = new ConsultasBase();
		$t = $turno->get_Registros('turno',0);

		$pnf = new ConsultasBase();
		$p = $pnf->get_Registros('pnf',0);

		$r = new ConsultasBase();
		$r->get_Registros('rol',0);


		if(isset($_POST['grabar']) and $_POST['grabar']=='si')
		{
			$perfil->edit_perfil();
			exit();
		}

		include($dir);
	}

	public function perfil_O($ruta)
	{
		$perfil = new Usuarios();
		$perfil->set("id_u",$this->argumento());
		$datos = $perfil->get_Usuario("id_u");

		

		include($ruta);
	}

	public function cambio_clave()
	{
		$newP = new Usuarios();
		$newP->set('id_u',$_SESSION['id']);

		if(isset($_POST['grabar']) and $_POST['grabar']=='si')
		{
			$newP->edit_clave();
			exit();
		}
		include('cambioClave.php');
	}

	public function deleteP()
	{
		$d = new Usuarios();
		$d->set("id_u",$_SESSION['id']);
		$d->delete_usuario();
	}


}

$perfil = new Perfil();

include("vista.php");


 ?>