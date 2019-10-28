<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148592595-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-148592595-1');
  </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Creadores de un estilo , street wear y diseño de prendas atemporal únicas y de vanguardia ,evitamos los moldes utilizando un estilo propio.">
  <meta name="title" content="Apocryphe Wear - street wear">
  <meta name="keywords" content="Apocryphe, street, wear, tshirts, playeras, moda, white, diseño, atemporal">
  <meta name="google-site-verification" content="DxZO3QofPr2ZS7_9pj3M4Z2ZCzFwgnKCf-VweZ1Sfnk" />
  <meta name="google-site-verification" content="UtyAmM_lFxF1J_Z49F69o0wTnA2E0FfAk6BodvdA-BA" />

  <title>Apocryphe Wear - Street Wear</title>
  <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/css/aos.css">
  <link rel="stylesheet" href="./assets/css/main.css">
  <link rel="icon" type="image/icon" href="./favicon.ico">
</head>
<body>
  <div id="loader" class="loader loader1"></div>

  <div class="menu-wrapper" id="menu-wrapper">
    <div class="menu float-right">
      <ul>
        <li><a href="#home">Inicio</a></li>
        <li><a href="#contacto">CONTACTO</a></li>
        <li><a href="#galeria">Galeria</a></li>
        <li><a href="#about">ABOUT</a></li>
      </ul>

      <div class="separator"></div>
      <div class="redes-wrapper-mobile">
        <ul>
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
        </ul>
      </div>

    </div>
  </div>

  <!-- home -->
  <section id="home" class="apc-home">
    <div class="apc-logo text-center">
      <img src="./assets/img/logo-animation.gif" alt="logo-Apocryphe" class="logo">
      <!-- <div class="button-top">
      <button type="button" class="head-button" name="button">GALERIA</button>
    </div> -->
  </div>
</section>

<!-- contacto -->
<section id="contacto" class="apc-contacto">
  <div class="form-wrapper text-center" data-aos="fade-up">
    <h1>CONTACTO</h1>
    <form id="frm-contacto">
      <div class="form-group">
        <input type="text" name="nombre" placeholder="nombre" autocomplete="none">
        <div class="help-form"><span class="help-block form-text text-muted"></span></div>
      </div>
      <div class="form-group">
        <input type="email" name="email" placeholder="Em@il" autocomplete="none">
        <div class="help-form"><span class="help-block form-text text-muted"></span></div>
      </div>
      <div class="form-group">
        <input type="phone" name="telefono" placeholder="Telefono" autocomplete="none">
        <div class="help-form"><span class="help-block form-text text-muted"></span></div>
      </div>
      <div class="form-group">
        <textarea name="comentario" rows="8" cols="80" placeholder="comentario" autocomplete="off"></textarea>
        <div class="help-form"><span class="help-block form-text text-muted"></span></div>
      </div>
      <div class="form-group">
        <button type="submit" class="head-button" name="enviar">ENVIAR</button>
        <div class="help-form">
          <span class="loading dn"><i class="fa fa-circle-o-notch fa-spin"></i>&nbsp;ENVIANDO...</span>

        </div>
        <div class="msg dn" role="alert"></div>
      </div>
    </form>
  </div>
</section>
<!-- galeria -->
<?php

$nums = array();
$cont = 0;
$num = 21;

while ($cont < $num) {
  $random =  rand(1, 21);
  if(!in_array($random, $nums)){
    array_push($nums, $random);
    $cont++;
  }
}

?>

<section id="galeria" class="apc-gallery">
  <div class="container">
    <h1 class="text-center">GALERIA</h1>
    <div class="card-columns">
      <?php for ($i=0; $i <= 20 ; $i++) {
        $img = $nums[$i];
        ?>
        <div data-aos="fade-up" class="card">
        <img src="./assets/img/galeria/<?=$img?>.png" class="card-img-top">
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<section id="about" class="apc-about">
  <div class="container">
    <div class="row content">
      <div class="col-sm-3">
        <div class="img-about text-center">
          <img src="./assets/img/logo.png" alt="skull-apc">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="text-about redes-apc">
          <h3>SIGUENOS</h3>
          <p>
            <ul>
              <li> <a href="#"><i class="fab fa-facebook"></i></a> </li>
              <li> <a href="#"><i class="fab fa-instagram"></i></a></li>
              <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
              <li> <a href="#"><i class="fab fa-pinterest"></i></a></li>
            </ul>
          </p>
          <div class="text-about stuff-apc">
            <h4>MAILING LIST</h4>
            <p>
              <span>Suscribete a nuestro mailing list para obtener las últimas noticias <br> promociones y novedades</span>
            </p>
            <form action="#" method="post">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Em@il">
                <div class="input-group-prepend">
                  <span class="input-group-text suscribe">Suscribirse <i class="fab fa-mailchimp chimp"></i></span>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="text-about contacto-apc">
          <h3>CONTACTO</h3>
          <p>
            <ul>
              <li> <a href="#"><i class="fas fa-phone"></i>  (443)392-2532</a>  </li>
              <li> <a href="#"><i class="fas fa-mobile-alt"></i> (477)865-1262</a>  </li>
              <li> <a href="#"><i class="fab fa-whatsapp"></i> (477)865-1262</a>  </li>
              <li> <a href="mailto:contacto@apocryphe.com.mx"><i class="fas fa-envelope"></i> contacto@apocryphe.com.mx</a>  </li>
            </ul>
            <ul>
              <li>
                  #streetWear #tshirts #apocryphe #diseno #moda
              </li>
            </ul>
          </p>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="text-about stuff-apc">
          <h3>FUCKING BORING STUFF</h3>
          <p>
            <ul>
              <li> <a href="#">Aviso de privacidad</a> </li>
              <li> <a href="#">Uso de datos</a></li>
              <li> <a href="#">Copyright</a></li>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <p class="text-center">&copy; Apocryphe 2019 Todos los derechos reservados.</p>
    <p class="text-center text-muted">&copy; Desarrollado por <a target="_blank" href="https://www.linkedin.com/in/manuel-alejandro-chávez-núñez-277255b7">A. Chavez</a>.</p>

  </div>

</section>

<div class="menu-responsive">
  <span id="menu-button">
    <i class="fas fa-bars"></i>
  </span>
</div>
<div class="redes-wrapper text-center">
  <ul>
    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
  </ul>
</div>

<script src="./assets/js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="./assets/js/jquery-ui.js" type="text/javascript"></script>
<script src="./assets/js/jquery.smooth-scroll.js" type="text/javascript"></script>
<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/js/aos.js" type="text/javascript"></script>
<script src="./assets/js/bootstrapValidator.min.js" type="text/javascript"></script>
<script src="./assets/js/all.min.js" type="text/javascript"></script>
<script src="./assets/js/main.js" type="text/javascript"></script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>


</body>
</html>
