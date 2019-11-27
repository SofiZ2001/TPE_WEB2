# TPE_WEBII

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');
ALTER TABLE usuario ADD CONSTRAINT fk_usuario FOREIGN KEY (email) REFERENCES permisos (email);
ALTER TABLE comentarios ADD CONSTRAINT comentarios FOREIGN KEY (id_juego) REFERENCES juego (id_juego);
INSERT INTO `comentarios`(`id_juego`, `comentario`) VALUES ('79', '123');

ADD css class = FONDO AL TERMINAR LA PAGINA
GAME_LIST-TPL NO LO USO EN NINGUNA VISTA->CONTROLAR SI ES POSIBLE BORRARLO



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
		agregar


		IMPLEMENTACION
			está bien la relacion de tablas con respecto a comments?