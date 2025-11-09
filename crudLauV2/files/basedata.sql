-- Crear la base de datos
 -- CREATE DATABASE crud_app;

-- Seleccionar la base de datos
USE if0_40369559_crud_app_lau;
-- USE crud_app;
-- Crear la tabla usuarios
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);