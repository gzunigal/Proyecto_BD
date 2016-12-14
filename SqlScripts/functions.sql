DELIMITER $$

CREATE FUNCTION `agregarEmergencia`(`id_user` INT, `id_com` INT, `nombre` VARCHAR(100), `fecha` DATE, `gravedad` INT, `estado` INT, `descripcion` VARCHAR(255)) RETURNS int(1)
    NO SQL
BEGIN
SET @contador = (SELECT COUNT(*) FROM emergencies WHERE emergencies.nombre_emergencia = nombre AND emergencies.user_id = id_user and emergencies.commune_id = id_com AND emergencies.fecha_emergencia = fecha);
IF @contador = 0 THEN
INSERT INTO emergencies (emergencies.user_id, emergencies.commune_id, emergencies.nombre_emergencia, emergencies.fecha_emergencia, emergencies.gravedad_emergencia, emergencies.estado_emergencia, emergencies.descripcion_emergencia) VALUES(id_user, id_com, nombre, fecha, gravedad, estado, descripcion);
RETURN 1;
END IF;
RETURN 0;
END

$$

CREATE FUNCTION `agregarUsuario`(`run_user` INT, `id_comuna` INT(11), `nick_usr` VARCHAR(100), `name_usr` VARCHAR(100), `surname_usr` VARCHAR(100), `pass` VARCHAR(255), `disp` TINYINT(1), `administrador` TINYINT(1), `telefono` INT(11), `mail` VARCHAR(100)) RETURNS int(1)
    NO SQL
BEGIN
SET @count_users = (SELECT COUNT(*) FROM users WHERE users.run = run_user);
SET @count_emails = (SELECT COUNT(*) FROM emails WHERE emails.email = mail);
IF @count_emails = 0 && @count_users = 0 THEN 
INSERT INTO users (users.run, users.commune_id, users.nombre_usuario, users.name, users.surname, users.password, users.disponibilidad, users.admin) VALUES (run_user, id_comuna, nick_usr, name_usr, surname_usr, pass, disp, administrador);
SET @id_user = (SELECT id FROM users ORDER BY id DESC LIMIT 1);
INSERT INTO emails (email, user_id) VALUES (mail, @id_user);
INSERT INTO phones (phone, user_id) VALUES (telefono, @id_user);
RETURN 1;
END IF;
RETURN 0;
END

$$

CREATE FUNCTION `asigna_usuario_task`(`id_task_2` INT, `id_user_2` INT) RETURNS int(11)
    NO SQL
BEGIN

SET @disp_usr = (SELECT disponibilidad
		 		 FROM users
		 		 WHERE users.id = id_user_2);

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
    UPDATE users 
    SET disponibilidad=0
    WHERE users.id = id_user_2;
    RETURN 1;
END IF;
END IF;
RETURN 0;

END

$$
