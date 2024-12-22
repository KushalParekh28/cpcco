<?php require_once("admin/bootstrap.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("include/metatag.php"); ?>
        <?php include("include/stylesheet.php"); ?>
    </head>
    <body class="home-2">

        <?php include("include/header.php"); ?>

        <main class="main">

            <!-- breadcrumb -->
            <div class="site-breadcrumb" style="background: url(assets/img/breadcrumb/01.jpg)">
                <div class="container">
                    <h2 class="breadcrumb-title">404 Error</h2>
                    <ul class="breadcrumb-menu">
                        <li><a href="/">Home</a></li>
                        <li class="active">404 Error</li>
                    </ul>
                </div>
            </div>
            <!-- breadcrumb end -->


            <!-- error area -->
            <div class="error-area py-120">
                <div class="container">
                    <div class="col-md-8 mx-auto">
                        <div class="error-wrapper">
                            <div class="error-img">
                                <h1 class="error-text">404</h1>
                            </div>
                            <h2>Opos... Page Not Found!</h2>
                            <p>The page you looking for not found may be it not exist or removed.</p>
                            <a href="home" class="theme-btn">Go Back Home <i class="far fa-home"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- error area end -->

        </main>


        <?php include("include/footer.php"); ?>
        <!-- js -->
        <?php include("include/jscript.php"); ?>

    </body>
</html>


