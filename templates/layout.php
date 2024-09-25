<?php
require_once '../classes/table.php';
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="../vendor/bootstrap/css/bootstrap.min.css">
  <!-- Google fonts-->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700"> -->
  <!-- Icon fonts-->
  <link rel="stylesheet" href="../css/pe-icon-7-stroke.css">
  <!-- Lightbox CSS-->
  <link rel="stylesheet" href="../vendor/lightbox2/css/lightbox.min.css">
  <!-- Leaflet CSS-->
  <link rel="stylesheet" href="../vendor/leaflet/leaflet.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="../css/style.green.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="../css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="../img/favicon.png">
  <!-- Tweaks for older IEs-->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>

<body>
  <!-- navbar-->
  <header class="header">
    <nav class="navbar navbar-expand-lg bg-header navbar-dark py-lg-0">
      <div class="container-fluid">
        <a href="home" class="navbar-brand font-weight-bold p-0">
          <div class="d-flex align-items-center">
            <div>
              <img src="../img/zoolg.png" width="135" style="border-radius: 100%" />
            </div>
            <div class="text-white ml-3">
              <!-- <span>The Canyon <b>Zoo</b></span> -->
            </div>
          </div>
        </a>
        <button type="button" id="navar-toggle-button" data-toggle="collapse" data-target="#navbarSupportedContent" class="navbar-toggler navbar-toggler-right small"><span class="text-uppercase text-white mr-2">Menu</span><i class="fas fa-bars"></i></button>
        <div id="navbarSupportedContent" class="collapse navbar-collapse">
         <ul class="navbar-nav ml-auto d-lg-flex align-items-lg-center">
    <li class="nav-item"><a href="home" class="nav-link font-weight-bold px-lg-3 py-lg-4">Accueil</a>
    </li>
    <li class="nav-item"><a href="gallery" class="nav-link font-weight-bold px-lg-3 py-lg-4">Galerie</a>
    </li>
    <li class="nav-item dropdown">
        <a id="navbarDropdownMenuLink" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold px-lg-3 py-lg-4 dropdown-toggle">Animaux</a>
        <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu mt-0">
            <?php
            $classTable = new Table('classifications');
            $classifications = $classTable->findInDatabase('class_archived', 'false');

            foreach ($classifications as $key => $class) { ?>
                <a href="animals?class_id=<?= $class['class_id'] ?>" class="dropdown-item small text-uppercase"><?= $class['class_display_name'] ?></a>
            <?php } ?>
        </div>
    </li>
    <!-- montrer les liens uniquement pour les non-sponsors -->
            <?php if (!(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'sponsor')) { ?>

              <li class="nav-item"><a href="ticket_page" class="nav-link font-weight-bold px-lg-3 py-lg-4">Réserver des billets </a>
              </li>
             
              <li class="nav-item"><a href="vacancies" class="nav-link font-weight-bold px-lg-3 py-lg-4">Postes vacants </a>
              </li>
              <li class="nav-item"><a href="events" class="nav-link font-weight-bold px-lg-3 py-lg-4">Événements </a>
              </li>
              <li class="nav-item"><a href="contact" class="nav-link font-weight-bold px-lg-3 py-lg-4">Contactez-nous </a>
              </li>
            <?php } else { //sponsor links 
            ?>
              <li class="nav-item"><a href="post_testimonial" class="nav-link font-weight-bold px-lg-3 py-lg-4">Ajouter des témoignages</a>
              </li>
            <?php } ?>
            <?php if (!isset($_SESSION['authenticated'])) { ?>
              <li class="nav-item dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold px-lg-3 py-lg-4 dropdown-toggle">Register</a>
                <div class="dropdown-menu mt-0">
                  <a href="register_visitor" class="dropdown-item small text-uppercase">Inscription des visiteurs</a>
                  <a href="register_sponsor" class="dropdown-item small text-uppercase">Inscription des sponsors</a>
                </div>
              </li>
            <?php } ?>
            <?php if (!isset($_SESSION['authenticated'])) { ?>
              <li class="nav-item mt-4 mt-lg-0">
                <a type="button" href="login" class="btn btn-outline-primary nav-btn btn-sm navbar-login-button text-white"> <i class="fas fa-sign-out-alt mr-2"></i>Se connecter </a>
              </li>
            <?php } else { ?>
              <li class="nav-item dropdown pr-2">
                <a class="nav-link dropdown-toggle font-weight-bold text-light" href="#a" data-toggle="dropdown">
                  <img src="../img/user-default-2-min.png" style="width: 35px; border-radius:50%" alt="" />
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="logout" class="dropdown-item">Déconnexion</a>
                  <?php if ($_SESSION['user_type'] == "visitor") { ?>
                    <a href="register_visitor?visitor_id=<?= $_SESSION['visitor_id'] ?>" class="dropdown-item">Mettre à jour le profil</a>
                  <?php } ?>
                  <?php if ($_SESSION['user_type'] == "sponsor") { ?>
                    <a href="register_sponsor?sponsor_id=<?= $_SESSION['sponsor_id'] ?>" class="dropdown-item">Mettre à jour le profil</a>
                  <?php } ?>
                </div>
              </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <?php echo $content ?>

  <footer style="background: #eee;" class="pt-5">
    <!-- avant, le fond était #eee  -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-md-6 mb-4">
                <h5 class="lined lined-dark color-header mb-3 color-header">À propos du Système de Gestion de Zoo</h5>
                <p class="text-muted text-small">Il est de notoriété publique qu’un lecteur sera distrait par le contenu lisible d’une page lorsqu’il en regarde la mise en page. L’intérêt d’utiliser du Lorem Ipsum est qu'il a une distribution plus ou moins normale des lettres, contrairement à "Contenu ici, contenu ici", ce qui le fait ressembler à de l’anglais lisible.</p>
                <p class="text-muted text-small">De nombreux logiciels de publication assistée par ordinateur et éditeurs de pages web utilisent maintenant le Lorem Ipsum comme modèle par défaut, et une recherche de 'lorem ipsum' dévoilera de nombreux sites encore à leurs débuts.</p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="lined lined-dark mb-3 color-header">Notre Localisation</h5>
                <h6>Système de Gestion de Zoo</h6>
                <p class="text-muted mb-0 text-small">13/25 Zoo Canyon</p>
                <p class="text-muted mb-0 text-small">3485 Sardis Sta</p>
                <p class="text-muted mb-4 text-small">Mobile + 22 444 333 4444 </p>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="lined lined-dark mb-3 color-header">Animaux Populaires</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link text-small">Mammifères</a></li>
                    <li><a href="#" class="footer-link text-small">Reptiles & Amphibiens</a></li>
                    <li><a href="#" class="footer-link text-small">Oiseaux</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="lined lined-dark mb-3 color-header">Connectez-vous avec nous</h5>
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" class="social-link facebook-logo"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link googleplus-logo"><i class="fab fa-google-plus-g"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link twitter-logo"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link mail-logo"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="lined lined-dark mb-3 color-header">Contactez-nous</h5>
                <p class="text-muted mb-4 text-small">Vous pouvez nous contacter en utilisant le formulaire sur la page "Contactez-nous".</p>
            </div>
        </div>
    </div>
    <div class="bg-header py-2 text-center text-white">
        <p class="p-0 m-0">&copy; <?php echo date('Y')?> - Système de Gestion de Zoo</p>
    </div>
</footer>

<!-- Fichiers JavaScript -->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/lightbox2/js/lightbox.min.js"></script>
<script src="../vendor/leaflet/leaflet.js"></script>
<script src="../js/front.js"></script>
<!-- FontAwesome CSS - chargé en dernier pour ne pas bloquer le rendu -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</body>

</html>
