# elfaro

## Estructura del sitio

[app]
    ├── [Controllers]
        ├── ArticleController.php
        ├── RouterController.php
        └── UserController.php
    ├── [Models]
        ├── ArticleModel.php
        └── User.php
    └── [Views]
        ├── layout.php
        ├── [pages]
            ├── articles_index.php
            ├── article_show.php
            ├── contacto.php
            ├── error404.php
            ├── home copy.php
            ├── home.php
            ├── login.php
            └── user_registration.php
        └── [partes]
            ├── footer.php
            └── header.php
[public]
    ├── [assets]
        └── elfaro_vectorized_trans.png
    ├── [css]
        ├── estilo.css
        └── styles.css
    ├── [fonts]
        ├── [B612]
        └── [Blinker]
    ├── [images]
    ├── index.php
    ├── [js]
        ├── contacto.js
        └── registro.js
    ├── [vendors]
        └── [bootstrap-5.3.3-dist]
            ├── [css]
            └── [js]
    └── index.php
README.md
[_backups]
    ├── respaldo_elfaro_20240402.zip
    └── respaldo_elfaro_20240427.zip

## Entidades que participan del sitio

- Usuario - Administrador
- Usuario - Redactor
- Usuario - Suscriptor
- Artículo - Noticia
- Artículo - Publicidad
- Artículo - Video

## Assets y extras

- Uso de Google Fonts
-- Blinker: Para logo y H1 <https://fonts.google.com/specimen/Blinker>
-- B612: Para títulos y textos en general <https://fonts.google.com/specimen/B612>

## Dummy Users

admin/admin123
editor/editor123
user1/user123
user2/user123
