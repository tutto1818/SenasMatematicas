<?php 

class Comentarios extends Link
{
	private $id_c,$comentario,$fecha_publicacion,$id_contenido,$id_usuario;
	private $consulta;

	function __construct()
	{
		$this->consulta = array();
	}

	public function set($atributo,$contenido)
	{
		$this->$atributo = $contenido;
	} 

	public function get($atributo)
	{
		return $this->$atributo;
	}

	public function get_comentarios($inicio)
	{
		$sql = "SELECT * FROM comentario c, contenido cc, usuarios u WHERE c.id_usuario = u.id_u AND c.id_contenido = cc.id_cc AND c.id_contenido = :x ORDER BY c.id_c desc limit ".$inicio.", 2";

		$coment = self::consultaEspecifica($sql,$this->id_contenido);
			if($coment->rowCount()>0){
				while($fila = $coment->fetch()){
					$this->consulta[] = $fila;
				}
			}else{
				echo '<p>No hay comentarios sobre este contenido.</p>';
			}
		return $this->consulta;
	}

	public function add_comentario($id_contenido)
	{
		$sql = 'INSERT INTO comentario(id_c,comentario,fecha_publicacion,id_contenido,id_usuario)VALUES(NULL,:c,NOW(),:id_cc,:id_u)';
		$comentario = '<p class="parrafo">'.$_POST['comentario'].'</p>';
		$add = Link::deconexion()->prepare($sql);
		$add->execute(array(":c"=>$comentario,":id_cc"=>$id_contenido,":id_u"=>$_SESSION['id']));
		header('Location: ' . Link::deruta() . "teoria/" . $id_contenido);
	} 

	public function delete_comentario()
	{
		$sql = 'DELETE FROM comentario WHERE id_c = :x';
		echo $ruta;
		$delete = self::consultaEspecifica($sql,$this->id_c);
		header('Location: ' . Link::deruta() . "contenidos");
	}


}



 ?>