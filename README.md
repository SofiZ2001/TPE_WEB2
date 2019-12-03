# TPE_WEBII

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');
ALTER TABLE usuario ADD CONSTRAINT fk_usuario FOREIGN KEY (id_permiso) REFERENCES permisos (id_permiso);
ALTER TABLE juego ADD CONSTRAINT fk_juego FOREIGN KEY (categoria) REFERENCES categoria (nombre_categoria);
ALTER TABLE comentarios ADD CONSTRAINT comentarios FOREIGN KEY (id_juego) REFERENCES juego (id_juego);
INSERT INTO `comentarios`(`id_juego`, `comentario`) VALUES ('79', '123');

ADD css class = FONDO AL TERMINAR LA PAGINA
GAME_LIST-TPL NO LO USO EN NINGUNA VISTA->CONTROLAR SI ES POSIBLE BORRARLO

QUESTIONS
REQUERIMIENTOS
	API REST
		IMPLEMENTACION
			api a comments only?
			o a todo el item y solo render a comments?