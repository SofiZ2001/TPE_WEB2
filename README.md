# TPE_WEBII

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');
ALTER TABLE usuario ADD CONSTRAINT fk_usuario FOREIGN KEY (email) REFERENCES permisos (email);
ALTER TABLE comentarios ADD CONSTRAINT comentarios FOREIGN KEY (id_juego) REFERENCES juego (id_juego);
INSERT INTO `comentarios`(`id_juego`, `comentario`) VALUES ('79', '123');

ADD css class = FONDO AL TERMINAR LA PAGINA
GAME_LIST-TPL NO LO USO EN NINGUNA VISTA->CONTROLAR SI ES POSIBLE BORRARLO

QUESTIONS
REQUERIMIENTOS
	API REST
		if(hacer otra db que guarde comments por juego?)
			está bien la relacion de tablas con respecto a comments?
			la tabla comments las guardo en game_model o deberia hacer otro modelo? //me suena raro tener que hacer otro model
		solo comments con client side rendering?
		borrado e insercion de imagen se hace por api, se debe renderizar con los comments tambien?

		IMPLEMENTACION
			api a comments only?
			o a todo el item y solo render a comments?

			id comments