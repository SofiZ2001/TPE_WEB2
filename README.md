# TPE_WEBII

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');
ALTER TABLE usuario ADD CONSTRAINT fk_usuario FOREIGN KEY (email) REFERENCES permisos (email);

ADD FONDO AL TERMINAR LA PAGINA
GAME_LIST-TPL NO LO USO EN NINGUNA VISTA->CONTROLAR SI ES POPSIBLE BORRARLO
QUESTIONS

REQS
	
	API REST
		hacer otra db que guarde comments por juego
		comments con client side rendering	
	Agregar una imagen con respecto a un item que ya existe y llamar al mostrar con la imagen? 
		Adicional poder cargar la imagen en el llamado al add_game?
			->Es el mismo método, sobreescribir

		delete comments solo por api? Si




		PARA GUARDAR EL ROL DEBO GUARDAR EN LA SESION EL ROL TAMBIEN?

		method de save ganme en add_game.tpl tiene que ser get?

		EL BORRAR IMG ES DE LA BD, Y TAMBIEN COMO ARCHIVO? EL PATH Y LA IMG?