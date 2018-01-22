<?php 

class Usuarios extends ConsultasBase
{
	private $id_u, $nombre, $apellido, $correo, $carnet, $usuario, $clave;
	public function __construct()
	{
		parent:: __construct();
	}

	public function set($atributo, $contenido)
	{
		$this->$atributo = $contenido;
	}

	public function get($atributo)
	{
		return $this->$atributo;
	}

	public function get_Usuario($condicion)
	{
		$sql = "SELECT * FROM usuarios u, status s, rol r, genero g, turno t, pnf p WHERE u.id_status = s.id_s AND u.id_rol = r.id_r AND u.id_genero = g.id_g AND u.id_turno = t.id_t AND u.id_pnf = p.id_p AND ".$condicion." = :x";
		return $this->get_Registro($sql,$this->$condicion);
	}

	public function add_usuario()
	{
		$sql1 = "SELECT * FROM usuarios WHERE id_u = :x";
		$sql2 = "SELECT * FROM usuarios WHERE correo = :x";

		try {
			if(self::consultaEspecifica($sql1,$_POST['usuario'])>0){
			header('Location: ' . self::deruta() . 'acceso/registro/ur');
			}
		} catch (Exception $e) {
			die('error ' . $e->getMessage() . " " . $e->getLine());
		}

		try {
			if(self::consultaEspecifica($sql2,$_POST['correo'])>0){
			header('Location: ' . self::deruta() . 'acceso/registro/cr');
			}
		} catch (Exception $e) {
			die('error ' . $e->getMessage() . " " . $e->getLine());
		}

		$sql = "INSERT INTO usuarios(id_u,nombre,apellido,correo,carnet,usuario,clave,preg1,preg2,preg3,fecha_ingreso,id_genero,id_rol,id_turno,id_pnf,id_status)VALUES(NULL,:n,:a,:correo,:carnet,:u,:c,:pa,:pb,:pc,NOW(),:g,:r,:t,:pnf,1)";
		try {
			$clave = md5(sha1($_POST['clave']));
			$edit = self::deconexion()->prepare($sql);
			$edit->execute(array(
				":n"=>$_POST['nombre'],
				":a"=>$_POST['apellido'],
				":correo"=>$_POST['correo'],
				":carnet"=>$_POST['carnet'],
				":u"=>$_POST['usuario'],
				":c"=>$clave,
				":pa"=>$_POST['preg1'],
				":pb"=>$_POST['preg2'],
				":pc"=>$_POST['preg3'],
				":g"=>$_POST['genero'],
				":r"=>$_POST['rol'],
				":t"=>$_POST['turno'],
				":pnf"=>$_POST['pnf']));
			header('Location:' . Link::deruta() . "acceso/ingreso");
			
		} catch (Exception $e) {
			die('Error ' . $e->GetMessage() . " " . $e->getLine());
		}
		
	}

		public function edit_perfil()
	{
		$sql = "UPDATE usuarios SET nombre = :n, apellido = :a, correo = :correo, carnet = :carnet, preg1 = :p1, preg2 = :p2, preg3 = :p3, id_genero = :g, id_turno = :t, id_pnf = :pnf WHERE id_u = :x";
		try {
			
			$edit = self::deconexion()->prepare($sql);
			$edit->execute(array(":n"=>$_POST['nombre'],":a"=>$_POST['apellido'],":correo"=>$_POST['correo'],":carnet"=>$_POST['carnet'],":p1"=>$_POST['preg1'],":p2"=>$_POST['preg2'],":p3"=>$_POST['preg3'],":g"=>$_POST['genero'],":t"=>$_POST['turno'],":pnf"=>$_POST['pnf'],":x"=>$_SESSION['id']));
			header('Location:' . Link::deruta() . "perfil");
			
		} catch (Exception $e) {
			die('Error ' . $e->GetMessage() . " " . $e->getLine());
		}
	}

		public function edit_clave()
	{
		$sql = "UPDATE usuarios SET clave = :c WHERE id_u = :x";
		$clave = md5(sha1($_POST['clave']));
		try {
			$newclave = self::deconexion()->prepare($sql);
			$newclave->execute(array(":c"=>$clave,":x"=>$this->id_u));
			header('Location:' . Link::deruta() . "perfil");
		} catch (Exception $e) {
			die('ERROR ' . $e->GetMessage() . " " . $e->getLine());
		}

	}

		public function delete_usuario()
	{
		$sql = "DELETE FROM usuarios WHERE id_u = :x";
		try {
			$delete = self::consultaEspecifica($sql,$this->id_u);
			if(isset($_SESSION['rol']) AND $_SESSION['rol'] == 'Administrador' AND $_SESSION['id'] != $this->id_u){
					header('Location: ' . Link::deruta() . "admin");
			}else{
				session_destroy();
				header('Location: ' . Link::deruta() . "");
			}
		} catch (Exception $e) {
			die('Error ' . $e->GetMessage() . " " . $e->getLine());
		}
	}
	

}









 ?>