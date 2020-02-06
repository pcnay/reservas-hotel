/*

Explicación de los tipos de datos en MySQL.
  http://mysql.conclase.net/curso/index.php?cap=005#

*/
-- Ejecutarlo desde una terminal de Mysql 
-- Se debe accesar al directorio donde se encuentra el "script.sql" y ejecutar el comenado "mysql" desde una terminal
-- $ mysql -u nom-usr -p NombreBaseDatos < script.sql
-- Otra Forma :
--    mysql -u usuario -p NombreBaseDatos
--    source script.sql ó \. script.sql
 
DROP DATABASE IF EXISTS reservas_hotel;

CREATE DATABASE IF NOT EXISTS reservas_hotel;
USE reservas_hotel;

CREATE USER 'reservas'@'localhost' IDENTIFIED BY 'pcnay2003';
GRANT ALL on reservas_hotel.* to 'reservas'  IDENTIFIED BY 'pcnay2003';


/* Tabla de Datos */
/* Se ocupa los 9 espacios, no se desperdicia espacio.*/
  /* CHAR(X) = cuando se define de algun tamaño pero no se utiliza, se despedicia espacio, por ejemplo
  CHAR(30), pero el valor de "title" es de 20, se desperdicio 60 espacios.
  VARCHAR(80) se adapta al tamaño del titulo.
  En la base de datos se puede guardar, videos, documentos en formato binario, pero creceria mucho.
  Se sube el video, documento, solo se graba la URL en el campo de la base de datos.
  */

/* Es una tabla catalogo */ 

CREATE TABLE t_Banner
(
  id INTEGER UNSIGNED PRIMARY KEY AUTO_INCREMENT,
  banner VARCHAR(100) NOT NULL,
	fecha DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);
