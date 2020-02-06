USE reservas_hotel;

/*
ALTER TABLE `t_Refaccion`
	ADD medidas VARCHAR(45) NULL; 
*/

/*
ALTER TABLE `t_Equipo`
	MODIFY num_serie VARCHAR(45) UNIQUE NOT NULL; /* Evalua que sea único en esta tabla. */
  
INSERT INTO t_Banner (id,banner,fecha) VALUES
  (1,'vistas/img/banner/banner01.jpg',CURRENT_TIMESTAMP),
	(2,'vistas/img/banner/banner02.jpg',CURRENT_TIMESTAMP),
	(3,'vistas/img/banner/banner03.jpg',CURRENT_TIMESTAMP);

