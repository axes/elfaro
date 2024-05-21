-- En Xampp Primero, ir a la carpeta mysql de xampp Luego, ejecutar el siguiente comando (o similar)
-- cd C:\xampp\mysql\bin
-- ./mysql -u root -p elfaro < C:/xampp/htdocs/elfaro/app/database/init_db.sql      


-- Crear la tabla User
CREATE TABLE User (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    registerDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    role ENUM('admin', 'editor', 'subscriber') NOT NULL DEFAULT 'subscriber'
);

-- Crear la tabla Article
CREATE TABLE Article (
    id_article INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    excerpt TEXT NOT NULL,
    content TEXT NOT NULL,
    category VARCHAR(50) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    author INT,
    FOREIGN KEY (author) REFERENCES User(id_user)
);

-- Crear la tabla ArticleMeta
CREATE TABLE ArticleMeta (
    id INT AUTO_INCREMENT PRIMARY KEY,
    article_id INT,
    meta_key VARCHAR(50),
    meta_value TEXT,
    FOREIGN KEY (article_id) REFERENCES Article(id_article)
);
