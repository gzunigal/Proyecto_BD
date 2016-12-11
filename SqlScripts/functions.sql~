DELIMITER $$

CREATE FUNCTION `agregarEmergencia`(`id_user` INT, `id_com` INT, `nombre` VARCHAR(100), `fecha` DATE, `gravedad` INT, `estado` INT, `descripcion` VARCHAR(255)) RETURNS int(1)
    NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM EMERGENCIES WHERE emergencies.nombre_emergencia = nombre AND emergencies.user_id = id_user and emergencies.commune_id = id_com AND emergencies.fecha_emergencia = fecha);
IF @contador = 0 THEN
INSERT INTO EMERGENCIES (EMERGENCIES.user_id, EMERGENCIES.commune_id, EMERGENCIES.nombre_emergencia, EMERGENCIES.FECHA_EMERGENCIA, EMERGENCIES.GRAVEDAD_EMERGENCIA, EMERGENCIES.ESTADO_EMERGENCIA, EMERGENCIES.DESCRIPCION_EMERGENCIA) VALUES(id_user, id_com, nombre, fecha, gravedad, estado, descripcion);
RETURN 1;
END IF;
RETURN 0;
END

$$

CREATE FUNCTION `agregarUsuario`(`run_user` INT, `id_comuna` INT(11), `nick_usr` VARCHAR(100), `name_usr` VARCHAR(100), `surname_usr` VARCHAR(100), `pass` VARCHAR(255), `disp` TINYINT(1), `administrador` TINYINT(1), `telefono` INT(11), `mail` VARCHAR(100)) RETURNS int(1)
    NO SQL
BEGIN
SET @count_users = (SELECT COUNT(*) FROM USERS WHERE USERS.RUN = run_user);
SET @count_emails = (SELECT COUNT(*) FROM EMAILS WHERE EMAILS.EMAIL = mail);
IF @count_emails = 0 && @count_users = 0 THEN 
INSERT INTO USERS (RUN, COMMUNE_ID, NOMBRE_USUARIO, NAME, SURNAME, PASSWORD, DISPONIBILIDAD, ADMIN) VALUES (run_user, id_comuna, nick_usr, name_usr, surname_usr, pass, disp, administrador);
SET @id_user = (SELECT ID FROM USERS ORDER BY ID DESC LIMIT 1);
INSERT INTO EMAILS (EMAIL, USER_ID) VALUES (mail, @id_user);
INSERT INTO PHONE_NUMBERS (PHONE, USER_ID) VALUES (telefono, @id_user);
RETURN 1;
END IF;
RETURN 0;
END

$$

CREATE FUNCTION `asigna_usuario_task`(`id_task_2` INT, `id_user_2` INT) RETURNS int(11)
    NO SQL
BEGIN

SET @disp_usr = (SELECT DISPONIBILIDAD
		 		 FROM USERS
		 		 WHERE USERS.ID = id_user_2);

IF @disp_usr = 1 THEN

SET @nivel_tarea = (SELECT abilities_tasks.nivel_requerido
					FROM abilities_tasks
					WHERE abilities_tasks.task_id = id_task_2);

SET @nivel_usuario = (SELECT abilities_users.nivel_habilidad
					  FROM abilities_users
					  WHERE abilities_users.user_id = id_user_2);

IF @nivel_tarea <= @nivel_usuario THEN
    INSERT INTO tasks_users(task_id, user_id)
    VALUES(id_task_2, id_user_2);
    UPDATE USERS 
    SET DISPONIBILIDAD=0
    WHERE USERS.ID = id_user_2;
    RETURN 1;
END IF;
END IF;
RETURN 0;

END

$$
