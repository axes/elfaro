<?php

class ArticleModel
{
    private $articles = [
        // Noticias Generales
        ['id' => 1, 'title' => 'Nuevas Políticas Económicas', 'image' => 'images/general1.jpg', 'excerpt' => 'Resumen de las nuevas políticas económicas...', 'content' => 'Detalles extendidos sobre las nuevas políticas económicas que...', 'category' => 'Noticias Generales', 'date' => '2024-04-01'],
        ['id' => 2, 'title' => 'Avances en Tecnología Sostenible', 'image' => 'images/general2.jpg', 'excerpt' => 'Un vistazo a los últimos avances en tecnología sostenible...', 'content' => 'Exploración a fondo de las tecnologías que están cambiando...', 'category' => 'Noticias Generales', 'date' => '2024-04-02'],
        ['id' => 3, 'title' => 'Educación en la Era Digital', 'image' => 'images/general3.jpg', 'excerpt' => 'Cómo la era digital está transformando la educación...', 'content' => 'Un análisis sobre los cambios en los métodos educativos...', 'category' => 'Noticias Generales', 'date' => '2024-04-03'],
        ['id' => 4, 'title' => 'Cambio Climático y Futuro Global', 'image' => 'images/general4.jpg', 'excerpt' => 'Impacto del cambio climático en el futuro global...', 'content' => 'Discusión sobre las implicaciones a largo plazo del cambio...', 'category' => 'Noticias Generales', 'date' => '2024-04-04'],
        // Noticias de Deportes
        ['id' => 5, 'title' => 'Final de la Champions League', 'image' => 'images/sports1.jpg', 'excerpt' => 'Resumen de la emocionante final de la Champions League...', 'content' => 'Análisis detallado del juego, jugadas destacadas y...', 'category' => 'Deportes', 'date' => '2024-04-05'],
        ['id' => 6, 'title' => 'Innovaciones en el Entrenamiento Deportivo', 'image' => 'images/sports2.jpg', 'excerpt' => 'Las últimas innovaciones en entrenamiento deportivo...', 'content' => 'Cómo la tecnología está revolucionando los regímenes de entrenamiento...', 'category' => 'Deportes', 'date' => '2024-04-06'],
        ['id' => 7, 'title' => 'El Ascenso del eSports', 'image' => 'images/sports3.jpg', 'excerpt' => 'El rápido ascenso del eSports y su impacto global...', 'content' => 'Desde competiciones locales hasta el escenario mundial, el eSports...', 'category' => 'Deportes', 'date' => '2024-04-07'],
        ['id' => 8, 'title' => 'Salud Mental en Atletas Profesionales', 'image' => 'images/sports4.jpg', 'excerpt' => 'Examinando la importancia de la salud mental para atletas...', 'content' => 'La salud mental es tan crucial como la física en el alto rendimiento...', 'category' => 'Deportes', 'date' => '2024-04-08'],
        // Noticias de Negocios
        ['id' => 9, 'title' => 'Tendencias Emergentes en el Mercado Global', 'image' => 'images/business1.jpg', 'excerpt' => 'Un vistazo a las tendencias emergentes que están modelando el mercado global...', 'content' => 'Exploración de nuevas industrias y tecnologías que...', 'category' => 'Negocios', 'date' => '2024-04-09'],
        ['id' => 10, 'title' => 'El Impacto de la IA en la Industria', 'image' => 'images/business2.jpg', 'excerpt' => 'Cómo la inteligencia artificial está transformando diversas industrias...', 'content' => 'Desde la automatización hasta la personalización, la IA está...', 'category' => 'Negocios', 'date' => '2024-04-10'],
        ['id' => 11, 'title' => 'Estrategias de Marketing Digital para 2024', 'image' => 'images/business3.jpg', 'excerpt' => 'Las estrategias más efectivas de marketing digital para el año en curso...', 'content' => 'Un análisis de las técnicas y herramientas más efectivas...', 'category' => 'Negocios', 'date' => '2024-04-11'],
        ['id' => 12, 'title' => 'Sostenibilidad en el Emprendimiento', 'image' => 'images/business4.jpg', 'excerpt' => 'Integrando la sostenibilidad en el núcleo de nuevas empresas...', 'content' => 'Cómo los nuevos emprendedores están adoptando prácticas sostenibles...', 'category' => 'Negocios', 'date' => '2024-04-12'],

    ];



    public function getAllArticles()
    {
        return $this->articles;
    }

    public function getArticleById($id)
    {
        foreach ($this->articles as $article) {
            if ($article['id'] == $id) {
                return $article;
            }
        }
        return null;
    }
}
