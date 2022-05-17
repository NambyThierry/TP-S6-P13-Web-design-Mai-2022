<?php
include("../inc/function.php");
$id = $_GET['id'];
$content = findById($id);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="Coral - Onepage portfolio Template">
    <meta name="author" content="esrat">

    <!-- Fontawseom Icon CSS -->
    <link rel="stylesheet" href="assets/css/all.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <title>Effet Rechauffement climatique</title>
</head>

<body id="page-top">

    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-togglable  fixed-top " id="mainNav">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand js-scroll-trigger" href="../index.php#page-top">
                <h2>Rechauffement climatique</h2>
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon-bar">
                    <i class="fa fa-bars"></i>
                </span>
            </button>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#page-top">
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#effet">
                            Effet
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php#solution">
                            Solutions
                        </a>
                    </li>


                </ul>
            </div>
            <!-- / .navbar-collapse -->
        </div>
        <!-- / .container -->
    </nav>

    <!-- HERO
    ================================================== -->
    <section class="section section-top section-full page-header">

        <!-- Cover -->
        <div class="bg-cover" style="background-image: url(<?php echo $content['photo'] ?>);"></div>

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
                    <div class="page-content">

                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4 display-4">
                            <?php echo $content['titre'] ?>
                        </h1>

                    </div>
                </div>
            </div>
            <!-- / .row -->
        </div>
        <!-- / .container -->
    </section>

    <!-- SECTIONS
    ================================================== -->
    <!-- PAGES
    ================================================== -->

    <section class="section" id="single-portfolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="portfolio-single">
                        <div class="large-image">
                            <img src="<?php echo $content['photo'] ?>" alt="" class="img-fluid">
                        </div>

                        <div class="portfolio-details">
                            <h2 class="portfolio-title">Contenue</h2>

                            <div class="project-meta">

                            </div>
                            <p><?php echo $content['content'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER
    ================================================== -->
    <footer class="top-padding bg-dark">
        <!--Content -->
        <div class="container">
            <div class="row align-self-center">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <!-- Brand -->
                        <a href="#" class="footer-brand text-white">
                            Rechauffement climatique
                        </a>

                    </div>
                </div>

                <div class="col-lg-2 ml-lg-auto col-md-2">

                    <!-- Links -->
                </div>
                <div class="col-lg-3 col-md-4">

                    <!-- Links -->
                    <ul class="footer-link list-unstyled ml-0 justify-content-end">
                        <li>
                            <i class="fa fa-mobile"></i> +261 34 84 212 59
                        </li>
                        <li>
                            <i class="fa fa-location-arrow"></i> Madagascara , Antananarivo
                        </li>
                        <li>
                            <i class="fa fa-globe"></i> ETU 001217 :: Andriamampandrinirina Nambinintsoa Thierry
                        </li>
                    </ul>
                </div>
            </div>
            <!-- / .row -->

            <div class="row justify-content-md-center footer-copy">
                <div class="col-lg-8 col-md-6 col-sm-6 text-center">
                    <p class="lead text-white-50">&copy; Copyright Reserved to Themeturn | Design and Developed by Esrat </p>
                </div>
            </div>
        </div>
        <!-- / .container -->
    </footer>

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Global JS -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/ajax-contact.js"></script>

    <!-- Theme JS -->
    <script src="assets/js/theme.min.js"></script>

</body>

</html>