# TPE_WEBII

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');
ALTER TABLE usuario ADD CONSTRAINT fk_usuario FOREIGN KEY (email) REFERENCES permisos (email);


QUESTIONS

IMPLEMENTACION

user controller
	public function save_update_user() ok
		quedo pegado al codigo con el if
			si se cambia o agrega tengo que cambiar TODO en esta parte del codigo

	public function login_verify()
		register
			loguear al hacer register=success ok

			como cambiar el metodo save update user? ok
			como logueo al registrarse exitosamente? ok
REQS
	
	API REST
		hacer otra db que guarde comments por user? No, los comments tienen que ser por juego
		Que pasa si un user tiene varios comments? Nada
		comments con client side rendering? Si	
	Agregar una imagen con respecto a un item que ya existe y llamar al mostrar con la imagen? 
		Adicional poder cargar la imagen en el llamado al add_game?
			->Es el mismo método, sobreescribir

		delete comments solo por api? Si