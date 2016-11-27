DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `agregarComuna` (IN `id_region` INT, IN `nombre` VARCHAR(100))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM COMMUNES WHERE COMMUNES.NOMBRE_COMUNA = nombre);
SET @contador2 = (SELECT COUNT(*) FROM REGIONS WHERE REGIONS.ID_REGION = id_region);
IF @contador = 0 and @contador2 = 1 THEN
INSERT INTO COMMUNES (COMMUNES.ID_COMMUNE, COMMUNES.ID_REGION, COMMUNES.NOMBRE_COMUNA) VALUES (@contador3, id_region, nombre);
call debug("comuna agregada");
ELSE
call debug("El nombre de la comuna ya se encuentra registrado o la ID de la region es invalido");
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `agregarEmergencia` (IN `id_user` INT, IN `id_com` INT, IN `nombre` VARCHAR(100), IN `fecha` DATE, IN `gravedad` INT, IN `estado` INT, IN `descripcion` VARCHAR(255))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM EMERGENCIES WHERE EMERGENCIES.NOMBRE = nombre AND EMERGENCIES.ID_USER = id_user and EMERGENCIES.ID_COMMUNE = id_com AND EMERGENCIES.FECHA_EMERGENCIA = fecha);
IF @contador = 0 THEN
INSERT INTO EMERGENCIES (EMERGENCIES.ID_USER, EMERGENCIES.ID_COMMUNE, EMERGENCIES.NOMBRE, EMERGENCIES.FECHA_EMERGENCIA, EMERGENCIES.GRAVEDAD, EMERGENCIES.ESTADO_EMERGENCIA, EMERGENCIES.DESCRIPCION_EMERGENCIA) VALUES(id_user, id_com, nombre, fecha, gravedad, estado, descripcion);
call debug("se creo la emergencia");
END IF;
IF @contador > 0 THEN
CALL debug("Ya existe esta emergencia");
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `agregarRegion` (IN `nombre` VARCHAR(100))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM REGIONS WHERE REGIONS.NOMBRE_REGION = nombre);
IF @contador = 0 THEN
INSERT INTO REGIONS (REGIONS.NOMBRE_REGION) VALUES (nombre);
call debug("Region agregada");
ELSE
call debug("El nombre de la region ya se encuentra registrado");
END IF;
END$$

CREATE DEFINER=`fabian`@`%` PROCEDURE `agregarUsuario` (IN `id_comuna` INT(11), IN `nombre_usr` VARCHAR(100), IN `pass` VARCHAR(255), IN `disp` TINYINT(1), IN `administrador` TINYINT(1), IN `telefono` INT(11), IN `mail` VARCHAR(100))  NO SQL
BEGIN
SET @count_emails = (SELECT COUNT(EMAIL) FROM EMAILS WHERE EMAIL = mail);
IF @count_emails = 0 THEN BEGIN
INSERT INTO USERS (ID_COMMUNE,NOMBRE_USUARIO,PASSWORD,DISPONIBILIDAD,ADMIN) VALUES (id_comuna,nombre_usr,pass,disp,administrador);
SET @id_user = (SELECT ID_USER FROM USERS ORDER BY ID_USER DESC LIMIT 1);
INSERT INTO EMAILS (EMAIL,ID_USER) VALUES (mail,@id_user);
INSERT INTO PHONE_NUMBERS (PHONE,ID_USER) VALUES (telefono,@id_user);
CALL debug("Usuario agregado.");
END;
ELSE CALL debug('El mail ingresado ya existe');
END IF;
END$$

CREATE DEFINER=`gonzalo`@`%` PROCEDURE `asigna_usuario_task` (IN `id_task_2` INT, IN `id_user_2` INT)  NO SQL
BEGIN

SET @disp_usr = 
(SELECT DISPONIBILIDAD
FROM USERS
WHERE USERS.ID_USER = id_user_2);

IF @disp_usr = 1 THEN

SET @nivel_tarea = 
(SELECT REQUIERE.NIVEL_ABILITY
FROM REQUIERE
WHERE REQUIERE.ID_TASK=id_task_2);

SET @nivel_usuario = 
(SELECT TIENE.NIVEL_ABILITY
FROM TIENE
WHERE TIENE.ID_USER=id_user_2);

SET @habil_req =
(SELECT COUNT(*)
FROM REQUIERE, TIENE
WHERE TIENE.ID_USER=id_user_2
AND TIENE.ID_ABILITY=REQUIERE.ID_ABILITY);

IF @nivel_tarea <= @nivel_usuario THEN
	IF @habil_req > 0 THEN
        INSERT INTO REALIZA(ID_TASK, ID_USER)
        VALUES(id_task_2, id_user_2);
        UPDATE USERS 
        SET DISPONIBILIDAD=0
        WHERE USERS.ID_USER=id_user_2;
	END IF;
