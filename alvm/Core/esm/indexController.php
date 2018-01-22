<?php Link::deSeguridad();

class Esm extends Request 
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Controller()
	{
		if(empty($this->metodo()))
		{
			echo 'ESM';
		}else{
			switch ($this->metodo()) {
				case 'mision':
					echo 'mision';
					break;
				
				default:
					# code...
					break;
			}
		}
	}
}

$esm = new Esm();


include 'vista.php';
 ?>