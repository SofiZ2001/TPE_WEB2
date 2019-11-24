# TPE_WEBII

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');
ALTER TABLE usuario ADD CONSTRAINT fk_usuario FOREIGN KEY (email) REFERENCES permisos (email);

ADD FONDO AL TERMINAR LA PAGINA
GAME_LIST-TPL NO LO USO EN NINGUNA VISTA->CONTROLAR SI ES POPSIBLE BORRARLO



//Por ejemplo:
$user = $this->userModel->getUserById($id);
//... // validar password
if($valid){
  $_SESSION['USER'] = $user;
}
//y despues lo usas
$user = $_SESSION['USER']
if($user->permiso == 1) {
 //ADMIN
}
else if($user->permiso == 2) {
 //REGISTERED
}
else{//$user->permiso ==3 por lo tanto es invited
 //INVITED
}

QUESTIONS
REQS

	API REST
		hacer otra db que guarde comments por juego
		comments con client side rendering	
	Agregar una imagen con respecto a un item que ya existe y llamar al mostrar con la imagen? 
		Adicional poder cargar la imagen en el llamado al add_game?
			->Es el mismo método, sobreescribir

		delete comments solo por api? Si




		DEBO GUARDAR EN LA SESION EL ROL?
			public function get_logged_id_permiso() {
		        if (session_status() != PHP_SESSION_ACTIVE)
		            session_start();
		        return $_SESSION['permiso'];
		    }
	    	si pregunto en una funcion este check me devolvera el entero 


	    	public function login($user){
				session_start();
				$_SESSION['user'] = $user->email;
				$_SESSION['permiso'] = $user->id_permiso;//id_permiso es el numero que guardo para saber si es 
			}

			public function get_logged_id_permiso() {
		        if (session_status() != PHP_SESSION_ACTIVE)
		            session_start();
		        return $_SESSION['permiso'];
		
        	}

        