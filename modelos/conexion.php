<?php
	class Conexion
	{
		static public function conectar()
		{
			$link = new PDO("mysql:host=localhost;dbname=reservas_hotel",
												"reservas",
												"pcnay2003");
			$link->exec("set names utf8");
			return $link;
		}
	}
?>