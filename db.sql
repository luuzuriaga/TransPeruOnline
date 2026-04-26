CREATE DATABASE TransPeruOnline;

USE TransPeruOnline;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(100),
    apellidos VARCHAR(100),
    dni VARCHAR(20),
    celular VARCHAR(20),
    usuario VARCHAR(50),
    password VARCHAR(50)
);

INSERT INTO usuarios VALUES (1, 'Luis Alberto', 'Huamán Lévano', '720436982', '932668722', 'admin', 'Luis123_');