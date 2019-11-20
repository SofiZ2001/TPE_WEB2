# TPE_WEBII

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');


ALTER TABLE usuario ADD CONSTRAINT fk_usuario FOREIGN KEY (email) REFERENCES permisos (email);



QUESTIONS

user controller
	public function save_update_user()
		quedo pegado al codigo con el if
			si se cambia o agrega tengo que cambiar TODO en esta parte del codigo

	public function login_verify()
		register
			loguear al hacer register=success