<!DOCTYPE html>
<?php
require_once "koneksi.php";
if(!isset($_SESSION)) {
    session_start();
}
if (empty($_SESSION['username'])){
    session_destroy();
    header('Location: login.php');
}
//------ Ini Untuk Fungsi Edit / Diagnosa Ulang ----//
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $selected = "selected=\"selected\"";
    $selected_default = "";

    $sql = mysqli_query($con, "SELECT * FROM `data_kendaraan` WHERE `id`='$id'");
    if($tampil= mysqli_fetch_array($sql)){
        $merek = $tampil['merek'];
        $pembuat = $tampil['pembuat'];
        $tipe = $tampil['tipe'];
        $jenis = $tampil['jenis'];
        $chassis = $tampil['chassis_no'];
        $engine = $tampil['engine_no'];
        $model = $tampil['model'];
        $letak_motor = $tampil['letak_motor'];
        $silinder = $tampil['silinder'];
        $rem = $tampil['rem'];
        $rangka = $tampil['rangka'];
        $emisi = $tampil['emisi'];
    }
}else{
    $selected_default = "selected=\"selected\"";
    $id = "";
    $merek = "";
    $pembuat = "";
    $tipe = "";
    $jenis = "";
    $chassis = "";
    $engine = "";
    $model = "";
    $letak_motor = "";
    $silinder = "";
    $rem = "";
    $rangka = "";
    $emisi = "";
}
?>
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

    <!-- Select-Boxes CSS -->
    <link rel="stylesheet" href="css/components/select-boxes.css" type="text/css" />

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
            <h1>Data Spesifikasi Kendaraan Mobil</h1>
            <span>Masukan Data Mobil</span>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Input Data</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <form id="input_data" name="input_data" action="hasil.php" method="post" class="nobottommargin">
                    <div class="col_full">
                        <label>Merek :</label>
                        <input id="id_hidden" name="id_hidden" type="hidden" class="form-control" value="<?php echo $id; ?>">
                        <input id="tanggal" name="tanggal" type="hidden" class="form-control" value="<?php echo date("Y-m-d"); ?>">
                        <input id="merek_kendaraan" name="merek_kendaraan" class="form-control" placeholder="Merek" value="<?php echo $merek; ?>">
                    </div>

                    <div class="col_full">
                        <label>Nama Pembuat / Pemegang Merek :</label>
                        <input id="nama_pembuat" name="nama_pembuat" class="form-control" placeholder="Nama Pembuat / Pemegang Merek" value="<?php echo $pembuat; ?>">
                    </div>
                    <div class="col_half">
                        <label>Tipe Kendaraan :</label>
                        <select id="tipe_kendaraan" name="tipe_kendaraan" class="select-hide form-control bottommargin-sm" style="width: 100%;">
                            <option value="" <?php echo $selected_default; ?> disabled="disabled">-Pilih Tipe Kendaraan-</option>
                            <option value="Angkutan Penumpang" <?php if($tipe=="Angkutan Penumpang"){echo $selected;} ?>>Angkutan Penumpang</option>
                            <option value="Angkutan Barang" <?php if($tipe=="Angkutan Barang"){echo $selected;} ?>>Angkutan Barang</option>
                        </select>
                    </div>

                    <div class="col_half col_last">
                        <label>Jenis Kendaraan :</label>
                        <select id="jenis_kendaraan" name="jenis_kendaraan" class="select-hide form-control bottommargin-sm" style="width: 100%;">
                            <option value="" selected="selected" disabled="disabled">-Pilih Jenis Kendaraan-</option>
                            <option value="Angkutan Kota" <?php if($jenis=="Angkutan Kota"){echo $selected;} ?> >Angkutan Kota</option>
                            <option value="Angkutan Pedesaan" <?php if($jenis=="Angkutan Pedesaan"){echo $selected;} ?>>Angkutan Pedesaan</option>
                        </select>
                    </div>

                    <div class="divider divider-center"><i class="icon-cloud"></i></div>

                    <div class="col_half">
                        <label>Chassis No. :</label>
                        <input id="chassis_no" name="chassis_no" class="form-control" placeholder="Chassis Number" value="<?php echo $chassis; ?>" >
                    </div>

                    <div class="col_half col_last">
                        <label>Engine No. :</label>
                        <input id="engine_no" name="engine_no" class="form-control" placeholder="Engine Number" value="<?php echo $engine; ?>">
                    </div>

                    <div class="col_one_third">
                        <label>Model : </label>
                        <select id="model_kendaraan" name="model_kendaraan" class="select-hide form-control bottommargin-sm" style="width: 100%;">
                            <option value="" <?php echo  $selected_default; ?>disabled="disabled">-Pilih Model-</option>
                            <option value="OHV" <?php if($model=="OHV"){echo $selected;} ?>>OHV</option>
                            <option value="DOHC" <?php if($model=="DOHC"){echo $selected;} ?> >DOHC</option>
                            <option value="SOHC" <?php if($model=="SOHC"){echo $selected;} ?> >SOHC</option>
                        </select>
                    </div>

                    <div class="col_one_third">
                        <label>Letak Motor Penggerak :</label>
                        <select id="letak_motor" name="letak_motor" class="select-hide form-control bottommargin-sm" style="width: 100%;">
                            <option value="" selected="selected" disabled="disabled">-Pilih Letak Motor Penggerak-</option>
                            <option value="FF" <?php if($letak_motor=="FF"){echo $selected;} ?>>FF</option>
                            <option value="FR" <?php if($letak_motor=="FR"){echo $selected;} ?>>FR</option>
                            <option value="RR" <?php if($letak_motor=="RR"){echo $selected;} ?>>RR</option>
                        </select>
                    </div>

                    <div class="col_one_third col_last">
                        <label>Jumlah Konfigurasi Silinder : </label>
                        <input id="jumlah_silinder" name="jumlah_silinder" class="form-control" placeholder="Jumlah Silinder" value="<?php echo $silinder; ?>">
                    </div>

                    <div class="divider divider-short divider-center"><i class="icon-crop"></i></div>

                    <div class="col_one_third">
                        <label>Sistem Pengereman (%) :</label>
                        <input id="sistem_pengereman" name="sistem_pengereman" class="form-control" placeholder="20% - 90%" value="<?php echo $rem; ?>" >
                    </div>
                    <div class="col_one_third">
                        <label>Rangka Landasan (%) :</label>
                        <input id="rangka_landasan" name="rangka_landasan" class="form-control" placeholder="20% - 90%" value="<?php echo $rangka; ?>">
                    </div>
                    <div class="col_one_third col_last">
                        <label>Gas Emisi (%) :</label>
                        <input id="gas_emisi" name="gas_emisi" class="form-control" placeholder="20% - 90%" value="<?php echo $emisi; ?>">
                    </div>

                    <div class="coll_full nobottommargin">
                        <button id="submit_input" name="submit_input" class="button button-3d button-black nomargin" value="submit">Submit</button>
                    </div>
                </form>

                <div class="clear"></div>

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

<!-- Select-Boxes Plugin -->
<script type="text/javascript" src="js/components/select-boxes.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
<script type="text/javascript">
    jQuery(document).ready( function($){

        // Multiple Select
        $(".select-1").select2({
            placeholder: "Select Multiple Values"
        });

        // Loading array data
        var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];
        $(".select-data-array").select2({
            data: data
        })
        $(".select-data-array-selected").select2({
            data: data
        });

        // Enabled/Disabled
        $(".select-disabled").select2();
        $(".select-enable").on("click", function () {
            $(".select-disabled").prop("disabled", false);
            $(".select-disabled-multi").prop("disabled", false);
        });
        $(".select-disable").on("click", function () {
            $(".select-disabled").prop("disabled", true);
            $(".select-disabled-multi").prop("disabled", true);
        });

        // Without Search
        $(".select-hide").select2({
            minimumResultsForSearch: Infinity
        });

        // select Tags
        $(".select-tags").select2({
            tags: true
        });

        // Select Splitter
        $('.selectsplitter').selectsplitter();

    });
</script

</body>
</html>