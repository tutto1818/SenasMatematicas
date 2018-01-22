<?php 

class Contenidos extends ConsultasBase
{
	private $id_cc,$Contenido,$id_tema,$id_status,$id_usuario,$consultas;
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

	public function contenidoTema($inicio)
	{
		$sql = "SELECT * FROM contenido c, tema t, status s WHERE c.id_status = s.id_s AND c.id_tema = t.id_tt AND t.tema = :x limit ".$inicio.",5 ";
		$contenidos = $this->get_Registro($sql,$this->tema);
		return $contenidos;
	}

	public function contenidoEspecifico()
	{
		$sql = "SELECT * FROM contenido c, tema t, usuarios u, status s WHERE c.id_status = s.id_s AND c.id_tema = t.id_tt AND c.id_usuario = u.id_u AND c.id_cc = :x";
		$contenidos = $this->get_Registro($sql,$this->id_cc);
		return $contenidos;
	}

		public function add_contenidos()
	{
		$sql = "INSERT INTO contenido (id_cc,titulo,contenido,img1,img2,img3,mapa,video,fecha_publicacion,id_tema,id_status,id_usuario)VALUES(NULL,:t,:c,:img1,:img2,:img3,:m,:v,NOW(),:tt,1,:id_u)";
		$img1 = Link::deruta() . "themes/img/" . $_POST['img1'];
		$img2 = Link::deruta() . "themes/img/" . $_POST['img2'];
		$img3 = Link::deruta() . "themes/img/" . $_POST['img3'];
		$mapa = Link::deruta() . "themes/img/" . $_POST['mapa'];
		$video = Link::deruta() . "themes/videos/" . $_POST['video'];

		try {
				$add = Link::deconexion()->prepare($sql);
				$add->execute(array(":t"=>$_POST['titulo'],":c"=>$_POST['contenido'],":img1"=>$img1,":img2"=>$img2,":img3"=>$img3,":m"=>$mapa,":v"=>$video,":tt"=>$_POST['tema'],":id_u"=>$_SESSION['id']));
			header('Location:' . Link::deruta() . "tema");
		} catch (Exception $e) {
			
		}
		
	}

	public function delete_contenido()
	{
		$sql = "DELETE FROM contenido WHERE id_cc = :x";
		$delete = Link::consultaEspecifica($sql,$this->id_cc);
		header('Location: ' . Link::deruta() . 'tema');
	}

			public function edit_contenidos()
	{
		$sql = "UPDATE contenido SET titulo = :t, id_tema = :tt, img1 = :img1, img2 = :img2, img3 = :img3, mapa = :m, video = :v, contenido = :c, id_usuario = :id_u WHERE id_cc = :x";

		$img1 = Link::deruta() . "themes/img/" . $_POST['img1'];
		$img2 = Link::deruta() . "themes/img/" . $_POST['img2'];
		$img3 = Link::deruta() . "themes/img/" . $_POST['img3'];
		$mapa = Link::deruta() . "themes/img/" . $_POST['mapa'];
		$video = Link::deruta() . "themes/videos/" . $_POST['video'];

		try {
				$add = Link::deconexion()->prepare($sql);
				$add->execute(array(
					":t"=>$_POST['titulo'],
					":c"=>$_POST['contenido'],
					":img1"=>$img1,
					":img2"=>$img2,
					":img3"=>$img3,
					":m"=>$mapa,
					":v"=>$video,
					":tt"=>$_POST['tema'],
					":id_u"=>$_SESSION['id'],
					":x"=>$this->id_cc));
			header('Location:' . Link::deruta() . "tema");
		} catch (Exception $e) {
			die($e->getMessage() . ' ' . $e->getLine());
		}
		
	}

}





 ?>