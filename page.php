<?php
    get_header();
?>
    <?php while ( have_posts() ) : the_post(); ?>

        <?php if( has_post_thumbnail() ): ?>
            <div class="page-mast">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>

        <div class="page-title">
            <h1><?php the_title(); ?></h1>
        </div>

        <div class="page-content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; // End of the loop. ?>

<?php
    get_footer();
