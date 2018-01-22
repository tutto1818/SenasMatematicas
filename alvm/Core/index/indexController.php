<?php 

class Index extends Request
{
	public function __construct()
	{
		parent:: __construct();
	}

	public function Controller()
	{
		include('mvo.php');
		$metodo = $this->metodo();
		if(isset($metodo)){
			switch ($metodo) {
				case 'unidive':
					echo $unidive['unidive'];
					break;
				case 'mision':
					echo $unidive['mision'];
					break;
				case 'vision':
					echo $unidive['vision'];
					break;
				case 'objetivo':
					echo $unidive['objetivo'];
					break;
				
				default:
					# code...
					break;
			}
		}
	}
}

$home = new Index();



include('vista.php');
 ?>