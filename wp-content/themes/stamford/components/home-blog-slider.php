<div class="home-blog-slider home-blog-padded duck overflow-hidden">
    <div class="container px-md-0 px-lg-0 position-relative ">
        <div class="blog-grid blog-carousel reveal--up">
            <?php for ($b=0;$b<9;$b++){ ?>

                    <div class="blog-single">
                        <div class="img-wrapper">
                            <img src="<?php echo get_template_directory_uri() ?>/images/blog-img.png" alt="">
                        </div>
                        <div class="blog-content">
                               <div class="desc">
                                   <h4>Aliquam at orci a nisi
                                       bibendum varius</h4>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                               </div>
                            <div class="log">
                                <div class="date">
                                    <span class="num">01</span>
                                        <span class="month">Mar</span>
                                </div>
                                <div class="year">
                                    2019
                                </div>
                                <div class="arrow">
                                    <a href="">
                                        <i class="fas fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php  } ?>
        </div>
<!--        <div class="position-absolute duck-img"><img src="--><?php //echo get_template_directory_uri()?><!--/images/duck.png" alt=""></div>-->
    </div>
</div>
