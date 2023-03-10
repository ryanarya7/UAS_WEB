<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Adiholick" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Home - TES KELAYAKAN MOBIL</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header dark full-header no-sticky">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.php" class="standard-logo" data-dark-logo="images/logo.png"><img src="images/github.png" alt="Canvas Logo"></a>
                    <a href="index.php" class="retina-logo" data-dark-logo="images/logo.png"><img src="images/github.png" alt="Canvas Logo"></a>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>

                        <?php
                        require_once "koneksi.php";
                        if(!isset($_SESSION)) {
                            session_start();
                        }
                        if (!empty($_SESSION['username'])){
                            $sql_nav = mysqli_query($con, "SELECT * FROM `menu`");
                            while($rs_nav = mysqli_fetch_array($sql_nav)){
                                ?>
                                <li><a href="<?php echo $rs_nav['link']; ?>"><?php echo $rs_nav['nama'] ?></a></li>
                                <?php
                            }
                        }else{
                            echo "<li class=\"current\"><a href=\"index.php\"><div>Home</div></a></li>";
                            echo "<li><a href=\"login.php\"><div>Login</div></a></li>";
                        }
                        ?>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <section id="slider" class="force-full-screen full-screen">

        <div class="force-full-screen full-screen dark" style="background-image: url('images/bg1.jpg');background-position: 50% 0;">

            <div class="container clearfix">
                <div class="slider-caption slider-caption-center">
                    <h2 data-animate="fadeInDown">Tes Kelayakan Mobil</h2>
                    <p data-animate="fadeInUp" data-delay="400">Tes kelayakan mobil berdasarkan metode Fuzzy</p>
                    <a data-animate="fadeInUp" data-delay="600" href="input.php" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin" style="margin-top: 30px;">Tes Kelayakan</a>
                </div>
            </div>

        </div>

    </section>

    <!-- Footer
    ============================================= -->
    <?php include "footer.php"; ?>
    <!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>