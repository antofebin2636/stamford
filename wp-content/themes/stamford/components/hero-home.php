<section class="hero-banner">
    <div class="hero-slider" data-carousel>
<?php for ($i=0;$i<3;$i++){ ?>
        <div class="carousel-cell" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/images/banner1.jpg"  data-speed="0.2">
            <div class="overlay"></div>
            <div class="banner-content-container container-banner container">
                <div class="flex-banner-content" data-rellax-speed="-7">
                    <div class="white-border">
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="96" viewBox="0 0 13 96">
                            <rect id="diamond-stamford_<?= $i ?>" width="10" height="96" fill="#fff"/>

                        </svg>
                    </div>
                    <div class="flex-content">
                        <div class="title-line"></div>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 28 514">
                            <rect id="why_stamford" width="10" height="514" fill="#01c1d8"/>
                        </svg>
                        <div class="content__wrapper stagger">
                            <h3 class="title">Why Stamford ?</h3>
                            <span class="sub-title">Find out more at
                                    our next open day</span>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nibh ante, sollicitudin vitae pharetra id, </p>
                            <a href="" class="btn ">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
    </div>

    <div class="banner-box reveal--up">
        <div class="box-grid">
            <?php for ($r=0;$r<6;$r++){ ?>
                <div class="single-grid">
                    <a href="">
                        <img src="<?php echo get_template_directory_uri() ?>/images/img1.png" alt="">
                        <div class="box-content">
                            <div class="desc">
                                <span class="title">Nursery</span>
                                <span class="age">Ages 2-4</span>
                            </div>
                            <div class="arrows">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="desk-box">
    <div class="desk-box__grid">
        <?php for($b=0 ; $b<6; $b++){ ?>
        <div class="box-single reveal--up">
            <a href="">
                <img src="<?php echo get_template_directory_uri() ?>/images/box2.png" alt="">
                <div class="box-desc-pos">
                    <div class="box-desc">
                        <div class="content">
                            <span class="title">Junior</span>
                            <span class="age">Aged 2-4</span>
                        </div>
                        <div class="arrow"><i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </a>
        </div>
        <?php } ?>
    </div>
</section>
