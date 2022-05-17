<?php
include("inc/function.php");
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

    <title>Rechauffement climatique</title>
</head>

<body id="page-top">

    <!-- NAVBAR
    ================================================= -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-togglable  fixed-top " id="mainNav">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
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
                        <a class="nav-link js-scroll-trigger" href="#page-top">
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#effet">
                            Effet
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#solution">
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
    <section class="section section-top section-full">

        <!-- Cover -->
        <div class="bg-cover" style="background-image: url(image/font.jpg);"></div>

        <!-- Overlay -->
        <div class="bg-overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-10 col-lg-7 ">
                    <div class="banner-content">
                        <!-- Preheading -->
                        <p class="text-white text-uppercase text-center text-xs">
                            Definition
                        </p>

                        <!-- Heading -->
                        <h1 class="text-white text-center mb-4 display-4 font-weight-bold">
                            Rechauffement climatique <br>Cause et solution
                        </h1>

                        <!-- Subheading -->
                        <p class="lead text-white text-center mb-5">
                            Le réchauffement climatique est un phénomène global de transformation du climat caractérisé par une augmentation générale des températures moyennes (notamment liée aux activités humaines), et qui modifie durablement les équilibres météorologiques et les écosystèmes.
                            Lorsque l’on en parle aujourd’hui, il s’agit du phénomène d’augmentation des températures qui se produit sur Terre depuis 100 à 150 ans. Depuis le début de la Révolution Industrielle, les températures moyennes sur terre ont en effet augmenté plus ou moins régulièrement. En 2016,
                            la température moyenne sur la planète terre était environ 1 à 1.5 degrés au dessus des températures moyennes de l’ère pré-industrielle (avant 1850).

                        </p>
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


    <!-- EFFET
    ================================================== -->
    <section class="section bg-light" id="effet">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                        Effet
                    </h2>

                    <!-- Subheading -->
                    <!-- <p class="mb-5">
                        I updated my portfolio with latest work and enriched portfolio to show.
                    </p> -->

                </div>
            </div>
            <!-- / .row -->

            <?php
            $effet = findAllEffet(); ?>


            <div class="row justify-content-center">
                <?php foreach ($effet as $key) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-5">

                        <div class="portfolio-block">
                            <img src="<?php echo $key['photo']; ?>" alt="portfolio">

                            <div class="portfolio-content">
                                <h4><?php echo $key['titre'] ?></h4>
                                <span class="work-cat"><?php echo $key['daty'] ?></span>
                            </div>
                            <div class="overlay-content">
                                <a href="effet-<?php echo $key['id']; ?>.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- Solution
    ================================================== -->
    <section class="section bg-light" id="solution">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 col-lg-7 text-center">

                    <!-- Heading -->
                    <h2 class="lg-title mb-2">
                        Solution
                    </h2>

                    <!-- Subheading -->
                    <!-- <p class="mb-5">
                        I updated my portfolio with latest work and enriched portfolio to show.
                    </p> -->

                </div>
            </div>
            <!-- / .row -->

            <?php
            $solution = findAllSolution(); ?>


            <div class="row justify-content-center">
                <?php foreach ($solution as $key) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 mb-5">

                        <div class="portfolio-block">
                            <img src="<?php echo $key['photo']; ?>" alt="portfolio">

                            <div class="portfolio-content">
                                <h4><?php echo $key['titre'] ?></h4>
                                <span class="work-cat"><?php echo $key['daty'] ?></span>
                            </div>
                            <div class="overlay-content">
                                <a href="solution-<?php echo $key['id']; ?>.html"><i class="fa fa-link"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Testimonial
    ================================================== -->


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
    <script src="assets/js/theme.js"></script>

</body>

</html>