?<?php
    session_start();
    include('../inc/function.php');
    ?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="/assets/" data-template="vertical-menu-template-free">

<head>
    <?php
    include('template/header.php');
    ?>
</head>

<body>
    <!-- Layout wrapper -->
    <?php if (isset($_SESSION['user'])) { ?>
        <div class="layout-wrapper layout-content-navbar">
            <div class="layout-container">
                <!-- Menu -->
                <?php
                include('template/menu.php');
                ?>
                <!-- / Menu -->
                <!-- Layout container -->
                <div class="layout-page">
                    <!-- Navbar -->

                    <?php
                    include('template/navbar.php');
                    ?>

                    <!-- / Navbar -->

                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->

                        <div class="container-xxl flex-grow-1 container-p-y">
                            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Rechauffement Climatique </h4>
                            <?php

                            include($_GET['page'] . ".php");  ?>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->

                    <?php
                    include('template/footer.php');
                    ?>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <?php
        include('template/vendor.php');
        ?>
    <?php
    } else {
        header('Location: ../index.php?erreur=1');
    }
    ?>
</body>

</html>