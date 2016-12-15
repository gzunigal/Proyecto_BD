DELIMITER $$
--
-- Procedures
--
CREATE PROCEDURE `agregarComuna` (IN `id_region` INT, IN `nombre` VARCHAR(100))  NO SQL
BEGIN

SET @var1 = (SELECT COUNT(*) FROM communes WHERE communes.nombre_comuna = nombre);
SET @var2 = (SELECT COUNT(*) FROM regions WHERE regions.id = id_region);
IF @var1 = 0 AND @var2 = 1 THEN
INSERT INTO communes (communes.region_id, communes.nombre_comuna) VALUES (id_region, nombre);
END IF;
 
END$$

CREATE PROCEDURE `debug` (IN `msg` VARCHAR(255))  NO SQL
BEGIN
   SELECT CONCAT("*** ", msg) AS '*** DEBUG:'; 
END$$

CREATE PROCEDURE `eliminarComuna` (IN `id_comuna` INT)  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM communes WHERE communes.id = id_comuna);
IF @contador = 1 THEN
DELETE FROM communes WHERE communes.id = id_comuna;
END IF;
END$$

CREATE PROCEDURE `eliminarEmergencia` (IN `id_emergencia` INT)  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM emergencies WHERE emergencies.id = id_emergencia);
IF @contador = 1 THEN
DELETE FROM emergencies WHERE emergencies.id = id_emergencia;
END IF;
END$$

CREATE PROCEDURE `eliminarRegion` (IN `id_region` INT)  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM regions WHERE regions.id = id_region);
IF @contador = 1 THEN
DELETE FROM regions WHERE regions.id = id_region;
END IF;
END$$

CREATE PROCEDURE `eliminarUsuario` (IN `id_usuario` INT(11))  NO SQL
BEGIN
SET @count_users = (SELECT COUNT(ID) FROM users WHERE users.id = id_usuario);
IF @count_users = 1 THEN
DELETE FROM users WHERE users.id = id_usuario;
END IF;
END$$

CREATE PROCEDURE `modificarComuna` (IN `id_comuna` INT, IN `nombre` VARCHAR(100))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM communes WHERE communes.id = id_comuna);
IF @contador = 1 THEN
UPDATE communes SET communes.nombre_comuna = nombre WHERE communes.id = id_comuna;
END IF;
END$$

CREATE PROCEDURE `modificarEmergencia` (IN `id_nombre` VARCHAR(20), IN `gravedad` INT, IN `estado` INT, IN `descripcion` VARCHAR(200), IN `id_emergencia` INT)  NO SQL
BEGIN
DECLARE _existeemergencia INT DEFAULT 0;
SET _existeemergencia = (SELECT COUNT(*) FROM emergencies WHERE emergencies.id = id_emergencia);
IF _existeemergencia = 1 THEN
UPDATE emergencies SET emergencies.nombre_emergencia = id_nombre, emergencies.gravedad_emergencia = gravedad, emergencies.estado_emergencia = estado, emergencies.descripcion_emergencia = descripcion WHERE emergencies.id = id_emergencia;
END IF;
END$$

CREATE PROCEDURE `modificarRegion` (IN `id_region` INT, IN `nombre` VARCHAR(100))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM regions WHERE regions.id = id_region);
IF @contador = 1 THEN
UPDATE regions SET regions.nombre_region = nombre WHERE regions.id = id_region;
END IF;
END$$

CREATE PROCEDURE `modificarUsuario` (IN `id_usuario` INT(11), IN `id_comuna` INT(11), 
	IN `nombre_usr` VARCHAR(100), IN `name_usr` VARCHAR(100), IN `surname_usr` VARCHAR(100),
	IN `pass` VARCHAR(255), IN `disp` TINYINT(1), IN `administrador` TINYINT(1), 
	IN `telefono` INT(11), IN `mail` VARCHAR(100))  NO SQL
BEGIN
SET @count_users = (SELECT COUNT(id) FROM users WHERE users.id = id_usuario);
IF @count_users = 1 THEN
UPDATE users SET users.commune_id = id_comuna, users.nombre_usuario = nombre_usr, users.name = name_usr, users.surname = surname_usr, 
users.password = pass, users.disponibilidad = disp, users.admin = administrador, users.email = mail, users.phone = telefono WHERE users.id = id_usuario;
END IF;
END$$
