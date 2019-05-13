<?php include(locate_template ('header.php') ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<h1><?php the_title();?></h1>
<?php the_content(); ?>
<?php endwhile; ?>

<?php include(locate_template ('footer.php')); ?>