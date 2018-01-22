<?php 

class Temas extends ConsultasBase
{
	private $id_tt,$tema,$descripcion,$logo,$fecha_publicacion,$id_usuario,$consultas;

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

	public function temaUnico($condicion)
	{
		$sql = "SELECT * FROM tema t, usuarios u WHERE t.id_usuario = u.id_u AND ".$condicion." = :x";
		$tema = $this->get_Registro($sql,$this->$condicion);
		return $tema;
	}

	public function add_tema()
	{
		$sql = "INSERT INTO tema(id_tt,tema,descripcion,logo,fecha_publicacion,id_usuario)VALUES(NULL,:t,:d,:l,NOW(),:id_usuario)";
		$logo = Link::deruta() . 'themes/img/'.$_POST['logo'] ;
		
		try {
			$add = self::deconexion()->prepare($sql);
			$add->execute(array(":t"=>$_POST['tema'],":d"=>$_POST['descripcion'],":l"=>$logo,":id_usuario"=>$_SESSION['id']));
			header('Location: ' . Link::deruta() . "tema/agregar");
		} catch (Exception $e) {
			die('ERROR ' . $e->getMessage() . " " . $e->getLine());
		}
	}

	public function delete_tema()
	{
		$sql = "DELETE FROM tema WHERE id_tt = :x";
		$delete = Link::consultaEspecifica($sql,$this->id_tt);
		header("Location: " . Link::deruta() . "tema/precalculo");
	}

	public function edit_tema()
	{
		$sql = "UPDATE tema SET tema = :t, descripcion = :d , logo = :l WHERE id_tt = :id";
		$logo = Link::deruta() . "themes/img/" . $_POST['logo'];
		try {
			$edit = self::deconexion()->prepare($sql);
			$edit->execute(array(":t"=>$_POST['tema'],":d"=>$_POST['descripcion'],":l"=>$logo,":id"=>$this->id_tt));

			//header('Location: ' . Link::deruta() . "admin");
		} catch (Exception $e) {
			die('ERROR ' . $e->getMessage() . " " . $e->getLine());
		}
	}

}


 ?>
