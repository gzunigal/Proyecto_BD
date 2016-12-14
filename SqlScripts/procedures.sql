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
SET @contador = (SELECT COUNT(*) FROM COMMUNES WHERE COMMUNES.ID = id_comuna);
IF @contador = 1 THEN
DELETE FROM COMMUNES WHERE COMMUNES.ID = id_comuna;
END IF;
END$$

CREATE PROCEDURE `eliminarEmergencia` (IN `id_emergencia` INT)  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM EMERGENCIES WHERE EMERGENCIES.ID = id_emergencia);
IF @contador = 1 THEN
DELETE FROM EMERGENCIES WHERE EMERGENCIES.ID = id_emergencia;
END IF;
END$$

CREATE PROCEDURE `eliminarRegion` (IN `id_region` INT)  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM REGIONS WHERE REGIONS.ID = id_region);
IF @contador = 1 THEN
DELETE FROM REGIONS WHERE  REGIONS.ID = id_region;
END IF;
END$$

CREATE PROCEDURE `eliminarUsuario` (IN `id_usuario` INT(11))  NO SQL
BEGIN
SET @count_users = (SELECT COUNT(ID) FROM USERS WHERE ID = id_usuario);
IF @count_users = 1 THEN
DELETE FROM USERS WHERE ID=id_usuario;
END IF;
END$$

CREATE PROCEDURE `modificarComuna` (IN `id_comuna` INT, IN `nombre` VARCHAR(100))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM COMMUNES WHERE COMMUNES.ID = id_comuna);
IF @contador = 1 THEN
UPDATE COMMUNES SET COMMUNES.NOMBRE_COMUNA = nombre WHERE COMMUNES.ID = id_comuna;
END IF;
END$$

CREATE PROCEDURE `modificarEmergencia` (IN `id_nombre` VARCHAR(20), IN `gravedad` INT, IN `estado` INT, IN `descripcion` VARCHAR(200), IN `id_emergencia` INT)  NO SQL
BEGIN
DECLARE _existeemergencia INT DEFAULT 0;
SET _existeemergencia = (SELECT COUNT(*) FROM EMERGENCIES WHERE EMERGENCIES.ID = id_emergencia);
IF _existeemergencia = 1 THEN
UPDATE EMERGENCIES SET EMERGENCIES.NOMBRE_EMERGENCIA = id_nombre, EMERGENCIES.GRAVEDAD_EMERGENCIA = gravedad, EMERGENCIES.ESTADO_EMERGENCIA = estado, EMERGENCIES.DESCRIPCION_EMERGENCIA = descripcion WHERE EMERGENCIES.ID = id_emergencia;
END IF;
END$$

CREATE PROCEDURE `modificarRegion` (IN `id_region` INT, IN `nombre` VARCHAR(100))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM REGIONS WHERE REGIONS.ID = id_region);
IF @contador = 1 THEN
UPDATE REGIONS SET REGIONS.NOMBRE_REGION = nombre WHERE REGIONS.ID = id_region;
END IF;
END$$

CREATE PROCEDURE `modificarUsuario` (IN `id_usuario` INT(11), IN `id_comuna` INT(11), 
	IN `nombre_usr` VARCHAR(100), IN `name_usr` VARCHAR(100), IN `surname_usr` VARCHAR(100),
	IN `pass` VARCHAR(255), IN `disp` TINYINT(1), IN `administrador` TINYINT(1), 
	IN `telefono` INT(11), IN `mail` VARCHAR(100))  NO SQL
BEGIN
SET @count_emails = (SELECT COUNT(EMAIL) FROM EMAILS WHERE EMAIL = mail);
SET @count_users = (SELECT COUNT(ID) FROM USERS WHERE ID = id_usuario);
IF @count_emails = 0 AND @count_users = 1 THEN
UPDATE USERS SET COMMUNE_ID=id_comuna, NOMBRE_USUARIO=nombre_usr, NAME=name_usr, SURNAME=surname_usr, 
PASSWORD=pass, DISPONIBILIDAD=disp, ADMIN=administrador WHERE ID=id_usuario;
UPDATE EMAILS SET EMAIL=mail WHERE USER_ID = id_usuario;
UPDATE PHONE_NUMBERS SET PHONE = telefono WHERE USER_ID = id_usuario;
END IF;
END$$
