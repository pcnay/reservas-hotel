<?php
	// Mostrar Banner
	class ControladorBanner
	{
		static public function ctrMostrarBanner()
		{
			$tabla = "t_Banner";
			$respuesta = ModeloBanner::mdlMostrarBanner($tabla);
			return $respuesta;
		}
	}
?>