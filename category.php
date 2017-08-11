<?php
    // BLOG HOME

    get_header();
    $postId = get_the_post_id();

    $primaryTitle = get_post_meta( $postId, 'mast_page_title', true );
    if( empty($primaryTitle) ) {
        $primaryTitle = "storage. scanning. shredding.";
    }
?>
<div class="mast page-mast">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2017/08/mast-truck.jpg" alt="">
    <div class="mast-overlay">
        <h1><?php echo $primaryTitle; ?></h1>
        <h2><?php echo $sectionTitle; ?></h2>
        <a class="btn btn-page-mast" href="<?php echo home_url('/contact/'); ?>">Contact Us Today!</a>
    </div>
</div>

<div class="container">
    <div class="row blog-content">
        <div class="col col-12 col-lg-9">

            <div class="blog-listing">
            <h1><?php echo single_cat_title(); ?> <small class="text-muted">News Posts</small></h1>

            <?php while ( have_posts() ) : the_post(); ?>
                <article>

                    <h2 class="post-title">
                        <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>

                    <?php the_excerpt(); ?>

                </article>
            <?php endwhile; // End of the loop. ?>
            </div>

            <div class="next-prev">
                <div class="prev"><?php next_posts_link( '<i class="fa fa-angle-double-left"></i> Older posts' ); ?></div>
                <div class="next"><?php previous_posts_link( 'Newer posts <i class="fa fa-angle-double-right"></i>' ); ?></div>
            </div>

        </div>

        <div class="col col-12 col-lg-3">

            <div class="blog-sidebar">
                <?php dynamic_sidebar( 'page_sidebar_1' ); ?>
            </div>

        </div>
    </div>
</div>

<?php
    get_footer();
