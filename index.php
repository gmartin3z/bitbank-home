<?php require_once 'config.php'; ?>

<!DOCTYPE html>
  <!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"><![endif]-->
  <!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"><![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="es"><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>bitbank - Inicio</title>
    <meta name="description" content="desarrollo">
    <meta name="author" content="bitbank">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo(CSS_DIR . '/base.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS_DIR . '/vendor.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS_DIR . '/main.css'); ?>">
    <link rel="shortcut icon" href="<?php echo(MAIN_DIR . '/favicon.png'); ?>">
    <script src="<?php echo(JS_DIR . '/modernizr.js'); ?>"></script>
  </head>
  <body>
    <header id="main-header">
      <div class="row">
        <div class="logo">
          <a href="<?php echo(BITBANK_HOME); ?>">bitbank</a>
        </div>
        <nav id="nav-wrap">
          <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
            <span class="menu-icon">Menu</span>
          </a>
          <a class="mobile-btn" href="#" title="Hide navigation">
            <span class="menu-icon">Menu</span>
          </a>
          <ul id="nav" class="nav">
            <li><a class="smoothscroll" href="#main">Inicio</a></li>
            <li><a class="smoothscroll" href="#about">Quiénes somos</a></li>
            <li><a class="smoothscroll" href="#services">Servicios</a></li>
            <li><a class="smoothscroll" href="#contact">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <section id="main">
      <div class="row main-content">
        <div class="twelve columns main-container">
          <!-- start main-slider -->
          <div id="main-slider" class="flexslider">
            <ul class="slides">
              <!-- slide -->
              <li>
                <div class="flex-caption">
                  <h2>Somos</h2>
                  <h1>bitbank</h1>
                  <h3>
                    Nuestro propósito es ofrecer soluciones
                    que agilicen y renueven el funcionamiento
                    de los procesos de negocio de nuestros socios
                  </h3>
                </div>
              </li>
            </ul><!-- end slide -->
          </div><!-- end main-slider -->
        </div><!-- end twelve columns -->
      </div><!-- end row -->
      <div id="more">
        <a class="smoothscroll" href="#about">
          Más información <i class="fa fa-angle-down"></i>
        </a>
      </div>
    </section><!-- end homepage main -->
    <section id="about">
      <div class="row section-head">
        <div class="twelve columns">
          <h1>Quiénes somos</h1>
          <hr />
          <p>
            Somos un pequeño grupo de gente comprometida y apasionada
            por la tecnología, encargada de desarrollar sistemas
            y plataformas digitales en la red.
          </p>
        </div><!-- end section-head -->
      </div>
      <div class="row mobile-no-padding">
        <div class="process bgrid-second tab-bgrid-whole group">
          <div class="bgrid">
            <h3>Nuestra misión</h3>
            <p>
              Contribuir a mejorar y optimizar el desempeño y el trabajo
              de los negocios y organizaciones, creando soluciones personalizadas
              y eficientes, acorde a la medida de sus problemas de forma cómoda
              y accesible.
            </p>
          </div>
          <div class="bgrid">
            <h3>Nuestra visión</h3>
            <p>
              Ser un referente que se destaque por la excelencia y dedicación
              en cada uno de sus proyectos, fortaleciendo los valores
              que ayudarán a alcanzar y mantener una confianza y una certeza
              claras hacia nosotros.
            </p>
          </div>
        </div><!-- end process -->
      </div><!-- end row -->
    </section><!-- end about -->
    <section id="services">
      <div class="row section-head">
        <div class="twelve columns">
          <h1>Nuestros servicios</h1>
          <hr />
          <p>
            Estos son los servicios principales que ofrecemos.
          </p>
        </div>
      </div><!-- end section-head -->
      <div class="row mobile-no-padding">
        <div class="service-list bgrid-second s-bgrid-half tab-bgrid-whole group">
          <div class="bgrid">
            <h3>Desarrollo web</h3>
            <div class="service-content">
              <p>
                Desde una página sencilla hasta una aplicación web completa.
                Tratamos de usar las tecnologías que resultan más ágiles
                y de contar con los mejores proveedores para desplegar
                nuestras soluciones. Modernizamos lo existente o lo creamos
                desde cero.
              </p>
            </div>
          </div><!-- end bgrid -->
          <div class="bgrid">
            <h3>Infraestructura digital</h3>
            <div class="service-content">
              <p>
                Porque un sistema completo no solo abarca un diseño
                y funciones. Todos requieren estar en un espacio especial
                donde se deben ejecutar y deben funcionar casi
                ininterrumpidamente. Nosotros sabemos cómo ajustar
                esos servicios de modo conveniente.
              </p>
            </div>
          </div><!-- end bgrid -->
        </div><!-- end service-list -->
      </div><!-- end row -->
    </section><!-- end services -->
    <section id="contact">
      <div class="row section-head">
        <div class="twelve columns">
          <h1>Contacto</h1>
          <hr />
        </div>
      </div><!-- end section-head -->
      <div class="row">
        <div id="contact-form" class="twelve columns tab-whole">
          <center>
            <p class="lead">
              ¿Por qué contratarnos?
            </p>
            <p>
              Muy aparte de nuestras capacidades, nos encanta poner
              lo mejor de nosotros mismos en nuestro trabajo. Queremos
              que la gente que confía en nosotros nos vea como socios
              más que como simples proveedores.

              Que sepan que aquí tenemos más de lo necesario
              para hacerlos crecer y transformalos.
            </p>
          </center>
        </div>
      </div><!-- end row -->
    </section><!-- end contact -->
    <footer>
      <div class="row">
        <div class="twelve columns content group">
          <ul class="social-links">
            <li><a href="mailto:<?php echo(BITBANK_EMAIL); ?>"><i class="fa fa-envelope"></i></a></li>
            <li><a href="<?php echo(BITBANK_TELEGRAM); ?>"><i class="fa fa-telegram"></i></a></li>
          </ul>
          <hr />
          <div class="info">
            <div class="footer-logo"></div>
          </div>
        </div>
        <ul class="copyright">
          <li>&copy; Copyright <?php echo(YEAR); ?> - bitbank. Derechos pendientes.</li>
          <br>
          <li>Diseño por <a href="https://www.styleshout.com/">Styleshout.</a>.</li>
        </ul>
      </div><!-- end row -->
      <div id="go-top">
        <a class="smoothscroll" title="Back to Top" href="#main">
          Al inicio<i class="fa fa-angle-up"></i>
        </a>
      </div>
    </footer><!-- end footer -->
    <div id="preloader">
      <div id="loader"></div>
    </div>
    <script src="<?php echo(JS_DIR . '/jquery-1.11.3.min.js'); ?>"></script>
    <script src="<?php echo(JS_DIR . '/jquery-migrate-1.2.1.min.js'); ?>"></script>
    <script src="<?php echo(JS_DIR . '/jquery.flexslider-min.js'); ?>"></script>
    <script src="<?php echo(JS_DIR . '/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo(JS_DIR . '/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo(JS_DIR . '/jquery.fittext.js'); ?>"></script>
    <script src="<?php echo(JS_DIR . '/jquery.placeholder.min.js'); ?>"></script>
    <script src="<?php echo(JS_DIR . '/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo(JS_DIR . '/main.js'); ?>"></script>
  </body>
</html>