END IF;
END IF;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `debug` (IN `msg` VARCHAR(255))  NO SQL
BEGIN
   SELECT CONCAT("*** ", msg) AS '*** DEBUG:'; 
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarComuna` (IN `id_comuna` INT)  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM COMMUNES WHERE COMMUNES.ID_COMMUNE = id_comuna);
IF @contador = 1 THEN
DELETE FROM COMMUNES WHERE COMMUNES.ID_COMMUNE = id_comuna;
call debug("Se elimino la comuna");
ELSEIF @contador = 0 THEN
call debug("No existe tal comuna");
ELSE
call debug("Algo está mal y hay más de una region con esa ID, cosa imposible porque es primary xD, pero el debug va por si a caso.");
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarEmergencia` (IN `id_emergencia` INT)  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM EMERGENCIES WHERE EMERGENCIES.ID_EMERGENCY = id_emergencia);
IF @contador = 1 THEN
DELETE FROM EMERGENCIES WHERE EMERGENCIES.ID_EMERGENCY = id_emergencia;
call debug("Se elimino la emergencia");
ELSEIF @contador = 0 THEN
call debug("No existe tal emergencia");
ELSE
call debug("Algo está mal y hay más de una emergencia con esa ID, cosa imposible porque es primary xD, pero el debug va por si a caso.");
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarRegion` (IN `id_region` INT)  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM REGIONS WHERE REGIONS.ID_REGION = id_region);
IF @contador = 1 THEN
DELETE FROM REGIONS WHERE  REGIONS.ID_REGION = id_region;
call debug("Se elimino la region");
ELSEIF @contador = 0 THEN
call debug("No existe tal region");
ELSE
call debug("Algo está mal y hay más de una region con esa ID, cosa imposible porque es primary xD, pero el debug va por si a caso.");
END IF;
END$$

CREATE DEFINER=`fabian`@`%` PROCEDURE `eliminarUsuario` (IN `id_usuario` INT(11))  NO SQL
BEGIN
SET @count_users = (SELECT COUNT(ID_USER) FROM USERS WHERE ID_USER = id_usuario);
IF @count_users = 1 THEN BEGIN
DELETE FROM USERS WHERE ID_USER=id_usuario;
CALL debug("Usuario eliminado.");
END;
ELSE CALL debug("La ID de usuario ingresada es inválida.");
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarComuna` (IN `id_comuna` INT, IN `nombre` VARCHAR(100))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM COMMUNES WHERE COMMUNES.ID_COMMUNE = id_comuna);
IF @contador = 1 THEN
UPDATE COMMUNES SET COMMUNES.NOMBRE_COMUNA = nombre WHERE COMMUNES.ID_COMMUNE = id_comuna;
call debug("Se modifico el nombre de la comuna");
ELSE
call debug("La ID de la comuna señalada no existe");
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarEmergencia` (IN `id_nombre` VARCHAR(20), IN `gravedad` INT, IN `estado` INT, IN `descripcion` VARCHAR(200), IN `id_emergencia` INT)  NO SQL
BEGIN
DECLARE _existeemergencia INT DEFAULT 0;
SET _existeemergencia = (SELECT COUNT(*) FROM EMERGENCIES WHERE EMERGENCIES.ID_EMERGENCY = id_emergencia);
IF _existeemergencia = 1 THEN
UPDATE EMERGENCIES SET EMERGENCIES.NOMBRE = id_nombre, EMERGENCIES.GRAVEDAD = gravedad, EMERGENCIES.ESTADO_EMERGENCIA = estado, EMERGENCIES.DESCRIPCION_EMERGENCIA = descripcion WHERE EMERGENCIES.ID_EMERGENCY = id_emergencia;
call debug("Se modifico la emergencia");
END IF;
IF _existeemergencia = 0 THEN
CALL debug("No existe esa emergencia");
END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarRegion` (IN `id_region` INT, IN `nombre` VARCHAR(100))  NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM REGIONS WHERE REGIONS.ID_REGION = id_region);
IF @contador = 1 THEN
UPDATE REGIONS SET REGIONS.NOMBRE_REGION = nombre WHERE REGIONS.ID_REGION = id_region;
call debug("Se modifico el nombre de la region");
ELSE
call debug("La ID de la region señalada no existe");
END IF;
END$$

CREATE DEFINER=`fabian`@`%` PROCEDURE `modificarUsuario` (IN `id_usuario` INT(11), IN `id_comuna` INT(11), IN `nombre_usr` VARCHAR(100), IN `pass` VARCHAR(255), IN `disp` TINYINT(1), IN `administrador` TINYINT(1), IN `telefono` INT(11), IN `mail` VARCHAR(100))  NO SQL
BEGIN
SET @count_emails = (SELECT COUNT(EMAIL) FROM EMAILS WHERE EMAIL = mail);
SET @count_users = (SELECT COUNT(ID_USER) FROM USERS WHERE ID_USER = id_usuario);
IF @count_emails = 0 AND @count_users = 1 THEN BEGIN
UPDATE USERS SET ID_COMMUNE=id_comuna,NOMBRE_USUARIO=nombre_usr,PASSWORD=pass,DISPONIBILIDAD=disp,ADMIN=administrador WHERE ID_USER=id_usuario;
UPDATE EMAILS SET EMAIL=mail WHERE ID_USER=id_usuario;
UPDATE PHONE_NUMBERS SET PHONE=telefono WHERE ID_USER=id_usuario;
CALL debug("Usuario modificado.");
END;
ELSE CALL debug("El e-mail ingresado ya está siendo usado o el ID de usuario ingresado no es válido.");
END IF;
END$$