# TPE_WEBII

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');
ALTER TABLE usuario ADD CONSTRAINT fk_usuario FOREIGN KEY (email) REFERENCES permisos (email);


QUESTIONS

IMPLEMENTACION

user controller
	public function save_update_user()
		quedo pegado al codigo con el if
			si se cambia o agrega tengo que cambiar TODO en esta parte del codigo

	public function login_verify()
		register
			loguear al hacer register=success

			como cambiar el metodo save update user?
			como logueo al registrarse exitosamente?
REQS
	
	API REST
		hacer otra db que guarde comments por user? 
		Que pasa si un user tiene varios comments?
		comments con client side rendering?				
	Agregar una imagen con respecto a un item que ya existe y llamar al mostrar con la imagen?
		Adicional poder cargar la imagen en el llamado al add_game?

		delete comments solo por api?