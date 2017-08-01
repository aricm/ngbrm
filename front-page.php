<?php
    get_header();
?>
<!--     <div class="contact-bar">
        Control the Security of Managing Your Business Records <a href="<?php echo home_url(); ?>/contact" class="btn btn-primary">Work With Us</a>
    </div> -->

    <?php while ( have_posts() ) : the_post(); ?>

        <?php if( has_post_thumbnail() ): ?>
            <div class="homepage-hero">
                <?php the_post_thumbnail(); ?>
            </div>
        <?php endif; ?>

        <?php the_content(); ?>

    <?php endwhile; // End of the loop. ?>

<?php
    get_footer();
