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

    <!-- Bootstrap Select CSS -->
    <link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />



    <!-- Document Title
    ============================================= -->
    <title>TES KELAYAKAN MOBIL</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <?php
    include "header.php";
    ?>
    <!-- #header end -->

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Aturan Rule</h1>
            <span>Masukan Aturan Rule</span>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Rule</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">
                <div class="col_full">
                    <h4>Rule</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Rem</th>
                                    <th>Rangka</th>
                                    <th>Emisi</th>
                                    <th>Then</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            require_once "koneksi.php";
                            $sql_rule = mysqli_query($con, "SELECT * FROM `rule`") or die ("Gagal " . mysqli_error($con));
                            while($tampil_rule = mysqli_fetch_array($sql_rule)){
                                //echo "IF" . " REM " . $tampil_rule['rem']. " RANGKA " . $tampil_rule['rangka']. " EMISI " . $tampil_rule['emisi'] . " THEN ". $tampil_rule['hasil'] . "<br>";
                                ?>
                                <tr>
                                    <td>IF</td>
                                    <td>Rem <?php echo $tampil_rule['rem']; ?></td>
                                    <td>Rangka <?php echo $tampil_rule['rangka']; ?></td>
                                    <td>Emisi <?php echo $tampil_rule['emisi']; ?></td>
                                    <td><?php echo $tampil_rule['hasil']; ?></td>
                                    <td><a href="add_rule.php?edit=<?php echo $tampil_rule['id']; ?>">Edit</a> / <a href="action.php?action=delete-rule&id=<?php echo $tampil_rule['id']; ?>">Delete</a></td>
                                </tr>
                            <?php };?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col_full">
                    <a class="button button-3d button-black nomargin fright" href="add_rule.php">Add Rule</a>
                </div>
            </div>

        </div>

    </section><!-- #content end -->

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

<!-- Bootstrap Select Plugin -->
<script type="text/javascript" src="js/components/bs-select.js"></script>
<link rel="stylesheet" href="css/components/bs-select.css" type="text/css" />

<!-- Select Splitter Plugin -->
<script type="text/javascript" src="js/components/selectsplitter.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">

    $('.selectsplitter').selectsplitter();

</script>
</body>
</html>