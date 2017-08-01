<?php
    get_header();
?>
    <?php while ( have_posts() ) : the_post(); ?>

            <?php if( has_post_thumbnail() ): ?>
                <div class="page-mast">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>

            <div class="contact-bar">
                Control the Security of Managing Your Business Records <a href="<?php echo home_url(); ?>/contact" class="btn btn-primary">Work With Us</a>
            </div>

        <div class="container py-5">
            <div class="post-page">
                <?php the_content(); ?>
            </div>
        </div>

    <?php endwhile; // End of the loop. ?>

<?php
    get_footer();
