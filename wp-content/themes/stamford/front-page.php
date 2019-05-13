<?php //include (locate_template ('header.php') ); ?>
<!---->
<?php //while ( have_posts() ) : the_post(); ?>
<!--    <h1>--><?php //the_title();?><!--</h1>-->
<!--    --><?php //the_content(); ?>
<?php //endwhile; ?>
<!---->
<?php //include (locate_template ('footer.php') ); ?>

<!-- Stamford -->

<?php include (locate_template('header.php'));?>
<?php include (locate_template('components/hero-home.php')) ?>
<?php include (locate_template('components/accreditaitons.php')) ?>
<?php include (locate_template('components/blog-home.php')) ?>
<?php include (locate_template('components/home-testimonials.php')) ?>
<?php include (locate_template('components/home-blog-slider.php')) ?>
<?php include (locate_template('components/v-box.php')) ?>

<?php include (locate_template('components/home-footer.php')) ?>
<?php include locate_template('footer.php');?>