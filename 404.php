<?php require_once 'config.php'; ?>
<?php http_response_code(404); ?>

<!DOCTYPE html>
  <!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"><![endif]-->
  <!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"><![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="es"><!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <title>bitbank - 404</title>
    <meta name="description" content="desarrollo">
    <meta name="author" content="bitbank">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo(CSS_DIR . '/base.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS_DIR . '/vendor.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo(CSS_DIR . '/main.css'); ?>">
    <style type="text/css">
      @media only screen and (max-width: 768px) {
        .js #nav-wrap a#toggle-btn {
          visibility: hidden;
        }
      }
    </style>
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
                  <h2>Uhhh...</h2>
                  <h1>No encontrada</h1>
                  <h3>La página solicitada no existe</h3>
                  <a href="<?php echo(BITBANK_HOME); ?>">
                    Ir al inicio
                  </a>
                </div>
              </li>
            </ul><!-- end slide -->
          </div><!-- end main-slider -->
        </div><!-- end twelve columns -->
      </div><!-- end row -->
    </section><!-- end homepage main -->
    <footer>
      <div class="row">
        <div class="twelve columns content group">
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