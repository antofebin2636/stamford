 <div class="v-box box-padded clearfix" >

    <div class="container position-relative clearfix">
        <img class="duck-img delay-up" src="<?php echo get_template_directory_uri() ?>/images/duck.png" alt="">
        <div class="v-box-wrapper">
            <h3 class="title reveal--up">
                Where next?
            </h3>
        </div>
        <?php for($bo= 0; $bo<3; $bo++) { ?>
            <div class="v-float reveal--up">
                <div class="v-float-desc">
                    <img src="<?php echo get_template_directory_uri()?>/images/b2.png" alt="" />
                    <div class="v-desc-box delay-up">
                        <div class="v-desc">
                            <h4>About Stamford</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque </p>
                        </div>

                        <div   class="arrow">
                            <div class="ar">
                                <i class="far fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
