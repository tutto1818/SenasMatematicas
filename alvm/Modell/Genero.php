<?php 

class Genero extends Link 
{
		private $id_g,$genero,$consultas;

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

	public function get_Usuarios_genero($inicio)
	{
		$sql = "SELECT * FROM usuarios u, genero g WHERE u.id_genero = g.id_g AND g.genero = :x limit ".$inicio.",5 ";
		$grupos = self::consultaEspecifica($sql,$this->genero);
			while($fila = $grupos->fetch()){
				$this->consultas[] = $fila;
			}
		return $this->consultas;
	}
}


 ?>