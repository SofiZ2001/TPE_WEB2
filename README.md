# TPE_WEBII

ALTER TABLE juego ADD CONSTRAINT FK(categoria) REFERENCES categoria(nombre_categoria);

INSERT INTO `usuario`(`email`, `contraseña`) VALUES ('gassanchez14@gmail.com', '123');