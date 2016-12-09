DELIMITER $$
-- TRIGGER 1
-- Genera una notificación si se envía una solicitud a un usuario.
CREATE TRIGGER `notificacion_request` AFTER INSERT ON `requests` FOR EACH ROW BEGIN 

SET @id_user_2 	= (SELECT NEW.user_id);
SET @cont_notif = (SELECT NEW.nombre_solicitud);

INSERT INTO NOTIFICATIONS(URL, CONTENIDO, FECHA)
			SELECT '', @cont_notif, NOW();

SET @id_notificacion_2 = (SELECT ID
						  FROM NOTIFICATIONS
						  ORDER BY ID DESC
						  LIMIT 1);

INSERT INTO RECIBE_NOTIFICACION(ID_USER, ID_NOTIFICATION)
			SELECT @id_user_2, @id_notificacion_2;

END
$$


-- TRIGGER 2
-- Genera una notificación si se elimina un administrador o un encargado de emergencia
CREATE TRIGGER `notificacion_delete_user` BEFORE DELETE ON `users` FOR EACH ROW BEGIN

IF OLD.ADMIN=1 THEN
-- Si es administrador, necesito ver si el usuario eliminado definió una emergencia.
	SET @bool = (SELECT COUNT(*)
				 FROM emergencies
				 WHERE emergencies.user_id = OLD.id);
	-- Si definió una emergencia:
	IF @bool>0 THEN
		-- Se crea una notificación.
		INSERT INTO NOTIFICATIONS(URL, CONTENIDO, FECHA) 
		SELECT '', 'Se necesita un administrador', NOW();

		SET @id_notificacion_2 = ( SELECT ID 
								   FROM NOTIFICATIONS
								   ORDER BY ID DESC 
								   LIMIT 1); 
		-- Se envía la notificación a todos los administradores.
		INSERT INTO NOTIFICATIONS_USERS(user_id, notification_id) 
		SELECT ID, @id_notificacion_2 FROM USERS WHERE USERS.admin = 1;
	END IF;

ELSE
-- Si no es un administrador, tengo que ver si es un encargado de emergencia. 
	SET @bool = (SELECT COUNT(*)
				 FROM mision
				 WHERE mission.user_id = OLD.id);
	-- Si es encargado:
	IF @bool>0 THEN
		-- Se crea una notificación.
		INSERT INTO NOTIFICATIONS(URL, CONTENIDO, FECHA) 
		SELECT '', 'Se necesita un encargado de emergencia', NOW();

		SET @id_notificacion_2 = (SELECT ID 
								  FROM NOTIFICATIONS
								  ORDER BY ID DESC 
								  LIMIT 1);
		-- Se obtienen todos los encargados
		SET @encargados = (SELECT USERS.ID
						   FROM USERS JOIN MISSIONS
						   ON USERS.ID = MISSIONS.USER_ID);
		-- Se envía la notificación a todos los encargados.
		INSERT INTO NOTIFICATIONS_USERS(user_id, notification_id) 
		SELECT @encargados, @id_notificacion_2;
	END IF;
END IF;

END
$$