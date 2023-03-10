<footer id="footer" class="dark" style="background: url('images/footer-bg.jpg') repeat fixed; background-size: 100% 100%;">

    <div class="container">

        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap clearfix">

            <div class="col_full">

                <div class="widget clearfix">

                    <img src="images/footer-widget-logo.png" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

                    <div class="line" style="margin: 30px 0;"></div>

                    <div class="col_half">
                        <div class="widget clearfix">

                            <div class="hidden-xs hidden-sm"><div class="clear" style="padding-top: 10px;"></div></div>

                            <div class="col-md-6 bottommargin-sm center">
                                <?php
                                require_once "koneksi.php";
                                $query_ft1 = mysqli_query($con, "SELECT * FROM `data_kendaraan`");
                                $query_ft2 = mysqli_query($con, "SELECT * FROM `rule`");
                                if($data_ft1 = mysqli_num_rows($query_ft1)){
                                    if($data_ft2= mysqli_num_rows($query_ft2)){
                                    }
                                }
                                ?>
                                <div class="counter counter-small" style="color: #35BBAA;"><span data-from="4" data-to="<?php echo $data_ft1; ?>" data-refresh-interval="80" data-speed="1000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Data Mobil</h5>
                            </div>

                            <div class="col-md-6 bottommargin-sm center col_last">
                                <div class="counter counter-small" style="color: #2CAACA;"><span data-from="4" data-to="<?php echo $data_ft2; ?>" data-refresh-interval="50" data-speed="1500" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Aturan Rule</h5>
                            </div>

                        </div>
                    </div>

                    <div class="col_half col_last">
                        <h4>Uji Kelayakan Mobil Menggunakan Metode Fuzzy</h4>
                        <p>Website ini diharapkan dapat mempermudah dalam melakukan pengujian kelayakan terhadap mobil, sehigga dalam prosesnya dapat memperbaiki kualitas mobil yang ada di <strong>Indonesia.</strong></p>
                    </div>

                </div>

            </div>

        </div><!-- .footer-widgets-wrap end -->

    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                Copyrights &copy; Kelompok LOKOMOTIF JOMBANG.
            </div>

            <div class="col_half col_last tright">
                <div class="fright clearfix">
                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
                        <i class="icon-facebook"></i>
                        <i class="icon-facebook"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                        <i class="icon-twitter"></i>
                        <i class="icon-twitter"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
                        <i class="icon-gplus"></i>
                        <i class="icon-gplus"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
                        <i class="icon-pinterest"></i>
                        <i class="icon-pinterest"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
                        <i class="icon-vimeo"></i>
                        <i class="icon-vimeo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
                        <i class="icon-github"></i>
                        <i class="icon-github"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
                        <i class="icon-yahoo"></i>
                        <i class="icon-yahoo"></i>
                    </a>

                    <a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                        <i class="icon-linkedin"></i>
                        <i class="icon-linkedin"></i>
                    </a>
                </div>
            </div>

        </div>

    </div><!-- #copyrights end -->

</footer>