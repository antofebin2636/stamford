<?php if(is_front_page()){ ?>
    <div class="home-footer-padded"></div>
    <?php } ?>
</div>
</main>

<footer class="footer reveal--up">
    <div class="footer__border ">
        <img src="<?php echo get_template_directory_uri()?>/images/land.png" alt="">
    </div>

    <section class="footer-link">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-5 col-12 d-flex flex-column justify-content-lg-between justify-content-center align-items-center align-items-lg-start footer-col-1">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/main-logo.png " alt="">
                    </a>

                    <div class="social-media d-none d-lg-block">
                    <span class="title">
                        Follow us
                    </span>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="">
                                    <i class="fab fa-facebook-square"></i>
                                </a></li>
                            <li class="list-inline-item"><a href=""><i class="fab fa-twitter-square"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab fa-tumblr-square"></i></a></li>
                            <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-6 py-5 py-lg-0  offset-md-2 offset-lg-0 footer-col-2">
                    <div class="title">
                        <h5>Contact us</h5>

                        <div class="footer-addr">
                            <span class="title">Main Office</span>
                            <p>Brazenose House, St. Paul’s Street</p>
                            <p>Stamford, Lincolnshire PE9 2BE</p>
                            <p><a href="">+44 (0)1780 668000</a></p>
                            <p>ses@ses.lincs.sch.uk</p>
                        </div>

                        <div class="footer-addr">
                            <span class="title">Admissions</span>
                            <p><a href="">+44 (0)1780 668000</a></p>
                            <p>admissions@ses.lincs.sch.uk</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6 py-5 py-lg-0  offset-md-2 offset-lg-0 footer-col-3 ">
                    <div class="title">
                        <h5>Quick Links</h5>

                        <div class="footer-addr">
                            <ul>
                                <li><a href="">Vacancies</a></li>
                                <li><a href="">School Pictures</a></li>
                                <li><a href="">Facility Hire</a></li>
                                <li><a href="">School Shop</a></li>
                            </ul>
                        </div>

                    </div>
                </div>


            </div>

            <div class="mobile-social-wrapper d-block d-lg-none">
                <h5 class="d-inline-block">Follow us</h5>
                <ul class="list-inline d-inline-block">
                    <li class="list-inline-item"><a href="">
                            <i class="fab fa-facebook-square"></i>
                        </a></li>
                    <li class="list-inline-item"><a href=""><i class="fab fa-twitter-square"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fab fa-tumblr-square"></i></a></li>
                    <li class="list-inline-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

        </div>
    </section>


    <section class="footer-logo">
        <div class="container">
            <div class="footer-logo-carousel">
                <div class="logo-ft"><img src="<?php echo get_template_directory_uri()?>/images/footer/hm.png" alt=""></div>
                <div class="logo-ft"><img src="<?php echo get_template_directory_uri()?>/images/footer/gsa.png" alt=""></div>
                <div class="logo-ft"><img src="<?php echo get_template_directory_uri()?>/images/footer/ex.png" alt=""></div>
                <div class="logo-ft"><img src="<?php echo get_template_directory_uri()?>/images/footer/bsa.png" alt=""></div>
                <div class="logo-ft"><img src="<?php echo get_template_directory_uri()?>/images/footer/in.png" alt=""></div>
            </div>

        </div>
    </section>

    <section class="copy">
        <div class="container">
            <div class="copy-desc">
                <span>Copyright © <?php date('Y') ?> SES. All right reserved.</span>
            </div>
            <div class="policy">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="">Terms of Service</a></li>
                </ul>
            </div>
        </div>

    </section>


</footer>

<?php include locate_template('foot.php');?>