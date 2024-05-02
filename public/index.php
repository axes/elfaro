<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>El Faro</title>

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <!-- Estilos propios -->
  <link rel="stylesheet" href="css/estilo.css" />
</head>

<body>
  <!-- Encabezado -->
  <header class="bg-primary text-white text-center py-3">
    <div class="logo">
      <h1>El Faro</h1>
      <img src="assets/elfaro_vectorized_trans.png" alt="Logo de El Faro" />
    </div>
    <div class="menu">
      <nav>
        <ul>
          <li><a href="#inicio">Inicio</a></li>
          |
          <li><a href="#deporte">Deporte</a></li>
          |
          <li><a href="#negocios">Negocios</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Sección de avisos económicos -->
  <aside>
    <!-- Sección de Avisos Económicos -->
    <section id="avisos-economicos" class="container-fluid py-3 text-center">
      <h2>Avisos Económicos</h2>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-6 g-4"> <!-- Definición de columnas -->
        <!-- Primer aviso -->
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=1" class="card-img-top" alt="Aviso económico 1" />
            <div class="card-body">
              <h5 class="card-title">Oportunidad de inversión</h5>
              <p class="card-text">
                Una gran oportunidad para invertir en bienes raíces con altos retornos.
              </p>
            </div>
          </div>
        </div>

        <!-- Segundo aviso -->
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=2" class="card-img-top" alt="Aviso económico 2" />
            <div class="card-body">
              <h5 class="card-title">Nuevo negocio en la ciudad</h5>
              <p class="card-text">
                Un nuevo emprendimiento ofrece productos únicos y personalizados.
              </p>
            </div>
          </div>
        </div>

        <!-- Tercer aviso -->
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=3" class="card-img-top" alt="Aviso económico 3" />
            <div class="card-body">
              <h5 class="card-title">Vacantes para trabajo remoto</h5>
              <p class="card-text">
                Empresas están buscando trabajadores remotos para diversas posiciones.
              </p>
            </div>
          </div>
        </div>

        <!-- Cuarto aviso -->
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=4" class="card-img-top" alt="Aviso económico 4" />
            <div class="card-body">
              <h5 class="card-title">Lanzamiento de nuevo producto</h5>
              <p class="card-text">
                Una empresa local lanza un nuevo producto innovador en el mercado.
              </p>
            </div>
          </div>
        </div>

        <!-- Quinto aviso -->
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=5" class="card-img-top" alt="Aviso económico 5" />
            <div class="card-body">
              <h5 class="card-title">Oferta especial en servicios</h5>
              <p class="card-text">
                Aprovecha descuentos en servicios locales durante esta semana.
              </p>
            </div>
          </div>
        </div>

        <!-- Sexto aviso -->
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=6" class="card-img-top" alt="Aviso económico 6" />
            <div class="card-body">
              <h5 class="card-title">Conferencia de negocios</h5>
              <p class="card-text">
                Próxima conferencia de negocios ofrece oportunidades de networking y capacitación.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>



  </aside>

  <!-- Contenedor Principal -->
  <main class="my-3">
    <!-- Sección Noticias Generales -->
    <section id="noticias-generales" class="container py-3 ">
      <h2 class="text-center">Noticias Generales</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=7" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=8" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This card has supporting text below as a natural lead-in to
                additional content.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=9" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This card has even longer
                content than the first to show that equal height action.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección Video Destacado -->
    <section id="video-destacado" class="container-fluid bg-secondary text-white py-3">
      <!-- Color de fondo y relleno -->
      <div class="row justify-content-center"> <!-- Centrar el contenido -->
        <div class="col-md-8 text-center"> <!-- Limitar el ancho del video y centrar el texto -->
          <h2>Video Destacado</h2> <!-- Título para la sección -->
          <div class="embed-responsive embed-responsive-16by9"> <!-- Asegurar proporciones correctas -->
            <iframe width="560" height="315" src="https://www.youtube.com/embed/u9Dg-g7t2l4?si=77SXpO-XZGVNFFl0"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección Noticias Deporte -->
    <section id="noticias-deportes" class="container py-3">
      <h2 class="text-center">Noticias Deportes</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=10" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=11" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This card has supporting text below as a natural lead-in to
                additional content.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=12" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This card has even longer
                content than the first to show that equal height action.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Sección Noticias Negocios -->
    <section id="noticias-negocios" class="container py-3">
      <h2 class="text-center">Noticias Negocios</h2>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=13" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This content is a little bit
                longer.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=14" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This card has supporting text below as a natural lead-in to
                additional content.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/400?random=15" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">
                This is a wider card with supporting text below as a natural
                lead-in to additional content. This card has even longer
                content than the first to show that equal height action.
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">Last updated 3 mins ago</small>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-dark text-white py-4 mt-4">
    <div class="container">
      <div class="row">
        <!-- Columna para el logo -->
        <div class="col-md-4 text-center"> <!-- Centrado -->
          <h5>El Faro</h5>
          <!-- Placeholder para el logotipo -->
            <img src="assets/elfaro_vectorized_trans.png" alt="" class="img-fluid" style="max-height:150px;">
        </div>

        <!-- Columna para categorías de contenido -->
        <div class="col-md-4 text-center">
          <h5>Categorías</h5>
          <ul class="list-unstyled"> <!-- Sin estilo de lista -->
            <li><a href="#" class="text-white">Noticias</a></li>
            <li><a href="#" class="text-white">Deportes</a></li>
            <li><a href="#" class="text-white">Negocios</a></li>
            <li><a href="#" class="text-white">Entretenimiento</a></li>
          </ul>
        </div>

        <!-- Columna para enlaces útiles -->
        <div class="col-md-4 text-center">
          <h5>Enlaces Útiles</h5>
          <ul class="list-unstyled"> <!-- Sin estilo de lista -->
            <li><a href="#" class="text-white">Quiénes somos</a></li>
            <li><a href="#" class="text-white">Contacto</a></li>
            <li><a href="#" class="text-white">Avisos Económicos</a></li>
            <li><a href="#" class="text-white">Política de Privacidad</a></li>
          </ul>
        </div>
      </div>
      <!-- Derechos reservados -->
      <div class="text-center mt-3">
        <p>&copy; 2024 El Faro. Todos los derechos reservados.</p>
      </div>
    </div>
  </footer>

</body>

</html>