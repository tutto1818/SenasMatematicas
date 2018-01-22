<?php 


class ConsultasBase extends Link 
{
	private $consultas;

	public function __construct()
	{
		$this->consultas = array();
	}

	public function get_Registros($tabla,$inicio)
	{
		$sql = "SELECT * FROM ".$tabla." limit ".$inicio.",5 ";
		$usuarios = self::deconexion()->prepare($sql);
		$usuarios->execute(array());
		if($usuarios->rowCount()>0)
		{
			while ($fila = $usuarios->fetch(PDO::FETCH_ASSOC)) {
				$this->consultas[] = $fila;
			}
		}else{echo 'NO HAY REGISTROS PARA MOSTRAR';}
		return $this->consultas;
	}

	public function get_Registro($sql,$id)
	{
		$usuario = self::consultaEspecifica($sql,$id);
			while($fila = $usuario->fetch(PDO::FETCH_ASSOC)){
				$this->consultas[] = $fila;
				}
			return $this->consultas;
	}

		public function change_status($tabla,$condicion,$id,$dir)
	{

		$sql = "SELECT id_status FROM ".$tabla." WHERE ".$condicion." = :x";
		$status = Link::consultaEspecifica($sql,$id);
			while($fila = $status->fetch(PDO::FETCH_ASSOC)){
				$st = $fila['id_status'];
			$st == 1 ? $cambio = 0 : $cambio = 1;
			}
		$sql2 = 'UPDATE '.$tabla.' SET id_status = '.$cambio.' WHERE '.$condicion.' = :x';
		
		self::consultaEspecifica($sql2,$id);
		header('Location: ' . Link::deruta() . $dir);
	}
}

 ?>