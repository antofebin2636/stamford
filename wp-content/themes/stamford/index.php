<?php include locate_template('header.php');?>

<?php shape_filename(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php the_title();?>
<?php the_content(); ?>
<?php endwhile; ?>

<?php include locate_template('footer.php');?>