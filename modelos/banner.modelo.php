<?php
	require_once "conexion.php";
	class ModeloBanner
	{
		// Mostrar Banner
		static public function mdlMostrarBanner($tabla)
		{
			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt->execute();
			return $stmt->fetchAll(); // Retorna varios renglones
			// Aunque retorna y no continua, pero si por alguna razon no retorna, ejecuta las dos instrucciones.
			$stmt->close();
			$stmt=null;
		}
	}
?>