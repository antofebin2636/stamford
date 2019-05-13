<div class="home-slider-testimonials box-padded" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri() ?>/images/bngg.jpg"  data-speed="0.2" >
    <div class="box-overlay"></div>
    <div class="container">
        <div class="testimonial_wrapper">
            <div class="box-one">
                <h3>Maecenas sattis ullamcorper aru ac imperdiet</h3>
            </div>
            <div class="box-two slider-testimonial">
                <?php for($sl = 0; $sl<3; $sl++){ ?>
                <div class="slider-test">
                    <i class="fas fa-quote-left"></i>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed aliquet justo, id euismod nunc. Sed aliquam finibus leo, ac mollis sapien tincidunt nec. Maecenas sagittis ullamcorper arcu ac imperdiet. Cras pulvinar a augue ac vehicula. Nunc vitae dui at nunc mattis blandit. Class aptent taciti sociosqu ad litora torquent per conubia</p>
                    <span class="title-wrapper">
                         <span class="title">Name Surname</span> <span class="position">Title or position</span>
                    </span>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
