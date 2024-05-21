-- En Xampp Primero, ir a la carpeta mysql de xampp Luego, ejecutar el siguiente comando (o similar)
-- cd C:\xampp\mysql\bin
-- ./mysql -u root -p elfaro < C:/xampp/htdocs/elfaro/app/database/seed_db.sql

-- Insertar datos en la tabla User
INSERT INTO User (username, password, email, role) VALUES
('admin', 'admin123', 'admin@example.com', 'admin'),
('editor', 'editor123', 'editor@example.com', 'editor'),
('user1', 'user123', 'user1@example.com', 'subscriber'),
('user2', 'user123', 'user2@example.com', 'subscriber');

-- Insertar datos en la tabla Article
INSERT INTO Article (title, image, excerpt, content, category, date, author) VALUES
('Nuevas Políticas Económicas', 'images/general1.jpg', 'Resumen de las nuevas políticas económicas...', 'Detalles extendidos sobre las nuevas políticas económicas que...', 'Noticias Generales', '2024-04-01', 1),
('Avances en Tecnología Sostenible', 'images/general2.jpg', 'Un vistazo a los últimos avances en tecnología sostenible...', 'Exploración a fondo de las tecnologías que están cambiando...', 'Noticias Generales', '2024-04-02', 2),
('Educación en la Era Digital', 'images/general3.jpg', 'Cómo la era digital está transformando la educación...', 'Un análisis sobre los cambios en los métodos educativos...', 'Noticias Generales', '2024-04-03', 2),
('Cambio Climático y Futuro Global', 'images/general4.jpg', 'Impacto del cambio climático en el futuro global...', 'Discusión sobre las implicaciones a largo plazo del cambio...', 'Noticias Generales', '2024-04-04', 3),
('Final de la Champions League', 'images/sports1.jpg', 'Resumen de la emocionante final de la Champions League...', 'Análisis detallado del juego, jugadas destacadas y...', 'Deportes', '2024-04-05', 4),
('Innovaciones en el Entrenamiento Deportivo', 'images/sports2.jpg', 'Las últimas innovaciones en entrenamiento deportivo...', 'Cómo la tecnología está revolucionando los regímenes de entrenamiento...', 'Deportes', '2024-04-06', 1),
('El Ascenso del eSports', 'images/sports3.jpg', 'El rápido ascenso del eSports y su impacto global...', 'Desde competiciones locales hasta el escenario mundial, el eSports...', 'Deportes', '2024-04-07', 1),
('Salud Mental en Atletas Profesionales', 'images/sports4.jpg', 'Examinando la importancia de la salud mental para atletas...', 'La salud mental es tan crucial como la física en el alto rendimiento...', 'Deportes', '2024-04-08', 1),
('Tendencias Emergentes en el Mercado Global', 'images/business1.jpg', 'Un vistazo a las tendencias emergentes que están modelando el mercado global...', 'Exploración de nuevas industrias y tecnologías que...', 'Negocios', '2024-04-09', 1),
('El Impacto de la IA en la Industria', 'images/business2.jpg', 'Cómo la inteligencia artificial está transformando diversas industrias...', 'Desde la automatización hasta la personalización, la IA está...', 'Negocios', '2024-04-10', 1),
('Estrategias de Marketing Digital para 2024', 'images/business3.jpg', 'Las estrategias más efectivas de marketing digital para el año en curso...', 'Un análisis de las técnicas y herramientas más efectivas...', 'Negocios', '2024-04-11', 1),
('Sostenibilidad en el Emprendimiento', 'images/business4.jpg', 'Integrando la sostenibilidad en el núcleo de nuevas empresas...', 'Cómo los nuevos emprendedores están adoptando prácticas sostenibles...', 'Negocios', '2024-04-12', 1);

-- Insertar datos en la tabla ArticleMeta
INSERT INTO ArticleMeta (article_id, meta_key, meta_value) VALUES
(1, 'views', '100'),
(1, 'likes', '50'),
(2, 'views', '200'),
(2, 'likes', '150'),
(3, 'views', '300'),
(3, 'likes', '250'),
(4, 'views', '400'),
(4, 'likes', '350'),
(5, 'views', '500'),
(5, 'likes', '450'),
(6, 'views', '600'),
(6, 'likes', '550'),
(7, 'views', '700'),
(7, 'likes', '650'),
(8, 'views', '800'),
(8, 'likes', '750'),
(9, 'views', '900'),
(9, 'likes', '850'),
(10, 'views', '1000'),
(10, 'likes', '950'),
(11, 'views', '1100'),
(11, 'likes', '1050'),
(12, 'views', '1200'),
(12, 'likes', '1150');