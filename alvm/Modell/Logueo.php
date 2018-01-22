<?php 

class Logueo extends Link 
{
	public function log()
	{
		if(empty($_POST['usuario']) or empty($_POST['clave']))
		{
			header('Location: ' . Link::deruta . "acceso/ingreso/empty");
		}
		else
		{
			$sql = "SELECT * FROM usuarios u, status s, rol r WHERE u.id_status = s.id_s AND u.id_rol = r.id_r AND usuario = :u AND clave = :c";
			$clave = md5(sha1($_POST['clave']));
			$logueo = self::deconexion()->prepare($sql);
			$logueo->execute(array(":u"=>$_POST['usuario'],":c"=>$clave));
			if($logueo->rowCount()==1){
				while($fila = $logueo->fetch(PDO::FETCH_ASSOC)){
					$_SESSION['id'] = $fila['id_u'];
					$_SESSION['nombre'] = $fila['nombre'];
					$_SESSION['usuario'] = $fila['usuario'];
					$_SESSION['apellido'] = $fila['apellido'];
					$_SESSION['status'] = $fila['status'];
					$_SESSION['rol'] = $fila['rol'];
				}
				if($_SESSION['status'] == 'Activo')
				{
					if($_SESSION['rol'] == 'Administrador')
					{
						header('Location: ' . Link::deruta() . "admin");
					}
					else
					{
						header('Location: ' . Link::deruta() . "user");
					}
				}
				else
				{
					header('Location: ' . Link::deruta() . "reactivarCuenta");
				}
			}
			else
			{
				header('Location: ' . Link::deruta() . 'acceso/ingreso/msj');
			}
		}
	}

	public static function deRecuperacion()
	{
		$sql = "SELECT * FROM usuarios u, rol r WHERE u.id_rol = r.id_r AND correo = :correo AND preg1 = :preg1 AND preg2 = :preg2 AND preg3 = :preg3";
		$recuperar = Link::deconexion()->prepare($sql);
		$recuperar->execute(array(":correo"=>$_POST['correo'],":preg1"=>$_POST['preg1'],":preg2"=>$_POST['preg2'],":preg3"=>$_POST['preg3']));
		if($recuperar->rowCount()==1){
			while ($fila = $recuperar->fetch()) {
				$_SESSION['rol'] = $fila['rol'];
				$_SESSION['usuario'] = $fila['usuario'];
			}
				if($_SESSION['rol'] == 'Administrador'){
					header('Location:' . Link::deruta() . 'admin');
				}else{
					header('Location:' . Link::deruta() . 'user');
				}
		}else{
			header('Location:' . Link::deruta() . 'acceso/recuperacion/ad');
			exit();
		}
	}

	public static function deSalida()
	{
		session_destroy();
		header('Location: ' . Link::deruta() . '');
	}
}



 ?>