<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>GZ</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <link rel="stylesheet" href="lib/alertify/css/alertify.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/alertify.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/default.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/default.rtl.min.css">-->
  <link rel="stylesheet" href="lib/alertify/css/themes/semantic.min.css">
  <!--<link rel="stylesheet" href="../../lib/alertify/css/themes/semantic.rtl.min.css">-->

  <link rel="stylesheet" type="text/css" href="lib/jquery_upload/css/uploadfile-v3.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-10 d-flex align-items-center justify-content-end">

          <h1 class="logo mr-auto"><a href="#hero"><img src="assets/img/logo.png" alt="" class="img-fluid"> GZ</a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#hero">Home</a></li>
              <li><a href="#about">Acerca De</a></li>
              <li><a href="#services">Servicios</a></li>
              <li><a href="#portfolio">Portafolio</a></li>
              <li><a href="#team">Equipo</a></li>
              <li><a href="#contact">Contacto</a></li>

            </ul>
          </nav><!-- .nav-menu -->

        </div>
      </div>
    </div>
  </header><!-- End Header -->
  <!-- ======= IMPORT PHP ======= -->
  <?php include 'data/conexion.php'; ?>
  <?php include 'api/adm_index.php'; ?>
  <!-- ======= END IMPORT PHP ======= -->
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">
        <?php
        if (is_array($arrHome) && (count($arrHome) > 0)) {
          reset($arrHome);
          foreach ($arrHome as $rTMP['key'] => $rTMP['value']) { ?>

            <div class="carousel-item <?php echo  $rTMP["value"]['coment']; ?>" style="background-image: url(<?php echo  $rTMP["value"]['img']; ?>)">
              <div class="carousel-container">
                <div class="container">
                  <h2 class="animated fadeInDown"><?php echo  $rTMP["value"]['title']; ?></h2>
                  <p class="animated fadeInUp"><?php echo  $rTMP["value"]['content']; ?></p>
                </div>
              </div>
            </div>
        <?PHP
          }
        }

        ?>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch">
          </div>

          <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h3>Acerca De</h3>
            <p><?php echo  $inf_general; ?></p>

            <div class="icon-box">
              <div class="icon"><?php echo  $ico_mision; ?></div>
              <h4 class="title"><a href=""><?php echo  $title_mision; ?></a></h4>
              <p class="description"><?php echo  $content_mision; ?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><?php echo  $ico_plan; ?></div>
              <h4 class="title"><a href=""><?php echo  $title_plan; ?></a></h4>
              <p class="description"><?php echo  $content_plan; ?></p>
            </div>

            <div class="icon-box">
              <div class="icon"><?php echo  $ico_vision; ?></div>
              <h4 class="title"><a href=""><?php echo  $title_vision; ?></a></h4>
              <p class="description"><?php echo  $content_vision; ?></p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container-fluid">

        <div class="section-title">
          <h3> <span>Servicios</span></h3>
          <p><?php echo  $content_gen; ?></p>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <?php
              if (is_array($arrService) && (count($arrService) > 0)) {
                reset($arrService);
                foreach ($arrService as $rTMP['key'] => $rTMP['value']) {
              ?>
                  <div class="col-lg-4 col-md-6 icon-box">
                    <div class="icon"><?php echo  $rTMP["value"]['ico']; ?></div>
                    <h4 class="title"><a href=""><?php echo  $rTMP["value"]['titulo']; ?></a></h4>
                    <p class="description"><?php echo  $rTMP["value"]['content']; ?></p>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3><?php echo  $title; ?></h3>
          <p> <?php echo  $content; ?></p>
          <a class="cta-btn" href="<?php echo  $url; ?>"><?php echo  $boton; ?></a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container-fluid">

        <div class="section-title">
          <h3> <span>Portafolio</span></h3>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <?php
              if (is_array($arrMenuPorfolio) && (count($arrMenuPorfolio) > 0)) {
                reset($arrMenuPorfolio);
                foreach ($arrMenuPorfolio as $rTMP['key'] => $rTMP['value']) {

                  if ($rTMP["value"]['abreviatura'] == '*') {
              ?>
                    <li data-filter="<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
                  <?php
                  } else {
                  ?>
                    <li data-filter=".<?php echo  $rTMP["value"]['abreviatura']; ?>" class="<?php echo  $rTMP["value"]['clase']; ?>"><?php echo  $rTMP["value"]['title']; ?></li>
              <?php
                  }
                }
              }
              ?>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container justify-content-center">

          <div class="col-xl-10">
            <div class="row">
              <?php
              if (is_array($arrPorfolio) && (count($arrPorfolio) > 0)) {
                reset($arrPorfolio);
                foreach ($arrPorfolio as $rTMP['key'] => $rTMP['value']) {
              ?>
                  <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item <?php echo  $rTMP["value"]['abreviatura']; ?>">
                    <div class="portfolio-wrap">
                      <img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <h4><?php echo  $rTMP["value"]['tittle']; ?></h4>
                        <p><?php echo  $rTMP["value"]['content']; ?></p>
                        <div class="portfolio-links">
                          <a href="<?php echo  $rTMP["value"]['img']; ?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                          <a href="<?php echo  $rTMP["value"]['url']; ?>" title="<?php echo  $rTMP["value"]['tittle']; ?>"><i class="bx bx-link"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                }
              }
              ?>

            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container-fluid">

        <div class="section-title">
          <h3><span>Equipo</span></h3>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">
              <?php
              if (is_array($arrTeam) && (count($arrTeam) > 0)) {
                reset($arrTeam);
                foreach ($arrTeam as $rTMP['key'] => $rTMP['value']) {
              ?>
                  <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="member">
                      <img src="<?php echo  $rTMP["value"]['img']; ?>" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4><?php echo  $rTMP["value"]['title']; ?></h4>
                          <span><?php echo  $rTMP["value"]['descrip']; ?></span>
                        </div>
                        <div class="social">
                          <?php if ($rTMP["value"]['twitter']) { ?>
                            <a href=""><i class="icofont-twitter"></i></a>
                          <?php } ?>

                          <?php if ($rTMP["value"]['facebook']) { ?>
                            <a href=""><i class="icofont-facebook"></i></a>
                          <?php } ?>

                          <?php if ($rTMP["value"]['google']) { ?>
                            <a href=""><i class="icofont-instagram"></i></a>
                          <?php } ?>

                          <?php if ($rTMP["value"]['link']) { ?>
                            <a href=""><i class="icofont-linkedin"></i></a>
                          <?php } ?>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container-fluid">

        <div class="section-title">
          <h2></h2>
          <h3><span>Contacto</span></h3>
          <p><?php echo  $descrip; ?></p><br>
          <div class="map-responsive">
            <?php echo  $ubi; ?>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-xl-10">
            <div class="row">

              <div class="col-lg-6">

                <div class="row justify-content-center">

                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-map"></i>
                    <h4>DIRECCION</h4>
                    <p><?php echo  $dress; ?></p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-phone"></i>
                    <h4>TELEFONO</h4>
                    <p><?php echo  $telefono; ?></p>
                  </div>
                  <div class="col-md-6 info d-flex flex-column align-items-stretch">
                    <i class="bx bx-envelope"></i>
                    <h4>CORREO</h4>
                    <p><?php echo  $mail; ?></p>
                  </div>

                </div>

              </div>

              <div class="col-lg-6">
                <form action="phpmailer/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-row">
                    <div class="col-md-6 form-group">
                      <label for="name">Your Name</label>
                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validate"></div>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="email">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validate"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="message" rows="8" data-rule="required" data-msg="Please write something for us"></textarea>
                    <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>SPI</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="">Servicios Profesionales De Informatica</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <style>
    .map-responsive {
      overflow: hidden !important;
      padding-bottom: 56.25% !important;
      position: relative !important;
      height: 0 !important;
    }

    .map-responsive iframe {
      left: 0 !important;
      top: 0 !important;
      height: 100% !important;
      width: 100% !important;
      position: absolute !important;
    }
  </style>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Font Osome -->
  <script src="https://kit.fontawesome.com/ed422f1332.js" crossorigin="anonymous"></script>

  <!-- ALERTS MODAL JS -->
  <script src="lib/alertify/alertify.js"></script>
  <script src="lib/alertify/alertify.min.js"></script>
  <!-- SEC  JS -->
  <!-- UPLOAD -->
  <script type="text/javascript" src="lib/jquery_upload/js/jquery.form.js"></script>
  <script type="text/javascript" src="lib/jquery_upload/js/jquery.uploadfile.js"></script>

</body>

</html>