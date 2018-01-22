<?php 

class Pnf extends ConsultasBase 
{
	private $id_p,$pnf,$consultas;

	public function __construct()
	{
		$this->consultas = array();
	}

	public function set($atributo, $contenido)
	{
		$this->$atributo = $contenido;
	}

	public function get($atributo)
	{
		return $this->$atributo;
	}

	public function get_Usuarios_pnf($inicio)
	{
		$sql = "SELECT * FROM usuarios u, pnf p WHERE u.id_pnf = p.id_p AND p.pnf = :x limit ".$inicio.",5 ";
		$grupos = self::consultaEspecifica($sql,$this->pnf);
			while($fila = $grupos->fetch()){
				$this->consultas[] = $fila;
			}
		return $this->consultas;
	}

	public function getPnf_Especifico()
	{
		$sql = "SELECT * FROM pnf WHERE id_p = :x";
		return $pnf = $this->get_Registro($sql,$this->id_p);
	}

		public function edit_pnf()
	{
		$sql = "UPDATE pnf SET pnf = :p WHERE id_p = :id";
		try {
			$edit = self::deconexion()->prepare($sql);
			$edit->execute(array(":p"=>$_POST['pnf'],":id"=>$this->id_p));
			header('Location: ' . Link::deruta() . "pnf");
		} catch (Exception $e) {
			die('ERROR ' . $e->getMessage() . " " . $e->getLine());
		}
	}

	public function add_pnf()
	{
		$sql = "INSERT INTO pnf(id_p,pnf)VALUES(NULL,:x)";
		try {
			$add = self::consultaEspecifica($sql,$_POST['pnf']);
			header("Location: " . Link::deruta() . "agregar/pnf");
		} catch (Exception $e) {
			die("ERROR " . $e->getMessage() . " " . $e->getLine());
		}
	}
}


 ?>