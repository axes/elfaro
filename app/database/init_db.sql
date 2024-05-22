-- En Xampp Primero, ir a la carpeta mysql de xampp Luego, ejecutar el siguiente comando (o similar)
-- cd C:\xampp\mysql\bin
-- ./mysql -u root -p elfaro < C:/xampp/htdocs/elfaro/app/database/init_db.sql      


-- Creación de la base de datos
CREATE DATABASE IF NOT EXISTS elfaro;
USE elfaro;

-- Tabla de usuarios
CREATE TABLE IF NOT EXISTS user (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    register_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role ENUM('admin', 'editor', 'subscriber') DEFAULT 'subscriber'
);

-- Tabla de artículos
CREATE TABLE IF NOT EXISTS article (
    id_article INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    excerpt TEXT NOT NULL,
    content TEXT NOT NULL,
    category VARCHAR(50) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    author INT,
    FOREIGN KEY (author) REFERENCES user(id_user) ON DELETE SET NULL
);

-- Tabla de metadatos de artículos
CREATE TABLE IF NOT EXISTS articlemeta (
    id_meta INT AUTO_INCREMENT PRIMARY KEY,
    article_id INT,
    meta_key VARCHAR(255),
    meta_value TEXT,
    FOREIGN KEY (article_id) REFERENCES article(id_article) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS `contactos` (
    `id_contacto` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `message` TEXT NOT NULL,
    `type` ENUM('sin asunto', 'quejas o reclamos', 'carta al director') DEFAULT 'sin asunto',
    `date_sent` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);