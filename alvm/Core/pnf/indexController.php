<?php Link::deSeguridad();

class Programas extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Controller()
	{
		switch ($this->metodo()) {
			case 'editar':
				$this->edit_p();
				break;
			
			default:
				$this->pnfs();
				break;
		}
	}
	public function edit_p()
	{
		$pnf = new Pnf();
		$pnf->set('id_p',$this->argumento());
		$datos = $pnf->getPnf_Especifico();

		if(isset($_POST['grabar']) and $_POST['grabar']=='si'){
			$pnf->edit_pnf();
			exit;
		}
		include('editPnf.php');
	}

	public function pnfs()
	{
		$pnf = new Pnf();
		if(empty($this->metodo()))
			{$inicio = 0; 
			}else{
			$inicio = $this->metodo();}

		$datos= $pnf->get_Registros('pnf',0);

		include('pnf.php');
	}

}


$Pnf = new Programas();


include('vista.php');
 ?>