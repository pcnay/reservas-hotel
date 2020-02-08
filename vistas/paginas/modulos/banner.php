<?php
	$banner = ControladorBanner::ctrMostrarBanner();
	// class="bg-white" = Clase de Bootstrap
	// echo '<pre....  = Es como un console.log de JavaScript
	// echo '<pre class="bg-white" >'; print_r($banner); echo '</pre>';
?>
<!--=====================================
BANNER, efecto de Slides se van pasando las imganes en la pantalla.
======================================-->

<div class="banner container-fluid p-0">
	
	<div class="jd-slider fade-slider">
		
		<div class="slide-inner">
			
			<ul class="slide-area">

			<?php
				// Para desplegar la informacion de la tabla a la pantalla.
				foreach ($banner as $key => $value): ?>					
					<li>					
							<!-- <img src="img/banner01.jpg" width="100%"> -->
							<!-- $servidor = Se define en el controlador, para definir la ruta para las imagenes, ya que se defiene en la carpeta de "backend", se instancia en "plantilla.php" y se requiere en "banner.php", ademas es mejor manejarlo de esta manera para modificarlo sin problemas.
							<img src = "<?php //echo $servidor.$value["banner"]; ?>" width="100%">	
							Esta forma solo funciona con servidor local, para servidor en la nube utilizar la siguiente forma.
							-->
							<img src = "<?php echo '../backend/'.$value["banner"]; ?>" width="100%">

					</li>
 			<?php endforeach ?>

			</ul>

		</div>

	 	<div class="controller d-none">
		 	
			<a class="auto" href="#">

                <i class="fas fa-play fa-xs"></i>
                <i class="fas fa-pause fa-xs"></i>

            </a>

            <div class="indicate-area"></div>

	 	</div>

	 	<div class="verMas text-center bg-white rounded-circle d-none d-lg-block" vinculo="#planes">
    
    		<i class="fas fa-chevron-down"></i>	

    	</div>

	</div>

</div>
